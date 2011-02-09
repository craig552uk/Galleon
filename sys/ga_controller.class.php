<?php
/*
    Base class for controllers
*/

class Controller {

    /* HTML object */
    protected $html = NULL;
    protected $path = NULL;

    function __construct(){
        /* Create objects */
        $this->html = new Html();
        $this->path = new Path();
    }
}