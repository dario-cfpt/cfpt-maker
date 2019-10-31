import {sequelize, Model, DataTypes} from "../Sequelize";

class Score extends Model {
    public score: number;
}

Score.init({
    score: {
        type: DataTypes.INTEGER,
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'scores',
    sequelize: sequelize,
});

export {Score};