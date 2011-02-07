<?php
/*
    MySQL base class, extends mysqli
    
    Adds functions to connect to DB using details in mysql.config.php
    
    If DB does not exist, it creates it and the tables and triggers 
    from the definitions in mysql.config.php
    
    Also adds wrapper function m() for mysql_real_escape_string()
*/

class ga_mysql extends mysqli{

    /*
        Constructor
        Connect to database
        Create database, tables and triggers if necessary
    */
    function __construct(){    
        // Connect to server
        $this->do_connect();
        
        // Failed to connect
        if (mysqli_connect_error()) {
            switch(mysqli_connect_errno()){
                case 1049:      /* DB Doesn't exist */
                    // Connect without DB
                    $this->do_connect_no_db();
                    // Create DB
                    $this->create_database();
                    // Use DB
                    $this->use_database();
                    // Create tables
                    $this->create_tables();
                    // Create triggers
                    $this->create_triggers();
                    break;
                default:
                    echo mysqli_connect_error();
            }
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
        Switch to database defined in mysql.config.php
    */
    private function use_database(){
        global $mysql;
        $this->query("USE ".$mysql['server']['dbname'].";");
    }
    
    /*
        Create db from name in mysql.config.php
    */
    private function create_database(){
        global $mysql;
        $this->query("CREATE DATABASE ".$mysql['server']['dbname'].";");
    }
    
    /*
        Create tables from definitions in mysql.config.php
    */
    private function create_tables(){
        global $mysql;
        if(isset($mysql['table'])){
            foreach($mysql['table'] as $table){
                $this->query($table);
            }
        }
    }
    
    /*
        Create triggers from definitions in mysql.config.php
    */
    private function create_triggers(){
        global $mysql;
        if(isset($mysql['trigger'])){
            foreach($mysql['trigger'] as $trigger){
                $this->query($trigger);
            }
        }
    }
}
