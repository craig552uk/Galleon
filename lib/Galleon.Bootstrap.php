<?php
/*
    The main Galleon work horse script.
*/


/*
    Interprets SEO friendly urls
    Finds the correct controller class and creates it
    Calls the controller class function with the appropriate parameters
*/
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
    
    // Generate controller class name
    $controllerName = ucwords($urlClass).'Controller';
    
    if (class_exists($controllerName)){
    
        // Create object
        $controller = new $controllerName;

        if (method_exists($controller, $urlFunction)){
        
            // Call function
            call_user_func_array(array($controller, $urlFunction), $urlParams);
            
        }else{
        
            if (method_exists($controller, 'index')){
                // Call default function
                call_user_func_array(array($controller, 'index'), $arr = array());
            }else{
                // Create default controller object
                $controller = new DefaultController;
                call_user_func_array(array($controller, 'error'), $arr = array('404'));
            }
        }
    }else{
        // Create default controller object
        $controller = new DefaultController;

        if (method_exists($controller, $urlFunction)){
        
            // Call function
            call_user_func_array(array($controller, $urlFunction), $urlParams);
            
        }else{
        
            if (method_exists($controller, 'index')){
                // Call default function
                call_user_func_array(array($controller, 'index'), $arr = array());
            }
        }
    }    
}

/*
    Autoload classes as needed
*/
function __autoload($className){    
    $classPath['lib']        = ROOT . DS . 'lib' . DS . $className . '.class.php';
    $classPath['controller'] = ROOT . DS . 'application' . DS . 'controllers' . DS . $className . '.class.php';
    $classPath['model']      = ROOT . DS . 'application' . DS . 'models' . DS . $className . '.class.php';
    $classPath['view']       = ROOT . DS . 'application' . DS . 'views' . DS . $className . '.class.php';
    
    foreach ($classPath as $path){
        if (file_exists($path)) { include_once($path); }
    }
}

/* Load libraries */
Load::library('Common');

/* Load configuration */
extract(Load::config('galleon'));

/* Run callHook */
callHook();
