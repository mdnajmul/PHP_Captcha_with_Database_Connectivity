<?php

    session_start();

    $rand_num=rand(11111,99999);
    $_SESSION['CODE']=$rand_num;
    
    //set image
    $layer=imagecreatetruecolor(55,30);
    //set captcha background color
    $captcha_bg=imagecolorallocate($layer,255,160,120); //R=255,G=160,B=120
    //merge image and background-color
    imagefill($layer,0,0,$captcha_bg); // image,x-cordinate,y-cordinate,color
    //set captcha text color
    $captcha_text_color=imagecolorallocate($layer,0,0,0); //R=0,G=0,B=0
    //merge image with color and value
    imagestring($layer,5,5,5,$rand_num,$captcha_text_color); //font-size=5,x-cordinate=5,y-cordinate=5
    
    //use this for display image
    header('Content-Type:image/jpeg');
    imagejpeg($layer);
?>