"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Sequelize_1 = require("../Sequelize");
class Map extends Sequelize_1.Model {
}
exports.Map = Map;
Map.init({
    id: {
        type: Sequelize_1.DataTypes.INTEGER.UNSIGNED,
        autoIncrement: true,
        primaryKey: true,
    },
    name: {
        type: Sequelize_1.DataTypes.STRING(50),
        allowNull: false,
    },
    mapContent: {
        type: Sequelize_1.DataTypes.TEXT,
        allowNull: false,
    },
    nbRow: {
        type: Sequelize_1.DataTypes.INTEGER,
        allowNull: false,
    },
    nbCol: {
        type: Sequelize_1.DataTypes.INTEGER,
        allowNull: false,
    },
    creationDate: {
        type: Sequelize_1.DataTypes.DATE,
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'maps',
    sequelize: Sequelize_1.sequelize,
});
//# sourceMappingURL=Map.js.map