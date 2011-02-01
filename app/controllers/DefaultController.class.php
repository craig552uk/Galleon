<?php
/*
    Galleon Default controller class
*/

class DefaultController {

    function index(){
        $data['title'] = "Default Page";
        ga_show_view('default', $data);
    }

}
