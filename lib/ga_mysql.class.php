<?php
/*
    MySQL base class, extends mysqli
*/

class ga_mysql extends mysqli{

    /*
        Constructor
        Connect to database
        Create database, tables and triggers if necessary
    */
    function __construct(){    
        // Connect to server
        global $mysql;
        parent::__construct( $mysql['server']['hostname'], $mysql['server']['username'], 
                             $mysql['server']['userpass'], $mysql['server']['dbname'], 
                             $mysql['server']['hostport'], $mysql['server']['hostsocket']);
        // Failed to connect
        if(mysqli_connect_error()){
            /* Error */
            /* TODO Create DB */
        }
    }
    
    /*
        Destructor
    */
    function __destruct(){
        // Close connection
        $this->close();
    }
    
    /*
        Sanitize data
    */
    function m($data){
        return mysql_real_escape_string($data);
    }

}
