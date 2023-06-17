let express=require('express');
let router=express.Router();
let authController=require('../controllers/authController')
const authenticateJWT = require("../middlewares/authenticateJWT");

router.post('/register', authController.register)
router.get('/all', authenticateJWT, authController.showAll)
module.exports=router;
