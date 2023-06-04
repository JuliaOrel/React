//  Модуль для работы с веб-сервером
let express = require('express');
let app = express();

// Модуль работы с базой данных
// const sequelize = require('./config/mySql')
// const userModel = require('./models/UserSqlModel')
// sequelize.sync().then(()=>{}).catch(err=>console.log(err));

//Json и кодировки
app.use(express.json());
app.use(express.urlencoded({ extended: false }));

//Для обработки объектов в body
const bodyParser=require('body-parser')
app.use(bodyParser.json());


//маршрутизация

app.use('/api/auth', require('./routes/auth'))
module.exports=app;





//Экспорт настроек в главный файл
module.exports = app;
