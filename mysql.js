const mysql = require('mysql');

const connection = mysql.createConnection({
    host: 'localhost',
    port: 3307,  // Puerto 3307 en lugar del predeterminado 3306 (xamp)
    user: 'root',
    password: '',
    database: 'miauFlix'
});

connection.connect((err) => {
    if (err) throw err;
    console.log('La conexión funciona');
})

//consulta
connection.query('SELECT * FROM TABLAPRUEBA',(err, rows)=>{
    if(err) throw err
    console.log('Los datos de la tabla son estos:')
    console.log(rows)
    console.log('La cantidad del resultado es:')

})

//insertar datos
const insertar = "INSERT INTO TABLAPRUEBA (id,nombre,apellido) VALUES (null, 'otro nombre', 'otro apellido')"
connection.query(insertar,(err, rows)=>{
    if (err) throw err
})
connection.end()

