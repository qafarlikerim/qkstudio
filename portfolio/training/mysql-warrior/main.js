const express = require('express');
const mysql2 = require('mysql2/promise');

const pool = mysql2.createPool({
    host: 'localhost',
    user: 'kera_kera',
    database: 'kera_addressbook',
    password: '5813910K',
});

const app = express();

app.get('/', function(req, res) {
    res.send('success!');
});

app.listen(3000, function() {
    console.log('server started!');
});