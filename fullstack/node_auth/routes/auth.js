let express=require('express');
let router=express.Router();

let authController=require('../controllers/authController')

router.post('/register', authController.register)
module.exports=router;