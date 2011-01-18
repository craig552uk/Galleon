<?php
/*
    HTML class

*/

class Html {

    /*
        Return anchor link
    */
    public static function anchor($label, $url){
        echo "<a href=\"$url\">$label</a>";
    }
    
    /*
        Alias of anchor
    */
    public static function link($label, $url){
        echo self::anchor($label, $url);
    }

}
