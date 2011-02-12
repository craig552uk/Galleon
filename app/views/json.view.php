<?php
/*
    View to display $json_data array as JSON object
    http://php.net/manual/en/function.json-encode.php    
*/

header("Content-type: application/json");
if (isset($json_data)) {
    echo json_encode($json_data);
}
