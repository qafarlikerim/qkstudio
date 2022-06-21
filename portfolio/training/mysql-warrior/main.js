const mysql = require('mysql');

const conn = mysql.createConnection({
    host: "localhost",
    user: "kera_kera",
    database: "kera_addressbook",
    password: "5813910K"
});

conn.connect(function (err) {
    if (err) {
        return console.error("Ощибка: " + err.message);
    }
    else {
        console.log("Подключение к серверу MySQL успешно установилено");
    }
})