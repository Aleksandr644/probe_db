<?php
$title = stripcslashes(htmlspecialchars(trim($_POST['title'])));
$id = $_GET['id'];


require("config.php");
$connect = new mysqli(HOST, USER, PASS, DB);
$connect->set_charset("UTF8");

$sql = "UPDATE `subjects` SET `title`=$title WHERE `subject_id`=$id";
$result = $connect->query($sql);
if($result) {
  echo "данные записаны";
//   header("location:./");
} else {
  echo "ошибка записи";
}