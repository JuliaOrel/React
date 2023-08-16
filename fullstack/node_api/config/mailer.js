
const nodemailer = require('nodemailer');

const transporter = nodemailer.createTransport({
    host: process.env.MAIL_HOST,
    port: process.env.MAIL_PORT,
    secure: true,
    auth: {
        user: process.env.MAIL_FROM_ADDRESS,
        pass: process.env.MAIL_PASSWORD
    }
});
const mailOptions = {
    from: process.env.MAIL_FROM_ADDRESS,
    to: process.env.MAIL_USERNAME,
    subject: 'Sending Email using Node.js',
    text: 'That was easy!'
};

const sendEmail = () => {
    transporter.sendMail(mailOptions, function(error, info){
        if (error) {
            console.log(error);
           console.log('flow')
        } else {
            console.log('Email sent: ' + info.response);
        }
    });
};

module.exports = {
    sendEmail: sendEmail
};