<?php
/*
    Galleon Default controller class
*/

class DefaultController {

    function index(){
        $data['title'] = "Default Page";
        echo "DEFAULT PAGE";
    }
    
    function error($error_code = "404"){
        $data['title'] = "Error";
        $data['error_code'] = $error_code;
        echo "ERROR $error_code";
    }

}
