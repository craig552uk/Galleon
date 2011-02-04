<?php
/*
    Galleon Home controller class
*/

class HomeController {

    function index(){        
        $title = "Galleon";
        include(ga_view('home'));
    }

}
