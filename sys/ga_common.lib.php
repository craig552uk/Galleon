<?php

/*
    Common functions
    
    h($string)                      // Alias of htmlspecialchars
    u($string)                      // Alias of urlencode
    ga_parse_url()                  // Interprets URL
    ga_call_hook($url)              // Call requested class function
    __autoload($className)          // Magic function for dynamic class loading
*/

/*
    Alias of htmlspecialchars
*/
function h($string){
    return htmlspecialchars($string);
}

/*
    Alias of htmlspecialchars
*/
function u($string){
    return urlencode($string);
}

/*
    Interprets URL
        Either SEO friendly
        Or Standard query string
    Returns nested array of requested class, function and params
*/
function ga_parse_url(){
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
            galleon.com/?c=class&f=function&p0=param0&p1=param1 */
            
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
    If class or function cannot be found show 404 error
*/
function ga_call_hook($url){
    global $config;
    
    $error = new ga_error();

    // Generate controller class name
    $controllerName = ucwords($url['class']).'Controller';
    
    if(empty($url['class'])){
        
        // Create default controller
        $controller = new HomeController;  
              
        // Call index function
        call_user_func_array(array($controller, 'index'), array());
    
    }elseif (class_exists($controllerName)){
    
        // Create requested class object
        $controller = new $controllerName;

        if (method_exists($controller, $url['function'])){
        
            // Call requested function
            call_user_func_array(array($controller, $url['function']), $url['params']);
            
        }else{
        
            if (method_exists($controller, 'index')){
                // Call default function
                call_user_func_array(array($controller, 'index'), array());
                
            }else{
                // Call 404 Error
                $error->show(404);
            }
        }
    }else{
        // No valid controller class
        if ($url['class']=='error'){
            // Call error
            $error->show($url['function']);
        }else{
            // 404 Error
            $error->show(404);
        }
    }    
}
    
/*
    Autoload classes as needed
*/
function __autoload($className){    

    $classPath[] = ga_path::model($className);
    $classPath[] = ga_path::controller($className);
    $classPath[] = ga_path::lib($className);
    
    foreach ($classPath as $path){
        if (file_exists($path)) { include_once($path); }
    }
}

