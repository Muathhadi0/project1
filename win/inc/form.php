<?php

$firstname= $_POST['firstname'];
$lastname= $_POST['lastname'];
$email= $_POST['email'];

$errors=[
    'firstnameError'=>'',
    'lastnameError'=>'',
    'emailError'=>'',
];

if(!array_filter($errors)) {

    $firstname= mysqli_real_escape_string( $conn,$_POST['firstname']);
    $lastname= mysqli_real_escape_string( $conn,$_POST['lastname']);
    $email= mysqli_real_escape_string( $conn,$_POST['email']);


$sql = "INSERT INTO users(firstname,lastname,email)
        VALUES($firstname', '$lastname', '$email')";

}
   if  (mysqli_query($conn,$sql)){
    header('Location'.$_SERVER['PHP_SELF']);
    echo 'succses';
   }else{
    echo 'fail' . mysqli_connect_error($conn);
   }

