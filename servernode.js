var mysql = require('mysql');
// Let’s make node/socketio listen on port 3000
//var io = require('socket.io').listen(3000);
var fs = require('fs');
var app = require('express');
var https = require('https');
var server = https.createServer({
    key:fs.readFileSync('../../../etc/letsencrypt/live/bww.by/privkey.pem'),
    cert:fs.readFileSync('../../../etc/letsencrypt/live/bww.by/cert.pem'),
    ca:fs.readFileSync('../../../etc/letsencrypt/live/bww.by/chain.pem'),
    requestCert:false,
    rejectUnauthorized:false},app);
server.listen(3000);
var io = require('socket.io').listen(server);
// Define our db creds
var db = mysql.createConnection({
    host: '127.0.0.1',
    user: 'alex',
    password: '72Linase.',
    database: 'cases'
});
// Log any errors connected to the db
db.connect(function (err) {
    if (err)
        console.log(err);
});
io.sockets.on('connection', function (socket) {
    var notes = [];
//    socket.on('start', function () {
//        db.query('SELECT h.id,h.item,h.user,i.image,h.case, u.avatar FROM history as h left join items as i  on h.item=i.id left join users as u on h.user=u.id order by 1 desc limit 20')
//                .on('result', function (data) {
//                    // Push results onto the notes array
//                    notes.push(data);
//                })
//                .on('end', function () {
//                    io.sockets.emit('live', notes);
//                });
//
//    });
    socket.on('update', function () {
        var notes = [];
        db.query('SELECT h.id,h.item,h.user,i.image,h.case, u.avatar FROM history as h left join items as i  on h.item=i.id left join users as u on h.user=u.id order by 1 desc limit 20')
                .on('result', function (data) {
                    // Push results onto the notes array
                    notes.push(data);
                })
                .on('end', function () {
                    io.sockets.emit('live', notes);
                });
    });
});