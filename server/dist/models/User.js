"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Sequelize_1 = require("../Sequelize");
class User extends Sequelize_1.Model {
}
exports.User = User;
User.init({
    id: {
        type: Sequelize_1.DataTypes.INTEGER.UNSIGNED,
        autoIncrement: true,
        primaryKey: true,
    },
    email: {
        type: Sequelize_1.DataTypes.STRING(50),
        allowNull: false,
    },
    username: {
        type: Sequelize_1.DataTypes.STRING(50),
        allowNull: false,
    },
    password: {
        type: Sequelize_1.DataTypes.STRING(50),
        allowNull: false,
    }
}, {
    indexes: [
        {
            unique: true,
            fields: ["email"]
        },
        {
            unique: true,
            fields: ["username"],
        }
    ],
    timestamps: false,
    tableName: 'users',
    collate: 'utf8mb4_bin',
    sequelize: Sequelize_1.sequelize,
});
//# sourceMappingURL=User.js.map