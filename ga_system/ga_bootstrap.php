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
            /*
                The next few lines reassign values from the url
                as though no class parameter were given.
                This allows tidier urls for the default controller
                Compare:
                    galleon.com/default/error/404
                    galleon.com/error/404
            */
            
            // Push function string back on to head of params
            $urlParams = array_reverse($urlParams);
            array_push($urlParams, $urlFunction);
            $urlParams = array_reverse($urlParams);
            
            // Push class back on to function
            $urlFunction = $urlClass;
        
            if (method_exists($controller, $urlFunction)){
                // Call function
                call_user_func_array(array($controller, $urlFunction), $urlParams);
            }else{
                // Call default function
                call_user_func_array(array($controller, 'index'), array());
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
include_once (ROOT . DS . 'ga_system' . DS . 'ga_common.lib.php');
// Write libraries for accessing common files js/css and data meta author etc

/* Load configuration */
include_once (ROOT . DS . 'ga_config.php');

/* Run callHook */
callHook();
