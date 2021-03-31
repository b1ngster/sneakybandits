<?php

 define('DB_HOST', 'localhost');
 define( 'DB_USER', 'sneakybandit');
 define( 'DB_PASS', 'webtech2021');
 define('DB_NAME', 'sneakybandits');

 define('APPROOT', dirname(dirname(__FILE__)));
 // URL Root
 define('URL_ROOT', "http://sneakybandits.local");
 // Site Name
 define('SITENAME', 'Experience');
 // App Version
 define('APPVERSION', '0.1');

 /* 
 CREATE DATABASE sneakybandits;
CREATE USER 'sneakybandits'@'%' IDENTIFIED BY 'webtech2021';
GRANT ALL PRIVILEGES ON sneakybandits . * TO 'sneakybandits'@'%';
FLUSH PRIVILEGES;
exit

mysql -u sneakybandits -p webtech2021

use sneakybandits;


CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_type` varchar(20) DEFAULT NULL,
  `username` varchar(60) NOT NULL,
   `email` varchar(60) NOT NULL,
`password` varchar(100) NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

*/
