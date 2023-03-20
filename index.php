<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список студентов</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Список студентов</h1>
  <form action="addStudent.php" method="POST">
    <input type="text" name="fname" placeholder="Введите имя" required><br>
    <input type="text" name="lname" placeholder="Введите фамилию" required><br>
    <input type="number" name="age" placeholder="Введите возраст" required><br>
    <select name="group">
        <option value=2>A-201</option>
        <option value=1>ИЗ-301</option>
    </select><br>
    <input type="submit" value="Добавить">
  </form>
    <br>
    <a href=subjects.php>перейти к заполнению групп</a>



  <?php
    require("config.php");

    $connect = new mysqli(HOST, USER, PASS, DB);
    $connect->set_charset("UTF8");

    $sql = "SELECT * FROM `students` JOIN `groups` ON `groups`.group_id = `students`.group_id ORDER BY age";
    $result = $connect->query($sql);

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
      echo "<div>
                $row[lname] $row[fname] $row[age] $row[name]
                <a href='update_student.php?id=$row[student_id]'>изменить</a>
            </div>";
    }
    
    $connect->close();
  ?>
    
</body>
</html>