const axios = require("axios");
const nodemailer = require('nodemailer');

const transporter = nodemailer.createTransport({
    service: process.env.MAIL_HOST,
    port: process.env.MAIL_PORT,

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
        } else {
            console.log('Email sent: ' + info.response);
        }
    });
};

module.exports = {
    sendEmail: sendEmail
};