<?php
/*
    Built in error controller class
*/
class ga_error extends Controller{

    function index(){ self::show(000); }
    
    function show($code){
        global $error;

        if (isset($error[$code])){
            // Extract variables to local scope
            extract($error[$code]);
            
            // Include error view
            include($this->path->view('error'));
        }else{
            // Return default error
            self::index();
        } 
    }
    
}
