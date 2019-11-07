import {Sequelize, Model, DataTypes} from 'sequelize';

const sequelize = new Sequelize(
    "cfpt_maker",
    "GreenMario",
    "SuperMaker19",
    {
        host: "localhost",
        dialect: "mysql",
    });

export {sequelize, Model, DataTypes};