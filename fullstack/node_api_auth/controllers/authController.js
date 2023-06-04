const {generateUUID}=require('../services/generateUUID')
const jwt=require('jsonwebtoken')
const JWT_SECRET_KEY=process.env.JWT_SECRET_KEY
const userModel=require('../models/User')
let users = []

exports.showAll=function(request, response){
response.status(200).send(users)
}
exports.register = function (request, response) {
    let newUser=request.body

    userModel.create(newUser).then((data) =>{
        //console.log(data)
        response.status(201).json({
            user: data.dataValues,
            token: jwt.sign(newUser, JWT_SECRET_KEY)
    })
    // newUser.id = generateUUID()
    // users.push(newUser)
    // console.log(newUser)

    }).catch(err => {
        console.log(err)
        response.status(419).json({
            err
        })
    })
}
