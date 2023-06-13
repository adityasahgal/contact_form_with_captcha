<?php
include './config/connectdb.php';

if(isset($_POST['add_contact'])){

$name = $_POST['name'];
$email = $_POST['email'];
$massage = $_POST['massage'];
$captcha = $_POST['captcha'];

$sql = "INSERT INTO `contact_table` (`name`, `email`, `massage`) VALUES ('$name', '$email', '$massage' '$captcha')";

$result = mysqli_query($conn, $sql);
}
?>
