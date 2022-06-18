import express from 'express';
import { createPool } from 'mysql2/promise';

const pool = createPool({
    host: 'localhost',
    user: 'kera_kera',
    database: 'kera_addressbook',
    password: '5813910K',
});

const app = express();

app.get('/', function(req, res) {
    pool.query('SELECT * FROM abonents'),then(function (data) {
            res.json(data[0]);
        });
});

app.listen(3000, function() {
    console.log('server started!');
});