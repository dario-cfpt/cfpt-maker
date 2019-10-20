"use strict";

import {Sequelize, Model, DataTypes} from 'sequelize';

const sequelize = new Sequelize(
    "cfpt_maker",
    "root",
    "",
    {
        host: "localhost",
        dialect: "mysql",
    });

// Typescript class

class User extends Model {
    public id!: number;
    public email!: string;
    public username!: string;
    public password!: string;
}

class Map extends Model {
    public id!: number;
    public name!: string;
    public filepath!: string;
    public creationDate!: Date;
}

class Asset extends Model {
    public id!: number;
    public name!: string;
    public filepath!: string;
}

class Rating extends Model {
    public like!: boolean;
}

class Score extends Model {
    public score: number;
}

// Sequelize models

User.init({
    id: {
        type: DataTypes.INTEGER.UNSIGNED,
        autoIncrement: true,
        primaryKey: true,
    },
    email: {
        type: DataTypes.STRING(50),
        allowNull: false,
    },
    username: {
        type: DataTypes.STRING(50),
        allowNull: false,
    },
    password: {
        type: DataTypes.STRING(50),
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'users',
    sequelize: sequelize,
});

Map.init({
    id: {
        type: DataTypes.INTEGER.UNSIGNED,
        autoIncrement: true,
        primaryKey: true,
    },
    name: {
        type: DataTypes.STRING(50),
        allowNull: false,
    },
    filepath: {
        type: DataTypes.STRING(128),
        allowNull: false,
    },
    creationDate: {
        type: DataTypes.DATE,
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'maps',
    sequelize: sequelize,
});

Asset.init({
    id: {
        type: DataTypes.INTEGER.UNSIGNED,
        autoIncrement: true,
        primaryKey: true,
    },
    name: {
        type: DataTypes.STRING(50),
        allowNull: false,
    },
    filepath: {
        type: DataTypes.STRING(128),
        allowNull: false,
    },
}, {
    timestamps: false,
    tableName: 'assets',
    sequelize: sequelize,
});

Rating.init({
    like: {
        type: DataTypes.BOOLEAN,
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'ratings',
    sequelize: sequelize,
});

Score.init({
    score: {
        type: DataTypes.INTEGER,
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'scores',
    sequelize: sequelize,
});

// Sequelize associations

Map.belongsTo(User, {foreignKey: {name: "userId", allowNull: false}, onDelete: 'CASCADE'});
User.hasMany(Map, {foreignKey: {name: "userId", allowNull: false}, onDelete: 'CASCADE'});
Map.belongsTo(Asset, {foreignKey: {name: "assetId", allowNull: false}, onDelete: 'CASCADE'});
Asset.hasMany(Map, {foreignKey: {name: "assetId", allowNull: false}, onDelete: 'CASCADE'});

User.belongsToMany(Map, {foreignKey: {name: "userId"}, through: Rating});
Map.belongsToMany(User, {foreignKey: {name: "mapId"}, through: Rating});

User.belongsToMany(Map, {foreignKey: {name: "userId"}, through: Score});
Map.belongsToMany(User, {foreignKey: {name: "mapId"}, through: Score});

// Create tables if not exists
sequelize.sync();

async function stuff() {

}


export {stuff};