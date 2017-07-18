<?php

require_once("class.ImageResizer.php");

$path = "cock_PNG29.png";
$path_other = "mountain.png";

$image = new ImageResizer($path);
$image_other = new ImageResizer($path_other);

//  Resize the image width to 300px, and keep proportional ratio for height
$image->resize_to_width(300);
//  Resize the image height to 300px, and keep proportional ratio for width
$image->resize_to_height(300);


//  Resize the image width to 400px, and keep proportional ratio for height
$image_other->resize_to_width(400);
//  Resize the image height to 400px, and keep proportional ratio for width
$image_other->resize_to_height(400);

