"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Sequelize_1 = require("../Sequelize");
class Asset extends Sequelize_1.Model {
}
exports.Asset = Asset;
Asset.init({
    id: {
        type: Sequelize_1.DataTypes.INTEGER.UNSIGNED,
        autoIncrement: true,
        primaryKey: true,
    },
    name: {
        type: Sequelize_1.DataTypes.STRING(50),
        allowNull: false,
    },
    filepath: {
        type: Sequelize_1.DataTypes.STRING(128),
        allowNull: false,
    },
}, {
    timestamps: false,
    tableName: 'assets',
    sequelize: Sequelize_1.sequelize,
});
//# sourceMappingURL=Asset.js.map