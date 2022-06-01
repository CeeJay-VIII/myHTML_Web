<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$gender = $_POST['gender'];
$physicalAddress = $_POST['physicalAddress'];
$education = $_POST['education'];
$contact = $_POST['contact'];
$emailAddress = $_POST['emailAddress'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];


if(isset($_POST)){
    echo($name);
    echo($surname);
    echo($gender);
    echo($education);
}
?>