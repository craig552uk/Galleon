<?php
/*
    Base class for controllers
*/

class Controller {

    /* HTML object */
    protected $html = NULL;

    function __construct(){
        /* Create object */
        $this->html = new Html();
    }
}
