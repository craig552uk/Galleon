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

function devecho($string){
    if(DEVELOPMENT_ENVIRONMENT) { echo $string; }
}
