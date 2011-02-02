<?php
/*
    Galleon Default controller class
*/

class DefaultController {

    function index(){
        $title = "Default Page";
        include(ga_view('default'));
    }

}
