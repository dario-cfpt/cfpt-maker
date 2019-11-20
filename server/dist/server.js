"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const express = require("express");
const sequelize_1 = require("sequelize");
const bodyParser = require("body-parser");
const { Asset, Map, User, Score, Rating } = require('./db');
const app = express();
const status = require('http-status');
app.use(bodyParser.urlencoded({ extended: false })); // required for ajax POST data
app.use(bodyParser.json());
const hostname = '127.0.0.1';
const port = 3000;
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
    const email = req.body.email;
    const username = req.body.username;
    const password = req.body.password;
    if ((email || username) && password) {
        if (email !== undefined)
            email.trim();
        if (username !== undefined)
            username.trim();
        User.findOne({
            attributes: ["id", "username", "email"],
            where: {
                password: password,
                [sequelize_1.Op.or]: [{ email: email }, { username: username }],
            }
        }).then(user => {
            if (user) {
                res.status(status.OK).send(user);
            }
            else {
                res.status(status.INTERNAL_SERVER_ERROR).send("Username and/or password incorrect");
            }
        }).catch(err => {
            res.status(status.INTERNAL_SERVER_ERROR).send(err);
        });
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
app.get('/map/:mapId', (req, res) => {
    const mapId = req.params.mapId;
    if (mapId) {
        Map.findOne({
            attributes: ["id", "name", "mapContent", "nbRow", "nbCol", "creationDate"],
            where: {
                id: mapId,
            },
            include: [
                {
                    model: Asset,
                    attributes: ["filepath"]
                }
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
app.get('/map/all', (req, res) => {
    Map.findAll({
        attributes: ["id", "name", "creationDate"],
        include: [
            {
                model: User,
                attributes: ["id", "username"]
            },
        ]
    }).then(maps => {
        res.status(status.OK).send(maps);
    }).catch(err => {
        sendError(res, err, "Une erreur est survenue.");
    });
});
// Create new map
app.post('/map', (req, res) => {
    const userId = req.body.user.id;
    const name = req.body.name;
    const asset = req.body.asset;
    const map = req.body.map;
    const today = new Date();
    if (userId && name && asset && map && asset.id && map.mapContent && map.nbRow && map.nbCol) {
        Map.create({
            name: name.trim(),
            mapContent: map.mapContent,
            nbRow: map.nbRow,
            nbCol: map.nbCol,
            creationDate: today,
            userId: userId,
            assetId: asset.id,
        }).then(map => {
            res.status(status.OK).send(map);
        }).catch(err => {
            sendError(res, err, "Une erreur est survenue lors de la création de la map.");
        });
    }
    else {
        res.sendStatus(status.INTERNAL_SERVER_ERROR);
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