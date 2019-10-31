"use strict";
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
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
User_1.User.belongsToMany(Map_1.Map, { foreignKey: { name: "userId" }, through: Rating_1.Rating });
Map_1.Map.belongsToMany(User_1.User, { foreignKey: { name: "mapId" }, through: Rating_1.Rating });
User_1.User.belongsToMany(Map_1.Map, { foreignKey: { name: "userId" }, through: Score_1.Score });
Map_1.Map.belongsToMany(User_1.User, { foreignKey: { name: "mapId" }, through: Score_1.Score });
// Create tables if not exists
Sequelize_1.sequelize.sync();
function stuff() {
    return __awaiter(this, void 0, void 0, function* () {
    });
}
//# sourceMappingURL=db.js.map