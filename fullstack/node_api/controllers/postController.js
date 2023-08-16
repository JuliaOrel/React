const sendMsgToChatGPT = require('./../config/producerChatGPT')
const emailModule = require('./../config/mailer');
//Collection of posts

let posts= [
{title: "Hello 1", body: "world 1", chatGPT: null},
{title: "Hello 2", body: "world 2", chatGPT: null}
]

//CRUD -
//RESTful API

exports.getPosts=function (request, response){
    response.send(posts)
}

exports.getPost=function(request, response){
    let postId=request.params.postId
    response.send(posts[postId])
}
exports.createPosts=async function (request, response){
    let newPost=request.body
    console.log(request.body)
    sendMsgToChatGPT(newPost)
    emailModule.sendEmail()
    //newPost.id=posts.length
    //newPost.chatGPT = await sendMsgToChatGPT(
    //"Напиши ключевые слова для этого текста. На русском. Не более 10. Ответ раздели запятыми: \n " + newPost.body)
    posts.push(newPost)
    response.status(201).send(newPost)
}

exports.updatePost=function(request, response){
    let postId=request.params.postId
    let newPost=request.body
    posts[postId]=newPost
    response.status(204).send(newPost)
}
exports.deletePost=function(request, response){
    let postId=request.params.postId
    posts.splice(postId,1)
    response.status(204).send()
}



