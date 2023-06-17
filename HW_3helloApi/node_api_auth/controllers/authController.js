let users=[]
const {generateUUID}=require('../services/generateUUID')
const jwt= require('jsonwebtoken')
const MyRedisCacheJWT=require('../config/redisCasheJWT')
const JWT_SECRET_KEY=process.env.JWT_SECRET_KEY
const userModel=require('../models/User')
const UserMongoModel=require('../models/UserMongoModel')
exports.showAll=function(request, response){
    console.log(request.user)
    response.status(201).send(users)
}
exports.register = function (request, response) {
    let newUser=request.body
    console.log(newUser)

    userModel.create(newUser).then((data) =>{
        let token = jwt.sign({
            id: data.dataValues.id,
            email: data.dataValues.email
        }, JWT_SECRET_KEY)
        MyRedisCacheJWT.set(token, data.dataValues)
        response.status(201).json({
            user: data.dataValues,
            token: token
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

    //Mongo
    // let bodyUser=request.body;
    // const newMongoUser = new UserMongoModel(bodyUser)
    // newMongoUser.save( )
    //     .then(data => {
    //         let newUser = {
    //             _id: data._id,
    //             email: data.email,
    //         }
    //         response.status(201).json({
    //             user: newUser,
    //             token: jwt.sign(newUser, JWT_SECRET_KEY)
    //         })
    //     }).catch(err => {
    //     console.log(err)
    //     response.status(419).json({
    //         err
    //     })
    // })
}