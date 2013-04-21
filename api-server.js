var express = require('express'),
    ozono = require('./api/capa-ozono');
 
var app = express();
 

app.get('/api/layer/:layer/year/:year/month/:month/lectureType/:lectureType', ozono.GetLayerInfo);

 app.listen(process.env.PORT, process.env.IP);

console.log('Server running ');