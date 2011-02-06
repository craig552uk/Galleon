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
        do_connect();
        
        // Failed to connect
        if (mysqli_connect_error()) {
            switch(mysqli_connect_errno()){
                case 1049:      // DB Doesn't exist
                    echo "No DB";
                    do_connect_no_db();
                    
                    break;
                default:
                    echo mysqli_connect_error();
            }
        }else{
            echo $db->host_info;
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
    
    /*
        Connect to mysql server
    */
    private function do_connect(){
        global $mysql;
        parent::__construct( $mysql['server']['hostname'], $mysql['server']['username'], 
                             $mysql['server']['userpass'], $mysql['server']['dbname'], 
                             $mysql['server']['hostport'], $mysql['server']['hostsocket']);
    }
    
    /*
        Connect to mysql server with no DB
    */
    private function do_connect_no_db(){
        global $mysql;
        parent::__construct( $mysql['server']['hostname'], $mysql['server']['username'], 
                             $mysql['server']['userpass'], '', 
                             $mysql['server']['hostport'], $mysql['server']['hostsocket']);
    }
    
    /*
        Create db
    */
    private function create_database(){
        global $mysql;
        $this->query("CREATE DATABASE '$mysql['server']['dbname']';");
    }
    
    /*
        Create table
    */
    private function create_table(){
        global $mysql;
        //$this->query("CREATE TABLE '$mysql['server']['dbname']';");
    }
}
