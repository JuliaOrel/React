const os = require("os");
const greeting = require("./greetings");

// получим имя текущего пользователя
let userName = os.userInfo().username;


console.log(`Дата запроса: ${greeting.date}`);
console.log(greeting.getMessage(userName));