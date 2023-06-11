const sequelize = require('./../config/mysql')
const Sequelize = require("sequelize");
const bcrypt=require('bcrypt');
const User = sequelize.define("users", {
    id: {
        type: Sequelize.INTEGER,
        autoIncrement: true,
        primaryKey: true,
        allowNull: false
    },
    email: {
        type: Sequelize.STRING,
        allowNull: false
    },
    password: {
        type: Sequelize.STRING,
        allowNull: false,
        // set(value){
        //     //Хеширование пароля перед созданием в БД
        //     const saltRounds=7;
        //     const salt=bcrypt.genSaltSync(saltRounds);
        //     const hashedPassword=bcrypt.hashSync(value, salt);
        //     this.password=hashedPassword;
        //
        // }
    }
});

module.exports = User