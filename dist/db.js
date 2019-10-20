"use strict";
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : new P(function (resolve) { resolve(result.value); }).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
Object.defineProperty(exports, "__esModule", { value: true });
const sequelize_1 = require("sequelize");
const sequelize = new sequelize_1.Sequelize("cfpt_maker", "root", "", {
    host: "localhost",
    dialect: "mysql",
});
// Typescript class
class User extends sequelize_1.Model {
}
class Map extends sequelize_1.Model {
}
class Asset extends sequelize_1.Model {
}
class Rating extends sequelize_1.Model {
}
class Score extends sequelize_1.Model {
}
// Sequelize models
User.init({
    id: {
        type: sequelize_1.DataTypes.INTEGER.UNSIGNED,
        autoIncrement: true,
        primaryKey: true,
    },
    email: {
        type: sequelize_1.DataTypes.STRING(50),
        allowNull: false,
    },
    username: {
        type: sequelize_1.DataTypes.STRING(50),
        allowNull: false,
    },
    password: {
        type: sequelize_1.DataTypes.STRING(50),
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'users',
    sequelize: sequelize,
});
Map.init({
    id: {
        type: sequelize_1.DataTypes.INTEGER.UNSIGNED,
        autoIncrement: true,
        primaryKey: true,
    },
    name: {
        type: sequelize_1.DataTypes.STRING(50),
        allowNull: false,
    },
    filepath: {
        type: sequelize_1.DataTypes.STRING(128),
        allowNull: false,
    },
    creationDate: {
        type: sequelize_1.DataTypes.DATE,
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'maps',
    sequelize: sequelize,
});
Asset.init({
    id: {
        type: sequelize_1.DataTypes.INTEGER.UNSIGNED,
        autoIncrement: true,
        primaryKey: true,
    },
    name: {
        type: sequelize_1.DataTypes.STRING(50),
        allowNull: false,
    },
    filepath: {
        type: sequelize_1.DataTypes.STRING(128),
        allowNull: false,
    },
}, {
    timestamps: false,
    tableName: 'assets',
    sequelize: sequelize,
});
Rating.init({
    like: {
        type: sequelize_1.DataTypes.BOOLEAN,
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'ratings',
    sequelize: sequelize,
});
Score.init({
    score: {
        type: sequelize_1.DataTypes.INTEGER,
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'scores',
    sequelize: sequelize,
});
// Sequelize associations
Map.belongsTo(User, { foreignKey: { name: "userId", allowNull: false }, onDelete: 'CASCADE' });
User.hasMany(Map, { foreignKey: { name: "userId", allowNull: false }, onDelete: 'CASCADE' });
Map.belongsTo(Asset, { foreignKey: { name: "assetId", allowNull: false }, onDelete: 'CASCADE' });
Asset.hasMany(Map, { foreignKey: { name: "assetId", allowNull: false }, onDelete: 'CASCADE' });
User.belongsToMany(Map, { foreignKey: { name: "userId" }, through: Rating });
Map.belongsToMany(User, { foreignKey: { name: "mapId" }, through: Rating });
User.belongsToMany(Map, { foreignKey: { name: "userId" }, through: Score });
Map.belongsToMany(User, { foreignKey: { name: "mapId" }, through: Score });
// Create tables if not exists
sequelize.sync();
function stuff() {
    return __awaiter(this, void 0, void 0, function* () {
    });
}
exports.stuff = stuff;
//# sourceMappingURL=db.js.map