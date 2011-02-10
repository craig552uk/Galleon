<?php
/*
    Base class for controllers
*/

abstract class Controller {

    /* HTML object */
    protected $html = NULL;
    protected $path = NULL;
    protected $url  = NULL;

    /* Require declaration of index in implementations */
    abstract function index();

    /* Constructor */
    function __construct(){
        /* Create objects */
        $this->html = new ga_html();
        $this->path = new ga_path();
        $this->url  = new ga_url();
    }
}
