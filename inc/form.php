<?php
if(!$conn){ 
    echo 'Error: ' . mysqli_connect_error();
} 

if (isset($_POST['submit'])){ 

$firstname= mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname= mysqli_real_escape_string($conn, $_POST['lastname']);
$email= mysqli_real_escape_string($conn, $_POST['email']);
$errors = [
    'firstnameError' => '',
    'lastnameError' => '',
    'emailError' => '',
];
$sql = "INSERT INTO USERS(firstname, lastname, email)
        VALUES('$firstname', '$lastname', '$email')";

if(empty($firstname)){
    $errors['firstnameError'] = 'الرجاء إدخال الأسم الأول'; 
} 

if(empty($lastname)){
    $errors['lastnameError'] = 'الرجاء إدخال الأسم الأخير';
} 

if(empty($email)){
    $errors['emailError'] = 'الرجاء إدخال البريد الألكتروني';
} elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['emailError'] = 'الرجاء إدخال بريد ألكتروني صحيح';
} 

if(!array_filter($errors)) {
if(mysqli_query($conn, $sql)){
    header('Location: ' . $_SERVER['PHP_SELF']);
} else {
    echo 'Error: ' . mysqli_connect_error($conn);

}
}

}

?>