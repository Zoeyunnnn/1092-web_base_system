<?php
session_start();
include('db_conn.php');
$name = $_POST['userName'];
$Account = $_POST['Account'];
$userPw = $_POST['password'];
$phone = $_POST['phone'];
$age = $_POST['age'];
$sex = $_POST['userSex'];
$sql = "INSERT INTO `users`(`account`, `password`) VALUES ('$Account','$userPw')";
$result = mysqli_query($link, $sql);
// $val = $result->num_rows;
// $result2 = 
// $val2 = $result2->num_rows;
if(mysqli_num_rows($result) == 1){
    $sql2 = "INSERT INTO `user_indentify`(`account`, `name`, `age`, `sex`, `phone`) VALUES ('$Account','$name','$age','$sex','$phone')";
    mysqli_query($link, $sql2);
    $_SESSION['account'] = $Account;
    echo '<script>alert("註冊成功!")</script>';
    echo "<meta http-equiv='refresh' content='2;url=index.php' />";
}else{
    echo "<script>alert('註冊失敗!')</script>";
    echo "<meta http-equiv='refresh' content='2;url=signup.php' />";
}