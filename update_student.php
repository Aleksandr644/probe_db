<?php
    $id = $_GET['id'];
    echo $id;
    require("config.php");

    $connect = new mysqli(HOST, USER, PASS, DB);
    $connect->set_charset("UTF8");

    $sql ="SELECT * FROM `students` WHERE `student_id`=$id";
    $result = $connect->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

    // while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
    //   echo "<div>
    //             $row[lname] $row[fname] $row[age] $row[name]
    //             <a href='update_student.php?id=$row[student_id]'>изменить</a>
    //         </div>";
?>
<form action="">
    <input type="text" name="fname"
    value="<?php echo $row['fname']?>"><br>
    <input type="text" name="lname"
    value="<?php echo $row['lname']?>"><br>
    <input type="number" name="age"
    value="<?php echo $row['age']?>"><br>
    <input type="submit" value="Изменить">
</form>