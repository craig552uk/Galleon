<?php
/*
    A test controller class for development

*/

class MonkeyController{

    function index(){
        echo "<p>Monkey - Default Function</p>";
        echo Html::link('a Link','file');
    }
    
    function feed($A, $B, $C){
        echo "<p>$A $B $C</p>";
    }

};
