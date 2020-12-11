var http = require('http');
var mysql = require('mysql');
var express = require('express');
var app = express();


var con = mysql.createConnection(
{
	host: 'localhost',
	user: 'root',
	password: '',
	database: 'register_login'
});
con.connect(function(err) {

	if (err) {
		throw err;
	} else
	console.log('connected!!');
});




