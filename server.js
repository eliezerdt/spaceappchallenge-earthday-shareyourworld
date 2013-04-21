var express = require('express'),
    ozono = require('./capa-co2'),
    ozono = require('./capa-ozono');
 
var app = express();
 
app.get('/api/layer/:layer/year/:year/month/:month/lectureType/:lectureType', ozono.findById);

 app.listen(process.env.PORT, process.env.IP);

console.log('Server running ');