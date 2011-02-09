<?php
/*
    Class for returning URLs for files
    
    
*/

class ga_url{

    /*
        Return base URL
        
        @param $full    Return full URL
    */
    function base($full=false){
        global $config;
        $base = $config['galleon']['root_path'];         
        if ($full) { $base = $config['galleon']['domain'] . $base; }
        return $base;
    }
    
    /*
        Return an appropriately formatted url
        Returns either SEO format or non-SEO format as per config settings
        
        @param  class       The controller class name (auto strips *Controller)
        @param  function    The controller function
        @param  params      Array of parameters
        @param  relative    Return global URL. Default false
    */
    function get($class='', $function='', $params=array(), $full=false){
        global $config;
        // Lower case and url encode params
        $class = strtolower(u($class));
        $function = strtolower(u($function));
        array_walk($params, 'Self::walk_enclow');
        $params = array_values($params);
        
        // Get base url
        $path = self::base($full);
        
        if ($config['galleon']['seo_urls']){
            // Build SEO URL
            if ($class != ""){
                $path = $path.'/'.$class.'/';
                if($function != ""){
                    $path = $path.$function.'/';
                    foreach($params as $p){
                        $path = $path.$p.'/';
                    }
                }
            }
        }else{
            // Build Non-SEO URL
            if ($class != ""){
                $path = $path.'/?c='.$class.'&';
                if($function != ""){
                    $path = $path.'f='.$function.'&';
                    foreach($params as $k => $p){
                        $path = $path.'p'.$k.'='.$p.'&';
                    }
                }
            }   
        }
        // Remove trailing amphersand and return
        return trim($path, '&');
    }
    
    /*
        URL encode string and change to lower case
        For use by array_walk
    */
    private function walk_enclow(&$str){
        $str = strtolower(u($str));
    }
}
