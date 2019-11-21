"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const express = require("express");
const sequelize_1 = require("sequelize");
const bodyParser = require("body-parser");
const CryptoJS = require("crypto-js");
const { Asset, Map, User, Score, Rating } = require('./db');
const app = express();
const status = require('http-status');
app.use(bodyParser.urlencoded({ extended: false })); // required for ajax POST data
app.use(bodyParser.json());
const hostname = '127.0.0.1';
const port = 3000;
const secretKey = "RED LUIGI";
function sendError(res, err, msg) {
    console.log(err);
    res.status(status.INTERNAL_SERVER_ERROR).send(msg);
}
app.use(function (req, res, next) {
    // Allow client to receive the data
    // from : https://enable-cors.org/server_expressjs.html
    res.header("Access-Control-Allow-Origin", "*");
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
});
app.get('/', (req, res) => {
    res.send("Hello World");
});
// Login for user
app.post('/login', (req, res) => {
    let email = req.body.email;
    let username = req.body.username;
    let password = req.body.password;
    if ((email || username) && password) {
        email = (email !== undefined) ? email.trim() : null;
        username = (username !== undefined) ? username.trim() : null;
        password = CryptoJS.SHA256(password, secretKey).toString();
        User.findOne({
            attributes: ["id", "username", "email"],
            where: {
                password: password,
                [sequelize_1.Op.or]: [
                    {
                        email: {
                            [sequelize_1.Op.like]: email,
                        }
                    },
                    {
                        username: {
                            [sequelize_1.Op.like]: username,
                        }
                    }
                ],
            }
        }).then(user => {
            if (user) {
                res.status(status.OK).send(user);
            }
            else {
                res.status(status.INTERNAL_SERVER_ERROR).send("Email/Username and/or password incorrect");
            }
        }).catch(err => {
            sendError(res, err, "Une erreure est survenue lors de la tentative de connexions.");
        });
    }
    else {
        res.status(status.INTERNAL_SERVER_ERROR).send("The field 'email'/'username' and/or the field 'password' is missing");
    }
});
// Create new user
app.post('/user', (req, res) => {
    const email = req.body.email;
    const username = req.body.username;
    const password = req.body.password;
    if (email && username && password) {
        req.body.email = email.trim();
        req.body.username = username.trim();
        req.body.password = CryptoJS.SHA256(req.body.password, secretKey).toString();
        User.create(req.body)
            .then(user => {
            res.status(status.OK).send(user);
        })
            .catch(err => {
            sendError(res, err, "Une erreure est survenue lors de la création de l'utilisateur.");
        });
    }
    else {
        res.status(status.INTERNAL_SERVER_ERROR).send("Email ou username incorrect");
    }
});
// Get user by id and his created maps, liked maps and scores
app.get('/user/:userId', (req, res) => {
    const userId = req.params.userId;
    if (userId) {
        User.findOne({
            attributes: ["id", "email", "username"],
            where: {
                id: userId,
            },
            include: [
                {
                    model: Map,
                    attributes: ["id", "name", "creationDate"],
                },
                {
                    model: Map, as: "MapScore",
                    attributes: ["name"]
                },
                {
                    model: Map, as: "MapRating",
                    attributes: ["name"],
                }
            ]
        }).then(user => {
            res.status(status.OK).send(user);
        }).catch(err => {
            sendError(res, err, "Une erreur est survenue.");
        });
    }
    else {
        res.status(status.INTERNAL_SERVER_ERROR).send("Id utilisateur inconnu");
    }
});
// Create new map
app.post('/map', (req, res) => {
    const name = req.body.name;
    const mapContent = req.body.mapContent;
    const spawnPosX = req.body.spawnPosX;
    const spawnPosY = req.body.spawnPosY;
    const nbRow = req.body.nbRow;
    const nbCol = req.body.nbCol;
    const userId = req.body.userId;
    const assetId = req.body.assetId;
    const today = new Date();
    if (name && mapContent && spawnPosX && spawnPosY && nbRow && nbCol && userId && assetId) {
        Map.create({
            name: name.trim(),
            mapContent: mapContent,
            nbRow: nbRow,
            nbCol: nbCol,
            creationDate: today,
            spawnPosX: spawnPosX,
            spawnPosY: spawnPosY,
            userId: userId,
            assetId: assetId,
        }).then(map => {
            res.status(status.OK).send(map);
        }).catch(err => {
            sendError(res, err, "Une erreur est survenue lors de la création de la map.");
        });
    }
    else {
        res.status(status.INTERNAL_SERVER_ERROR).send("Missing or incorrect fields.");
    }
});
app.get('/map/all', (req, res) => {
    Map.findAll({
        attributes: ["id", "name", "creationDate"],
        order: [
            ["creationDate", "DESC"],
        ],
        include: [
            {
                model: User,
                attributes: ["id", "username"]
            },
        ],
    }).then(maps => {
        res.status(status.OK).send(maps);
    }).catch(err => {
        sendError(res, err, "Une erreur est survenue.");
    });
});
app.get('/map/:mapId', (req, res) => {
    const mapId = req.params.mapId;
    if (mapId) {
        Map.findOne({
            attributes: ["id", "name", "mapContent", "nbRow", "nbCol", "creationDate", "spawnPosX", "spawnPosY"],
            where: {
                id: mapId,
            },
            include: [
                {
                    model: Asset,
                    attributes: ["filepath"]
                },
            ]
        }).then(map => {
            res.status(status.OK).send(map);
        }).catch(err => {
            sendError(res, err, "Une erreur est survenue.");
        });
    }
    else {
        res.status(status.INTERNAL_SERVER_ERROR).send("Id map inconnu");
    }
});
// Create a new asset
app.post('/asset', (req, res) => {
    const name = req.body.name;
    const filepath = req.body.filepath;
    if (name && filepath) {
        Asset.create({
            name: name.trim(),
            filepath: filepath.trim(),
        }).then(asset => {
            res.status(status.OK).send(asset);
        }).catch(err => {
            sendError(res, err, "Une erreur est survenue lors de la création de l'asset.");
        });
    }
    else {
        res.sendStatus(status.INTERNAL_SERVER_ERROR);
    }
});
// Insert a score
app.post('/score', (req, res) => {
    const score = req.body.score;
    const mapId = req.body.mapId;
    const userId = req.body.userId;
    if (score && mapId && userId) {
        Score.create({
            score: score,
            mapId: mapId,
            userId: userId,
        }).then(score => {
            res.status(status.OK).send(score);
        }).catch(err => {
            sendError(res, err, "Une erreur est survenue lors de l'insertion du score.");
        });
    }
    else {
        res.sendStatus(status.INTERNAL_SERVER_ERROR);
    }
});
// Insert a rating
app.post('/rating', (req, res) => {
    const like = req.body.like;
    const mapId = req.body.mapId;
    const userId = req.body.userId;
    if (like !== undefined && mapId && userId) {
        Rating.create({
            like: like,
            mapId: mapId,
            userId: userId,
        }).then(like => {
            res.status(status.OK).send(like);
        }).catch(err => {
            sendError(res, err, "Une erreur est survenue lors de l'insertion de la note.");
        });
    }
    else {
        res.sendStatus(status.INTERNAL_SERVER_ERROR);
    }
});
const server = app.listen(port, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});
//# sourceMappingURL=server.js.map