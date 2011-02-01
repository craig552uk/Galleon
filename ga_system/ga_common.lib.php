<?php

/*
    Common functions
    
    h($string)
    galleonGetURL()
    galleonCallHook($url)
    __autoload($className)
*/

/*
    Alias of htmlspecialchars
*/
function h($string){
    return htmlspecialchars($string);
}

/*
    Interprets URL
        Either SEO friendly
        Or Standard query string
    Returns nested array of requested class, function and params
*/
function galleonGetURL(){
    global $config;
    
    if ($config['galleon']['seo_urls']){
    
        /*  Break apart SEO friendly urls 
            galleon.com/class/function/param1/param2    */
            
        // Clean up URL
        $urlClean        = $_SERVER['REQUEST_URI'];
        $urlClean        = str_replace($config['galleon']['root_path'], '', $urlClean);
        $urlClean        = trim(trim($urlClean,'/'),'/');
        $urlClean        = strtolower($urlClean);
        $urlClean        = preg_replace('/[^\/a-z0-9\.-]/', '', $urlClean);
        
        // Set URL data in array
        $url['params']   = explode("/", $urlClean);
        $url['class']    = array_shift($url['params']);
        $url['function'] = array_shift($url['params']);
        
    }else{
    
        /*  Breat apart Query String urls
            galleon.com/?c=class&f=function&p1=param1&p2=param2 */
            
        // Preserve $_GET
        $urlData         = $_GET;
        
        // Set URL data in array
        $url['class']    = array_shift($urlData);
        $url['function'] = array_shift($urlData);
        $url['params']   = array_values($urlData);
        
    }

    // Return array of URL data
    return $url;
}

/*
    Finds the correct controller class and creates it
    Calls the controller class function with the appropriate parameters
*/
function galleonCallHook($url){

    // Generate controller class name
    $controllerName = ucwords($url['class']).'Controller';
    
    if (class_exists($controllerName)){
    
        // Create object
        $controller = new $controllerName;

        if (method_exists($controller, $url['function'])){
        
            // Call function
            call_user_func_array(array($controller, $url['function']), $url['params']);
            
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

        if (method_exists($controller, $url['function'])){
        
            // Call function
            call_user_func_array(array($controller, $url['function']), $url['params']);
            
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
            $url['params'] = array_reverse($url['params']);
            array_push($url['params'], $url['function']);
            $url['params'] = array_reverse($url['params']);
            
            // Push class back on to function
            $url['function'] = $url['class'];
        
            if (method_exists($controller, $url['function'])){
                // Call function
                call_user_func_array(array($controller, $url['function']), $url['params']);
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
    $classPath['controller'] = ROOT . DS . 'app' . DS . 'controllers' . DS . $className . '.class.php';
    $classPath['model']      = ROOT . DS . 'app' . DS . 'models' . DS . $className . '.class.php';
    $classPath['view']       = ROOT . DS . 'app' . DS . 'views' . DS . $className . '.class.php';
    
    foreach ($classPath as $path){
        if (file_exists($path)) { include_once($path); }
    }
}

