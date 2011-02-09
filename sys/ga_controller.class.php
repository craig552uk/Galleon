<?php
/*
    Base class for controllers
*/

class Controller {

    /* HTML object */
    protected $html = NULL;
    protected $path = NULL;
    protected $url  = NULL;

    function __construct(){
        /* Create objects */
        $this->html = new ga_html();
        $this->path = new ga_path();
        $this->url  = new ga_url();
    }
}
