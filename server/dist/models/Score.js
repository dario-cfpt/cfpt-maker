"use strict";
Object.defineProperty(exports, "__esModule", { value: true });
const Sequelize_1 = require("../Sequelize");
class Score extends Sequelize_1.Model {
}
exports.Score = Score;
Score.init({
    score: {
        type: Sequelize_1.DataTypes.INTEGER,
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'scores',
    sequelize: Sequelize_1.sequelize,
});
//# sourceMappingURL=Score.js.map