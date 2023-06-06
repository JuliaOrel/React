//  Модуль для работы с веб-сервером
let express = require('express');
let app = express();


//Json и кодировки
app.use(express.json());
app.use(express.urlencoded({ extended: false }));

//Для обработки объектов в body
const bodyParser=require('body-parser')
app.use(bodyParser.json());


//маршрутизация
// let postsRouter=require('./routes/posts')
// app.use('/api/posts', postsRouter)
app.use('/api/auth', require('./routes/auth'))

// Для работы с базой данных
require("./config/mongoDB").connect();







//Экспорт настроек в главный файл
module.exports = app;
