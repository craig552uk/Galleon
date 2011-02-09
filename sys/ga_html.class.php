<?php
/*
    Class for drawing common html elements
    
    a($url, $label, $opts)
    link($url, $label, $opts)
    anchor($url, $label, $opts)
    
    input_button($name, $value, $label, $opts)
    input_checkbox($name, $value, $label, $opts)
    input_color($name, $value, $label, $opts)
    input_date($name, $value, $label, $opts)
    input_datetime($name, $value, $label, $opts)
    input_datetime_local($name, $value, $label, $opts)
    input_email($name, $value, $label, $opts)
    input_file($name, $value, $label, $opts)
    input_hidden($name, $value, $label, $opts)
    input_image($name, $value, $label, $opts)
    input_month($name, $value, $label, $opts)
    input_number($name, $value, $label, $opts)
    input_password($name, $value, $label, $opts)
    input_radio($name, $value, $label, $opts)
    input_range($name, $value, $label, $opts)
    input_reset($name, $value, $label, $opts)
    input_search($name, $value, $label, $opts)
    input_submit($name, $value, $label, $opts)
    input_tel($name, $value, $label, $opts)
    input_text($name, $value, $label, $opts)
    input_time($name, $value, $label, $opts)
    input_url($name, $value, $label, $opts)
    input_week($name, $value, $label, $opts)


*/

class ga_html {

    /*
        Draw an anchor
        
        @param  $url    A URL
        @param  $label  A Label
        @param  $opts   An array of key=>value options drawn as 
                        attribute="value" pairs in the anchor element
                        
        link() and anchor() are aliases of a()
    */
    public static function a($url, $label, $opts=array())       { echo '<a href="' . h($url) . '" ' . self::draw_opts($opts) . '>' . h($label) . '</a>'; }
    public static function link($url, $label, $opts=array())    { self::a($url, $label, $opts); }
    public static function anchor($url, $label, $opts=array())  { self::a($url, $label, $opts); }
    
    /*
        Draw form input elements
        
        @param  $name   Name and ID value
        @param  $value  Data value. Default=''
        @param  $label  The label value. If empty, no label is drawn. Default=''
        @param  $ops    An array of key=>value options drawn as 
                        attribute="value" pairs in the input element
                        Use 'required'=>true to add a astrix to the label
    */
    public static function input_button($name, $value=NULL, $label=NULL, $opts=array())          { self::input_generic('button', $name, $value, $label, $opts); }
    public static function input_checkbox($name, $value=NULL, $label=NULL, $opts=array())        { self::input_generic('checkbox', $name, $value, $label, $opts); }
    public static function input_color($name, $value=NULL, $label=NULL, $opts=array())           { self::input_generic('color', $name, $value, $label, $opts); }
    public static function input_date($name, $value=NULL, $label=NULL, $opts=array())            { self::input_generic('date', $name, $value, $label, $opts); }
    public static function input_datetime($name, $value=NULL, $label=NULL, $opts=array())        { self::input_generic('datetime', $name, $value, $label, $opts); }
    public static function input_datetime_local($name, $value=NULL, $label=NULL, $opts=array())  { self::input_generic('datetime-local', $name, $value, $label, $opts); }
    public static function input_email($name, $value=NULL, $label=NULL, $opts=array())           { self::input_generic('email', $name, $value, $label, $opts); }
    public static function input_file($name, $value=NULL, $label=NULL, $opts=array())            { self::input_generic('file', $name, $value, $label, $opts); }
    public static function input_hidden($name, $value=NULL, $label=NULL, $opts=array())          { self::input_generic('hidden', $name, $value, NULL, $opts); }
    public static function input_image($name, $value=NULL, $label=NULL, $opts=array())           { self::input_generic('image', $name, $value, $label, $opts); }
    public static function input_month($name, $value=NULL, $label=NULL, $opts=array())           { self::input_generic('month', $name, $value, $label, $opts); }
    public static function input_number($name, $value=NULL, $label=NULL, $opts=array())          { self::input_generic('number', $name, $value, $label, $opts); }
    public static function input_password($name, $value=NULL, $label=NULL, $opts=array())        { self::input_generic('password', $name, $value, $label, $opts); }
    public static function input_radio($name, $value=NULL, $label=NULL, $opts=array())           { self::input_generic('radio', $name, $value, $label, $opts); }
    public static function input_range($name, $value=NULL, $label=NULL, $opts=array())           { self::input_generic('range', $name, $value, $label, $opts); }
    public static function input_reset($name, $value=NULL, $label=NULL, $opts=array())           { self::input_generic('reset', $name, $value, $label, $opts); }
    public static function input_search($name, $value=NULL, $label=NULL, $opts=array())          { self::input_generic('search', $name, $value, $label, $opts); }
    public static function input_submit($name, $value=NULL, $label=NULL, $opts=array())          { self::input_generic('submit', $name, $value, $label, $opts); }
    public static function input_tel($name, $value=NULL, $label=NULL, $opts=array())             { self::input_generic('tel', $name, $value, $label, $opts); }
    public static function input_text($name, $value=NULL, $label=NULL, $opts=array())            { self::input_generic('text', $name, $value, $label, $opts); }
    public static function input_time($name, $value=NULL, $label=NULL, $opts=array())            { self::input_generic('time', $name, $value, $label, $opts); }
    public static function input_url($name, $value=NULL, $label=NULL, $opts=array())             { self::input_generic('url', $name, $value, $label, $opts); }
    public static function input_week($name, $value=NULL, $label=NULL, $opts=array())            { self::input_generic('week', $name, $value, $label, $opts); }

    /* Private functions ---------------------------------------------------- */
    /*
        Generic function for drawing form inputs
    */
    private static function input_generic($type, $name, $value, $label, $opts){
        $opts = array_change_key_case($opts);
        $exclude = array('required', 'label', 'id', 'name', 'value');
        
        // Set defaults
        $opts['required'] = $opts['required'] || false;

        // Echo label & astrix
        if (!empty($label)) { 
            if ($opts['required'])  { echo "<label for=\"$name\">".h($label)." <span>*</span></label>"; }
            else                    { echo "<label for=\"$name\">".h($label)."</label>"; }
        }
        echo "<input type=\"$type\" id=\"$name\" name=\"$name\" value=\"$value\" ";
        self::draw_opts($opts, $exclude);
        echo "/>\n";
    }
    
    /*
        Draws an array of options as attribute="value"
        
        @param  $opts       Array of key=>value options
        @param  $exclude    Array of keys to exclude
    */
    private static function draw_opts($opts=array(), $exclude=array()){
        foreach($opts as $k => $v) {
            if (!in_array($k, $exclude)) { echo h($k).'="'.h($v).'" '; }
        }
    }
}
