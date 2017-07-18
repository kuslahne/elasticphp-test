<?php

class ImageResizer
{

    function __construct($src_img = NULL){
        if(!empty($src_img)){
            $this->pathfile = $src_img;
        }

    }

    public  function resize_to_width($new_width){
        $size = getimagesize($this->pathfile);
        $ratio = $size[0]/$size[1]; 
        $width = $new_width;
        $height = $new_width / $ratio;
        
        return $this->create_new_image($width,$height,$size);
        
    }

    public  function resize_to_height($new_height){
        $size = getimagesize($this->pathfile);
        $ratio = $size[0]/$size[1]; 
        if( $ratio > 1) {
            $width = $new_height / $ratio;
            $height = $new_height;
        }
        else {
            $width = $new_height * $ratio;
            $height = $new_height;
        } 
        return $this->create_new_image($width,$height,$size);
    }

    public  function create_new_image($width,$height,$size){
        $src = imagecreatefromstring(file_get_contents($this->pathfile));
        $dest = imagecreatetruecolor($width,$height);
        imagecopyresampled($dest,$src,0,0,0,0,$width,$height,$size[0],$size[1]);
        imagedestroy($src);
        imagepng($dest,'result-'.$width.'x'.$height.'-'.basename($this->pathfile));
        if($dest){

            echo "Succesfully resized!<br/>";
        }
        imagedestroy($dest);


    }



}
