<?php
/*
    Static class for drawing common html elements
    
    anchor($label, $url, $nofollow)
    input_text($id, $opts)
    input_password($id, $opts)
    input_button($id, $opts)
    input_submit($id, $opts)
    input_search($id, $opts)
    input_generic($type, $id, $opts)
*/

class Html {
    /*
    
    */
    public static function getJS(){
        global $config;
        echo "<script src=\"".$config['general']['domain']."/javascript\"></script>\n";
    }
    
    /*
    
    */
    public static function getCSS(){
        global $config;
        echo "<link rel=\"stylesheet\" href=\"".$config['general']['domain']."/stylesheet\">\n";
    }

    /*
        Draw anchor link
    */
    public static function anchor($label, $url, $nofollow=false){
        echo "<a href=\"$url\">$label</a>";
    }

    /*
        Draw form input type text from array
    */
    public static function input_text($id, $opts=array()){
        self::input_generic('text', $id, $opts);
    }
    
    /*
        Draw form input type password from array
    */
    public static function input_password($id, $opts=array()){
        self::input_generic('text', $id, $opts);
    }
    
    /*
        Draw form input type button from array
    */
    public static function input_button($id, $opts=array()){
        self::input_generic('button', $id, $opts);
    }
    
    /*
        Draw form input type text from array
    */
    public static function input_submit($id, $opts=array()){
        self::input_generic('submit', $id, $opts);
    }
    
    /*
        Draw form input type search from array
    */
    public static function input_search($id, $opts=array()){
        self::input_generic('search', $id, $opts);
    }

    /*
        Generic function for drawing form inputs
    */
    public static function input_generic($type, $id, $opts){
        $opts = array_change_key_case($opts);
        $noecho = array('required','label','id','name');
        // Set defaults
        if (!isset($opts['required'])) { $opts['required']=false; }
    
        // Echo label & astrix
        if (isset($opts['label'])) { 
            if ($opts['required'])  { echo "<label for=\"$id\">".h($opts['label'])." <span>*</span></label>"; }
            else                    { echo "<label for=\"$id\">".h($opts['label'])."</label>"; }
        }
        echo "<input type=\"$type\" id=\"$id\" name=\"$id\"";
        foreach($opts as $attrib => $val) {
            if (!in_array($attrib, $noecho)) { echo " ".h($attrib)."=\"".h($val)."\""; }
        }
        echo " />";
    }
}
