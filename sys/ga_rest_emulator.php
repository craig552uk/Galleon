<?php
/*  
    Gets the requested HTTP verb, one of GET PUT POST DELETE
    Stores it in  gloabal constant HTTP_VERB
    Emulates DELETE & POST from a POSTed value with the name REQUEST_METHOD
    
    Use: <input type="hidden" name="REQUEST_METHOD" value="DELETE">
    
    More Info: http://en.wikipedia.org/wiki/Representational_State_Transfer#RESTful_web_services
*/

$REQUEST_METHOD['HTTP'] = mb_convert_case($_SERVER['REQUEST_METHOD'], MB_CASE_UPPER);
$REQUEST_METHOD['FORM'] = (!empty($_POST['REQUEST_METHOD'])) ? mb_convert_case($_POST['REQUEST_METHOD'], MB_CASE_UPPER) : NULL;

if    ($REQUEST_METHOD['HTTP']=="GET")          { $REQUEST_METHOD['REST'] = "GET";    }
elseif($REQUEST_METHOD['HTTP']=="PUT")          { $REQUEST_METHOD['REST'] = "PUT";    }
elseif($REQUEST_METHOD['HTTP']=="DELETE")       { $REQUEST_METHOD['REST'] = "DELETE"; }
elseif($REQUEST_METHOD['HTTP']=="POST")
{
    if    ($REQUEST_METHOD['FORM']=="GET")      { $REQUEST_METHOD['REST'] = "GET";    }
    elseif($REQUEST_METHOD['FORM']=="PUT")      { $REQUEST_METHOD['REST'] = "PUT";    }
    elseif($REQUEST_METHOD['FORM']=="POST")     { $REQUEST_METHOD['REST'] = "POST";   }
    elseif($REQUEST_METHOD['FORM']=="DELETE")   { $REQUEST_METHOD['REST'] = "DELETE"; }
    else                                        { $REQUEST_METHOD['REST'] = "POST";   }
}
else                                            { $REQUEST_METHOD['REST'] = "GET";    }
define("HTTP_VERB", $REQUEST_METHOD['REST'], true);
