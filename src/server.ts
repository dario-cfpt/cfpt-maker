import *  as express from 'express';
import {Op} from 'sequelize';
import {json} from "express";

const {Asset, Map, User, Score, Rating} = require('./db');

const app = express();
const status = require('http-status');
app.use(express.json());

const hostname = '127.0.0.1';
const port = 3000;


app.get('/', (req, res) => {
    res.send("Hello World");
});

// Login for user
app.post('/login', (req, res) => {
    const email = req.body.email.trim();
    const username = req.body.username.trim();
    const password = req.body.password;

    if ((email || username) && password) {
        User.findOne({
            where: {
                password: password,
                [Op.or]: [{email: email}, {username: username}],
            }
        }).then(user => {
            if (user) {
                res.status(status.OK).send(user);
            } else {
                res.status(status.INTERNAL_SERVER_ERROR).send("Username and/or password incorrect");
            }
        }).catch(err => {
            res.status(status.INTERNAL_SERVER_ERROR).send(err);
        });
    }
});

// Create new user
app.post('/user', (req, res) => {
    const email = req.body.email.trim();
    const username = req.body.username.trim();
    const password = req.body.password;

    if (email && username && password) {
        User.create(req.body)
            .then(user => {
                res.status(status.OK).send(user);
            })
            .catch(err => {
                res.status(status.INTERNAL_SERVER_ERROR).send(err);
            });
    } else {
        res.sendStatus(status.INTERNAL_SERVER_ERROR);
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
                {model: Map,}, { model: Score,}, { model: Rating,}
            ]
        }).then(user => {
            res.status(status.OK).send(user);
        }).catch(err => {
            res.status(status.INTERNAL_SERVER_ERROR).send(err);
        });
    } else {
        res.sendStatus(status.INTERNAL_SERVER_ERROR);
    }
});

// Create new map
app.post('/map', (req, res) => {
    const userId = req.body.user.id;
    const name = req.body.name.trim();
    const asset = req.body.asset;
    const map = req.body.map;
    const today = new Date();

    if (userId && name && asset && map && asset.id && map.mapContent && map.nbRow && map.nbCol) {
        Map.create({
            name: name,
            mapContent: map.mapContent,
            nbRow: map.nbRow,
            nbCol: map.nbCol,
            creationDate: today,
            userId: userId,
            assetId: asset.id,
        }).then(map => {
            res.status(status.OK).send(map);
        }).catch(err => {
            res.status(status.INTERNAL_SERVER_ERROR).send(err);
        });
    } else {
        res.sendStatus(status.INTERNAL_SERVER_ERROR);
    }
});

const server = app.listen(port, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});