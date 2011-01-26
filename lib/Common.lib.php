<?php

/*
    Common functions
*/

/*
    Alias of htmlspecialchars
*/
function h($string){
    return htmlspecialchars($string);
}

/*
    Wrapper for class function
*/
function getJsUrl(){
    JavascriptController::_getJavascriptUrl();
}

/*
    Wrapper for class function
*/
function getCssUrl(){
    StylesheetController::_getStylesheetUrl();
}
