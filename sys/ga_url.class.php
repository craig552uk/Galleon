<?php
/*
    Class for returning URLs for files
    
    
*/

class ga_url{

    /*
        Return base URL
        
        @param $full    Return full URL
    */
    public function base($full=false){
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
    public function get($class='', $function='', $params=array(), $full=false){
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
        Return url for image file
        
        @param  $name   Image file name
        @parma  $full   Return full url
    */
    public function img($name, $full=false){
        $path_base  = ROOT . DS . 'res' . DS . 'img' . DS;
        $url_base   = self::base($full).'/res/img/';
        $extensions = array('.png','.jpg','.jpeg','.gif','.ico','');
        
        /* Build file names list */
        foreach($extensions as $extension){
            $names[] = $name . $extension;
            $names[] = mb_convert_case($name, MB_CASE_LOWER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_UPPER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_TITLE) . $extension;
        }    
        
        /* Look for files */
        foreach($names as $name){
            if(file_exists($path_base.$name)) { return $url_base.$name; }
        }
    }
    
    /*
        Return url for css file
        
        @param  $name   Image file name
        @parma  $full   Return full url
    */
    public function css($name, $full=false){
        $path_base  = ROOT . DS . 'res' . DS . 'css' . DS;
        $url_base   = self::base($full).'/res/css/';
        $extensions = array('.min.css','.css','');
        
        /* Build file names list */
        foreach($extensions as $extension){
            $names[] = $name . $extension;
            $names[] = mb_convert_case($name, MB_CASE_LOWER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_UPPER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_TITLE) . $extension;
        }    
        
        /* Look for files */
        foreach($names as $name){
            if(file_exists($path_base.$name)) { return $url_base.$name; }
        }
    }
    
    /*
        Return url for javascript file
        
        @param  $name   Image file name
        @parma  $full   Return full url
    */
    public function js($name, $full=false){
        $path_base  = ROOT . DS . 'res' . DS . 'js' . DS;
        $url_base   = self::base($full).'/res/js/';
        $extensions = array('.min.class.js','.min.lib.js','min.js','.class.js','.lib.js','.js','');
        
        /* Build file names list */
        foreach($extensions as $extension){
            $names[] = $name . $extension;
            $names[] = mb_convert_case($name, MB_CASE_LOWER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_UPPER) . $extension;
            $names[] = mb_convert_case($name, MB_CASE_TITLE) . $extension;
        }    
        
        /* Look for files */
        foreach($names as $name){
            if(file_exists($path_base.$name)) { return $url_base.$name; }
        }
    }
    
    /* Private functions ---------------------------------------------------- */
    /*
        URL encode string and change to lower case
        For use by array_walk
    */
    private function walk_enclow(&$str){
        $str = strtolower(u($str));
    }
}
