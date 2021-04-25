const fs = require('fs');
const express = require('express');
const path = require('path');
const HTMLParser = require('node-html-parser');
const iscore = require('./iscore.js');

const server = express();

const iscore_html = HTMLParser.parse(fs.readFileSync("iscore.html"));

server.get('/', (req, res) =>
	res.sendFile(path.join(__dirname, 'index.html'))
);

server.get('/iscore', (req, res) => {
	res.send(iscore_html.outerHTML);
});

server.get('/*', (req, res) => {
	if(req.path.includes(".")) {
		res.sendFile(path.join(__dirname, req.path));
	} else {
		res.sendFile(path.join(__dirname, req.path + ".html"));
	}
	
});

server.listen(3000, () => console.log('Server is running'));