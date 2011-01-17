<?php
/*
    A test controller class for development

*/

class MonkeyController{

    function index(){
        echo "<p>Monkey - Default Function</p>";
    }
    
    function feed($A, $B, $C){
        echo "<p>$A $B $C</p>";
    }

};
