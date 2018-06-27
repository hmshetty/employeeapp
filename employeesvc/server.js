const express = require('express');
const app = express();
const HOST = '0.0.0.0';
const PORT = 80;

app.get('/', (req, res) => {
    res.json({
        employees: ['Guru', 'Murthy', 'Sundar', 'Goldie']
    });
}); 

app.listen(PORT, HOST);
console.log(`Running employee app on ${HOST}:${PORT}`);