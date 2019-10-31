import {sequelize, DataTypes, Model} from "../Sequelize";

class Map extends Model {
    public id!: number;
    public name!: string;
    public filepath!: string;
    public creationDate!: Date;
}

Map.init({
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
    creationDate: {
        type: DataTypes.DATE,
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'maps',
    sequelize: sequelize,
});

export {Map};