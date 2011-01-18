<?php
/*
    Galleon Default controller class
*/

class DefaultController {

    function index(){
        echo "Index";
    }
    
    function error($errCode){
        echo "Error $errCode";
    }

}
