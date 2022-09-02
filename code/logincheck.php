<?php
session_start();
include('db_conn.php');
$Account = $_POST['Account'];
$userPw = $_POST["password"];
$sql = "SELECT * FROM `users` WHERE `account` = '$Account' AND `password` = '$userPw'";
$result = mysqli_query($link, $sql);
$val = $result->num_rows;
if($val == 1){
    $_SESSION['account'] = $Account;
    $outData = array("status" => "success");
    echo 'Login success!';
    echo "<meta http-equiv='refresh' content='2;url=index.php' />";
}else{
    $outData = array("status" => "noAccount");
    echo "noAccount";
    echo "<meta http-equiv='refresh' content='2;url=login.php' />";
}
// if(isset($_POST)){
// }else{
//     $outData = array("status" => "fail");
// }
// echo json_encode($outData, JSON_UNESCAPED_UNICODE);