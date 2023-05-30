let express=require('express');
let app=express();
const axios=require('axios');
const options = {
    method: 'GET',
    url: 'https://yawin-indian-astrology.p.rapidapi.com/BirthDetails',
    params: {
        date: '1988-07-15',
        time: '20:34:35',
        timezone: 'Europe/Kiev',
        latitude: '46.5700',
        longitude: '31.5900'
    },
    headers: {
        'X-RapidAPI-Key': process.env.APIKEY_HOROSCOPE,
        'X-RapidAPI-Host': 'yawin-indian-astrology.p.rapidapi.com'
    }
};

app.get('/api/horoscope', function(req, res){

    axios.request(options)
        .then(response => {
            console.log(response.data);
            res.send(response.data)
        })
        .catch(error=>{
            console.error(error);
            res.sendStatus(419).send(error)
        });
})

app.listen(3000, ()=>{
    console.log('wait')
})