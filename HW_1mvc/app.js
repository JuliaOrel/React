const express=require("express");
const app=express();
const userRouter=require("./routes/userRouter.js");
const homeRouter=require("./routes/homeRouter.js");


//paths and their handlers inside of userRouter

app.use("/users", userRouter);

//paths and their handlers inside of homeRouter

app.use("/", homeRouter);

app.use(function(req,resp, next){
    resp.status(404).send("Not found")
});

app.listen(3000, ()=>console.log("Server is uploaded and waiting for connection..."));