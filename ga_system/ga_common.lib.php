<?php

/*
    Common functions
    
    h($string)                      // Alias of htmlspecialchars
    ga_parse_url()                  // Interprets URL
    ga_call_hook($url)              // Call requested class function
    ga_show_error($code)            // Show error message
    __autoload($className)          // Magic function for dynamic class loading
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
    If class or function cannot be found show 404 error
*/
function ga_call_hook($url){

    // Generate controller class name
    $controllerName = ucwords($url['class']).'Controller';
    
    if (class_exists($controllerName)){
    
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
                ga_show_error(404);
            }
        }
    }else{
        // No valid controller class
        if ($url['class']=='error'){
            // Call error
            ga_show_error($url['function']);
        }else{
            // 404 Error
            ga_show_error(404);
        }
    }    
}

/*
    Call an error defined in ga_errors.php
*/
function ga_show_error($code){
    global $error;

    if (isset($error[$code])){
        // Extract variables to local scope
        extract($error[$code]);
        
        // Include error view
        include(ga_view('error'));
    }else{
        // Return default error
        ga_show_error(000);
    }    
}
    
/*
    Autoload classes as needed
*/
function __autoload($className){    

    $classPath[] = ga_model($className);
    $classPath[] = ga_controller($className);
    $classPath[] = ga_lib($className);
    
    foreach ($classPath as $path){
        if (file_exists($path)) { include_once($path); }
    }
}


