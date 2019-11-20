import {sequelize, Model, DataTypes} from "../Sequelize";

class User extends Model {
    public id!: number;
    public email!: string;
    public username!: string;
    public password!: string;
}

User.init({
    id: {
        type: DataTypes.INTEGER.UNSIGNED,
        autoIncrement: true,
        primaryKey: true,
    },
    email: {
        type: DataTypes.STRING(50),
        allowNull: false,
    },
    username: {
        type: DataTypes.STRING(50),
        allowNull: false,
    },
    password: {
        type: DataTypes.STRING(50),
        allowNull: false,
    }
}, {
    indexes: [
        {
            unique: true,
            fields: ["email"]
        },
        {
            unique: true,
            fields: ["username"],
        }
    ],
    timestamps: false,
    tableName: 'users',
    collate: 'utf8mb4_bin',
    sequelize: sequelize,
});

export {User};