<?php
/*
    Galleon Error controller class
    
    Unique to this class
        functions all start with "error"
        functions are requested by error number alone
        e.g. galleon.com/error/404
*/

class Error {

    function errorUnknown(){
        $data['title'] = "An Unknown Error Occurred";
        echo $data['title'];
    }
    
    function error400(){
        $data['title'] = "Error 400	 Bad Request";
        echo $data['title'];
    }
    
    function error401(){
        $data['title'] = "Error 401	 Authorization Required";
        echo $data['title'];
    }
    
    function error402(){
        $data['title'] = "Error 402	 Payment Required (not used yet)";
        echo $data['title'];
    }
    
    function error403(){
        $data['title'] = "Error 403	 Forbidden";
        echo $data['title'];
    }
    
    function error404(){
        $data['title'] = "Error 404	 Not Found";
        echo $data['title'];
    }

    function error405(){
        $data['title'] = "Error 405	 Method Not Allowed";
        echo $data['title'];
    }
    
    function error406(){
        $data['title'] = "Error 406	 Not Acceptable (encoding)";
        echo $data['title'];
    }
    
    function error407(){
        $data['title'] = "Error 407	 Proxy Authentication Required";
        echo $data['title'];
    }
    
    function error408(){
        $data['title'] = "Error 408	 Request Timed Out";
        echo $data['title'];
    }
    
    function error409(){
        $data['title'] = "Error 409	 Conflicting Request";
        echo $data['title'];
    }
    
    function error410(){
        $data['title'] = "Error 410	 Gone";
        echo $data['title'];
    }

    function error411(){
        $data['title'] = "Error 411	 Content Length Required";
        echo $data['title'];
    }
    
    function error412(){
        $data['title'] = "Error 412	 Precondition Failed";
        echo $data['title'];
    }
    
    function error413(){
        $data['title'] = "Error 413	 Request Entity Too Long";
        echo $data['title'];
    }
    
    function error414(){
        $data['title'] = "Error 414	 Request URI Too Long";
        echo $data['title'];
    }
    
    function error415(){
        $data['title'] = "Error 415	 Unsupported Media Type";
        echo $data['title'];
    }

    function error500(){
        $data['title'] = "Error 500	 Internal Server Error";
        echo $data['title'];
    }
    
    function error501(){
        $data['title'] = "Error 501	 Not Implemented";
        echo $data['title'];
    }
    
    function error502(){
        $data['title'] = "Error 502	 Bad Gateway";
        echo $data['title'];
    }
    
    function error503(){
        $data['title'] = "Error 503	 Service Unavailable";
        echo $data['title'];
    }
    
    function error504(){
        $data['title'] = "Error 504	 Gateway Timeout";
        echo $data['title'];
    }

    function error505(){
        $data['title'] = "Error 505	 HTTP Version Not Supported";
        echo $data['title'];
    }

}
