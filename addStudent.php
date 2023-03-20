<?php
$fname = stripcslashes(htmlspecialchars(trim($_POST['fname'])));
$lname = stripcslashes(htmlspecialchars(trim($_POST['lname'])));
$age = stripcslashes(htmlspecialchars(trim($_POST['age'])));
$group = stripcslashes(htmlspecialchars(trim($_POST['group'])));


require("config.php");
$connect = new mysqli(HOST, USER, PASS, DB);
$connect->set_charset("UTF8");

$sql = "INSERT INTO `students`(`fname`, `lname`, `age`, `group_id`) VALUES ('$fname','$lname',$age, $group)";
$result = $connect->query($sql);
if($result) {
  echo "данные записаны";
//   header("location:./");
} else {
  echo "ошибка записи";
}