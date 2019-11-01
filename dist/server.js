"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const express = require("express");
const sequelize_1 = require("sequelize");
const { Asset, Map, User, Score, Rating } = require('./db');
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
    const email = req.body.email;
    const username = req.body.username;
    const password = req.body.password;
    if ((email || username) && password) {
        User.findOne({
            where: {
                password: password,
                [sequelize_1.Op.or]: [{ email: email }, { username: username }],
            }
        }).then(user => {
            res.send(user);
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
        User.create(req.body)
            .then(user => {
            res.sendStatus(status.OK);
        })
            .catch(err => {
            res.status(status.INTERNAL_SERVER_ERROR).send(err);
        });
    }
    else {
        res.sendStatus(status.INTERNAL_SERVER_ERROR);
    }
    console.log(email + " " + username + " " + password);
});
const server = app.listen(port, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
});
//# sourceMappingURL=server.js.map