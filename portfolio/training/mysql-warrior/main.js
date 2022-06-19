const express = require('express');
const mysql2 = require('mysql2/promise');

this.pool = mysql2.createPool({
    connectionLimit: 10,
    host: 'localhost',
    user: 'kera_kera',
    password: '5813910K',
    database: 'kera_addressbook',
    port: '3306',
});

const app = express();

app.get('/', function(req, res) {
    pool.query('SELECT * FROM abonents').then(function(data) {
        const abonents = data[0];
        res.send(`<!DOCTYPE html>
        <html>
            <body>
                <ul>
                    ${abonents.map(abonent => `<li>${abonent.name}</li>`).join('')}
                </ul>
            </body>
        </html>`);
    });
});

app.listen(3000, function() {
    console.log('server started!');
});