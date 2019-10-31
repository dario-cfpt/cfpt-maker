"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Sequelize_1 = require("../Sequelize");
class Rating extends Sequelize_1.Model {
}
exports.Rating = Rating;
Rating.init({
    like: {
        type: Sequelize_1.DataTypes.BOOLEAN,
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'ratings',
    sequelize: Sequelize_1.sequelize,
});
//# sourceMappingURL=Rating.js.map