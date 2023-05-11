const mysql = require('mysql');

const connection = mysql.createConnection({
    host: 'localhost',
    port: 3325,  // Puerto 3307 en lugar del predeterminado 3306 (xamp)
    user: 'root',
    password: '',
    database: 'miauFlix'
});

connection.connect((err) => {
    if (err) throw err;
    console.log('La conexión funciona');
})

connection.end()
