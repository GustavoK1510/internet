const express = require('express');
let app = express();

app.use(express.static("."));

app.get('/'), (req, res) => {
    console.log("Recebi uma requisição");
    res.sendFile(__dirname + '/internet.html');
};

app.listen('3008', () => {
    console.log("Estou rodando na porta 3010")
})