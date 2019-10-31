"use strict";

import {sequelize} from "./Sequelize";
import {Asset} from "./models/Asset";
import {Map} from "./models/Map";
import {Rating} from "./models/Rating";
import {Score} from "./models/Score";
import {User} from "./models/User";

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

export {Asset, Map, User, Score, Rating};