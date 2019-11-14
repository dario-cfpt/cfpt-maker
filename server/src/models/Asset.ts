import {sequelize, Model, DataTypes} from "../Sequelize";

class Asset extends Model {
    public id!: number;
    public name!: string;
    public filepath!: string;
}

Asset.init({
    id: {
        type: DataTypes.INTEGER.UNSIGNED,
        autoIncrement: true,
        primaryKey: true,
    },
    name: {
        type: DataTypes.STRING(50),
        allowNull: false,
    },
    filepath: {
        type: DataTypes.STRING(128),
        allowNull: false,
    },
}, {
    timestamps: false,
    tableName: 'assets',
    sequelize: sequelize,
});

export {Asset};