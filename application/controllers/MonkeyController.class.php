<?php
/*
    A test controller class for development

*/

class MonkeyController{

    function index(){
        echo "<p>Monkey - Default Function</p>";
        Html::anchor('a Link','file');
    }
    
    function feed($A, $B, $C){
        echo "$A $B $C";
    }
    
    function show(){
        $data['title'] = "Show Monkey";
        Load::view('monkey', $data);
    }

};
