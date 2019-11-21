import {sequelize, DataTypes, Model} from "../Sequelize";

class Map extends Model {
    public id!: number;
    public name!: string;
    public mapContent!: string;
    public nbRow!: number;
    public nbCol!: number;
    public creationDate!: Date;
    public spawnPosX!: number;
    public spawnPosY!: number;
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
    mapContent: {
        type: DataTypes.TEXT,
        allowNull: false,
    },
    nbRow: {
        type: DataTypes.INTEGER,
        allowNull: false,
    },
    nbCol: {
        type: DataTypes.INTEGER,
        allowNull: false,
    },
    creationDate: {
        type: DataTypes.DATE,
        allowNull: false,
    },
    spawnPosX: {
        type: DataTypes.INTEGER,
        allowNull: false,
    },
    spawnPosY: {
        type: DataTypes.INTEGER,
        allowNull: false,
    }
}, {
    timestamps: false,
    tableName: 'maps',
    sequelize: sequelize,
});

export {Map};