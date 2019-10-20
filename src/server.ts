import *  as express from 'express';

const db = require('./db');

const app = express();

const hostname = '127.0.0.1';
const port = 3000;

app.get('/', (req, res) => {
    res.send("Hello World");
    console.log("hello");
});

const server = app.listen(port, () => {
    console.log(`Server running at http://${hostname}:${port}/`);
    db.stuff()
        .then(() => {
                console.log("end stuff")
            }
        );
});