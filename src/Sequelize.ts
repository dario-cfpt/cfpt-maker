import {Sequelize, Model, DataTypes} from 'sequelize';

const sequelize = new Sequelize(
    "cfpt_maker",
    "root",
    "",
    {
        host: "localhost",
        dialect: "mysql",
    });

export {sequelize, Model, DataTypes};