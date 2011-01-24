<?php
/*
    Galleon Default controller class
*/

class DefaultController {

    function index(){
        $data['title'] = "Default Page";
        Load::view('default', $data);
    }
    
    function error($error_code = "404"){
        $data['title'] = "Error";
        $data['error_code'] = $error_code;
        Load::view('error', $data);
    }

}
