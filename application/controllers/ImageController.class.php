<?php
/*
    Allows easy access to images optamised for different scales
*/
class ImageController {

    /* Default function */
    function index(){
        // Do Nothing
    }

    /* Get image at scale*/
    function get($image,$scale){
        global $config;
        
        $imagepath = ROOT . DS . 'application' . DS . 'images' . DS;
        
        if (isset($config['image'][$image])){
            $file = $this->getImageScale($config['image'][$image], $scale);
            if($file && file_exists($imagepath.$file)) 
            { $this->getImage($imagepath.$file); }
        }
    }
    
    /*
        Gets an image file and passes it through to the browser
        
        @param  string  local file path
    */
    private function getImage($filename){
        
        $meta = getimagesize($filename);
        $image = fopen($filename, "rb");
        
        if ($meta && $image) {
            header("Content-type: ".$meta['mime']);
            fpassthru($image);
            exit;
        }
    }
    
    /*
        Search through image array for next image above or equal to requested scale
        
        @param  array   Array of image data
        @param  int     Requested scale
    */
    private function getImageScale($images, $scale){
        for($i=$scale; $i<=100; $i++){
            if (isset($images[$i])) { return $images[$i]; }
        }
        return false;
    }
}
