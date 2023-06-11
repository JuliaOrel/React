//  Модуль для работы с веб-сервером
let express = require('express');
let app = express();

//для работы с папками
let path = require('path');
app.use(express.static(path.join(__dirname, 'public')));

//кукис
let cookieParser = require('cookie-parser');
app.use(cookieParser());

//логирование
let logger = require('morgan');
app.use(logger('dev'));

//Json и кодировки
app.use(express.json());
app.use(express.urlencoded({ extended: false }));

//Для обработки объектов в body
const bodyParser=require('body-parser')
app.use(bodyParser.json());


//маршрутизация
let postsRouter=require('./routes/posts')
app.use('/api/posts', postsRouter)
/*let indexRouter = require('./routes/index');
let usersRouter = require('./routes/users');
app.use('/', indexRouter);
app.use('/users', usersRouter);*/



//Экспорт настроек в главный файл
module.exports = app;
