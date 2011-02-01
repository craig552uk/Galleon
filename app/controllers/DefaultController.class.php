<?php
/*
    Galleon Default controller class
*/

class DefaultController {

    function index(){
        $data['title'] = "Default Page";
        Show::view('default', $data);
    }

}
