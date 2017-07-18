<?php

require_once("class.ImageResizer.php");

$path = "cock_PNG29.png";

$image = new ImageResizer($path);

//  Resize the image width to 300px, and keep proportional ratio for height
$image->resize_to_width(300);
//  Resize the image height to 300px, and keep proportional ratio for width
$image->resize_to_height(300);

