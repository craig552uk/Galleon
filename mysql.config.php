<?php

/*
    MySQL Server
*/
$mysql['server']['hostname']            = 'localhost';
$mysql['server']['username']            = 'admin';
$mysql['server']['userpass']            = 'passw0rd';
$mysql['server']['dbname']              = 'ga_db';
$mysql['server']['hostport']            = ini_get("mysqli.default_port");
$mysql['server']['hostsocket']          = ini_get("mysqli.default_socket");

/*
    Table definitions
*/

$mysql['table']['example']  =   "CREATE TABLE example (id INT, data VARCHAR(100))";

/*
    Trigger Definitions
*/

//$mysql['trigger'][] ="";
