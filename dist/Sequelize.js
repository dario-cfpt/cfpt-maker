"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const sequelize_1 = require("sequelize");
exports.Model = sequelize_1.Model;
exports.DataTypes = sequelize_1.DataTypes;
const sequelize = new sequelize_1.Sequelize("cfpt_maker", "root", "", {
    host: "localhost",
    dialect: "mysql",
});
exports.sequelize = sequelize;
//# sourceMappingURL=Sequelize.js.map