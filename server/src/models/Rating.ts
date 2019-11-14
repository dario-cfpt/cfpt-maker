import {sequelize, Model, DataTypes} from "../Sequelize";

class Rating extends Model {
    public like!: boolean;
}

Rating.init({
    like: {
        type: DataTypes.BOOLEAN,
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'ratings',
    sequelize: sequelize,
});

export {Rating};