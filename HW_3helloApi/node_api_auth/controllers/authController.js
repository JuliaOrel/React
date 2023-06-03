let users=[]
const {generateUUID}=require('../services/generateUUID')
const jwt= require('jsonwebtoken')
const JWT_SECRET_KEY=process.env.JWT_SECRET_KEY
exports.showAll=function(request, response){
    response.status(201).send(users)
}
exports.register=function(request, response){
    let newUser=request.body
    newUser.id=generateUUID()
    users.push(newUser)
    console.log(newUser)

    response.status(201).json({
        user: newUser,
        token: jwt.sign(newUser, JWT_SECRET_KEY)
    })
}