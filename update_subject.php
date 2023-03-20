<?php
    $id = $_GET['id'];
    echo $id;
    require("config.php");

    $connect = new mysqli(HOST, USER, PASS, DB);
    $connect->set_charset("UTF8");

    $sql ="SELECT * FROM `subjects` WHERE `subject_id`=$id";
    $result = $connect->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);

?>
<form action="">
    <input type="text" name="title"
    value="<?php echo $row['title']?>"><br>
    <input type="submit" value="Изменить">
</form>