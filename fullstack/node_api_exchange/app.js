let express=require('express');
let app=express();
const axios=require('axios');
const url='https://v6.exchangerate-api.com/v6/09cc9af62f6bf1885fa09dae/latest/USD';
app.get('/api/exchange', function(req, res){
axios.get(url)
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