<?php

    session_start();

    $con=mysqli_connect('localhost','root','','userdata');

    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $details=$_POST['details'];
    $captcha=$_POST['captcha'];

    if($_SESSION['CODE']==$captcha){
        mysqli_query($con,"INSERT INTO captcha_form(name,mobile,details) VALUES('$name','$mobile','$details')");
        echo 'Thank you!Successfully submitted.';
    }else{
        echo 'Please enter valid captcha code!';
    }

?>