<?php



function callHook(){
    
    /*  Break apart SEO friendly urls 
        galleon.com/class/function/param1/param2    */
    if (isset($_GET['url'])){
        $urlClean       = preg_replace('/[^\/a-z0-9]/','',strtolower(trim($_GET['url'],'/')));
        $urlParams      = explode("/", $urlClean);
        $urlClass       = array_shift($urlParams);
        $urlFunction    = array_shift($urlParams);
    }else{
        /* Defaults */
        $urlParams      = array();
        $urlClass       = '';
        $urlFunction    = '';
    }
    
    $galleonClass = ucwords($urlClass).'Controller';
    
    echo "<pre>";
    echo "Class: ".$urlClass."\n";
    echo "Galleon Class: ".$galleonClass."\n";
    echo "Function: ".$urlFunction."\n";
    print_r($urlParams);
    echo "</pre>";
}

/*
    Autoload classes as needed
*/
function __autoload($className){

}

callHook();
