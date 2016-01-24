// Server information
var ws_server = "127.0.0.1";
var port = "9001";
var mailServer = 'http://localhost/socket-checker/send_mail.php'; // the server name with project folder name, change it if you need

console.log('Socket checker started..');
var socket = new WebSocket("ws://"+ws_server+":"+port);

socket.onopen = function() {
    console.log('Connected to '+ws_server+':'+port+' at ' + Date());    
}; 

socket.onclose = function() {
    console.log('ws://'+ws_server+':'+port+' has been Closed at ' + Date());

    // Send email in case of closed a socket
    var page = require('webpage').create();
	page.open(mailServer, function(status) {
	  //console.log("Status: " + status);
	  if(status === "success") {
	    console.log('Status email has been sent!');
	  }
	  phantom.exit();
	});
};