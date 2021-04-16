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

CREATE TABLE IF NOT EXISTS `users` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `username` VARCHAR(255) NOT NULL,
    `first_name` VARCHAR(255) NOT NULL,
    `last_name` VARCHAR(255) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `password` VARCHAR(32) NOT NULL,
    `sign_up_date` DATE NOT NULL,
    `activated` ENUM('0','1') NOT NULL,
    PRIMARY KEY (id))
    ENGINE=INNODB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `esports` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255) NOT NULL,
    PRIMARY KEY (id))
    ENGINE=INNODB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `esport_leagues` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `esport_id` INT(8) NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (`esport_id`) REFERENCES esports(id));
    ENGINE=INNODB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

CREATE TABLE IF NOT EXISTS `esport_teams` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255),
    `score` JSON,
    `activity` JSON,
    `esport_id` VARCHAR(255) NOT NULL,
    `league_id` INT(8),
    PRIMARY KEY (id))
    ENGINE=INNODB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `esport_teams` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255),
    `score` JSON,
    `activity` JSON,
    `esport_id` VARCHAR(255) NOT NULL,
    `league_id` INT(8),
    PRIMARY KEY (id))
    ENGINE=INNODB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

    CREATE TABLE IF NOT EXISTS `esport_players` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(255) NOT NULL,
    `description` VARCHAR(255),
    `user_id` VARCHAR(255),
    `score` JSON,
    `activity` JSON,
    `resources`JSON,
    `esport_id` INT(8d),
    `league_id` INT(8),
    PRIMARY KEY (id))
    ENGINE=INNODB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


    CREATE TABLE IF NOT EXISTS `UserInterests` (
    `id` INT(11) NOT NULL AUTO_INCREMENT,
    `user_id` INT(255),
    `esport_id` VARCHAR(255),
    `league_id` INT(8),
    `player_id` INT(8),
    PRIMARY KEY (id))
    ENGINE=INNODB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

   
   oops:
    ALTER TABLE esport_teams MODIFY esport_id INTEGER;
     */

?>