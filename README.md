Socket checker
===================

Websocket checker - a simple script that runs from **command line**, it will keep listening to a specific socket and send a notification email when the socket is closed! ist not that Cool! :)

----------

How it is working
-------------
Mainly it is working using phantom.js to connect to websocket server, and phpmailer to send emails notifications, to make it work you should setup server information and email address in config.php file.