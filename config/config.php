<?php


//host
define('HOST', 'localhost');

//dbName
define('DB_NAME', 'pay');

//user
define('USER', 'root');

//password
define('PASSWORD', '');


$conn  = new PDO("mysql:host=" . HOST . ";dbname=" . DB_NAME, USER, PASSWORD);


