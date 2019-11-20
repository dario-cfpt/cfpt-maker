"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Sequelize_1 = require("./Sequelize");
const Asset_1 = require("./models/Asset");
exports.Asset = Asset_1.Asset;
const Map_1 = require("./models/Map");
exports.Map = Map_1.Map;
const Rating_1 = require("./models/Rating");
exports.Rating = Rating_1.Rating;
const Score_1 = require("./models/Score");
exports.Score = Score_1.Score;
const User_1 = require("./models/User");
exports.User = User_1.User;
// Sequelize associations
Map_1.Map.belongsTo(User_1.User, { foreignKey: { name: "userId", allowNull: false }, onDelete: 'CASCADE' });
User_1.User.hasMany(Map_1.Map, { foreignKey: { name: "userId", allowNull: false }, onDelete: 'CASCADE' });
Map_1.Map.belongsTo(Asset_1.Asset, { foreignKey: { name: "assetId", allowNull: false }, onDelete: 'CASCADE' });
Asset_1.Asset.hasMany(Map_1.Map, { foreignKey: { name: "assetId", allowNull: false }, onDelete: 'CASCADE' });
Map_1.Map.belongsToMany(User_1.User, { as: "UserRating", foreignKey: { name: "mapId" }, through: Rating_1.Rating });
User_1.User.belongsToMany(Map_1.Map, { as: "MapRating", foreignKey: { name: "userId" }, through: Rating_1.Rating });
Map_1.Map.belongsToMany(User_1.User, { as: "UserScore", foreignKey: "mapId", through: Score_1.Score });
User_1.User.belongsToMany(Map_1.Map, { as: "MapScore", foreignKey: "userId", through: Score_1.Score });
// Create tables if not exists
Sequelize_1.sequelize.sync();
//# sourceMappingURL=db.js.map