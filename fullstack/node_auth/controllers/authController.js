let users = []

exports.register = function (request, response) {
    let newUser=request.body
    console.log(newUser)
    response.status(201).send(newUser)
}
