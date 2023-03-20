<?php
    $id = $_GET['id'];
    echo $id;
    require("config.php");

    $connect = new mysqli(HOST, USER, PASS, DB);
    $connect->set_charset("UTF8");

    $sql ="SELECT * FROM `students` WHERE `student_id`=$id";
    $result = $connect->query($sql);

    // while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    //   echo "<div>
    //             $row[lname] $row[fname] $row[age] $row[name]
    //             <a href='update_student.php?id=$row[student_id]'>изменить</a>
    //         </div>";
?>