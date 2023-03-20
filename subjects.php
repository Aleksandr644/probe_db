<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список групп</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h1>Список Предметов</h1>
  <form action="addSubject.php" method="POST">
    <input type="text" name="title" placeholder="Введите предмет" required><br>
    <input type="submit" value="Добавить">
  </form>



  <?php
    require("config.php");

    $connect = new mysqli(HOST, USER, PASS, DB);
    $connect->set_charset("UTF8");

    $sql = "SELECT * FROM `subjects`";
    $result = $connect->query($sql);

    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
      echo "<div>
                $row[title]
                <a href='update_subject.php?id=$row[subject_id]'>изменить</a>
            </div>";
    }
    
    $connect->close();
  ?>
    
</body>
</html>