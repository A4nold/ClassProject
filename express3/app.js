const express = require('express');
const bodyParser = require('body-parser');

const app = express();


const urlencondeParser = bodyParser.urlencoded({extended: true});

app.use('/assets', express.static('assets'));
app.use('/node_modules', express.static('node_modules'));

app.get('/', (req, res) => {
    res.sendFile(__dirname+'/index.html');
});

app.listen('3000', () => {
    console.log('listening at port 3000')
})