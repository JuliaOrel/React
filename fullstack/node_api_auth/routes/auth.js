let express=require('express');
let router=express.Router();
let authenticateJWT=require('../middlewares/authenticateJWT')

let authController=require('../controllers/authController')

router.post('/register', authController.register)
router.get('/all', authenticateJWT, authController.showAll)
module.exports=router;