const express = require('express');
const app = express();
const bodyParser = require('body-parser');
const ejs = require('ejs');
const mongoose = require('mongoose');

let port = process.env.port || 3000;

app.get('/', function(req, res) {
  res.send('working');
});

app.listen(port, function() {
  console.log(`Your server has started on ${ port }.`)
})
