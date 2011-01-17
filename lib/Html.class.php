<?php
/*
    HTML class

*/

class Html {

    /*
        Return anchor link
    */
    public static function anchor($label, $url){
        return "<a href=\"$url\">$label</a>";
    }
    
    /*
        Alias of anchor
    */
    public static function link($label, $url){
        return self::anchor($label, $url);
    }

}
