<?php
require "connection.php";
require "inc/projects.php";
require "inc/workers.php";
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Второй Вариант</title>
</head>
<body>
    <section class="container">
        
        <!-- Первое задание -->
        <h5>Информация о выполненных задачах по выбранному проекту на указанную дату</h5>
        <form action="forms/projects.php" class="form-group">
            <select name="project">
                <?php
                    foreach ($projects as $project) {
                        echo "<option value=\"". $project['id'] ."\">". $project['name'] ."</option>";
                    }
                ?>
            </select>
            <input type="date" name="targetDate">
            <input type="submit" value="Отправить">
        </form>
        <!--   -->


        <!--  Второе задание  -->
        <h5>Общее время работы над выбранным проектом.</h5>
        <form action="forms/project-time.php" class="form-group">
            <select name="project">
                <?php
                foreach ($projects as $project) {
                    echo "<option value=\"". $project['id'] ."\">". $project['name'] ."</option>";
                }
                ?>
            </select>
            <input type="submit" value="Отправить">
        </form>
        <!--    -->

        <!--  Третье задание  -->
        <h5>Число сотрудников отдела выбранного руководителя.</h5>
        <form action="forms/workers.php" class="form-group">
            <select name="chief">
                <?php
                foreach ($workers as $worker) {
                    echo "<option value=\"". $worker['id'] ."\">". $worker['name'] ."</option>";
                }
                ?>
            </select>
            <input type="submit" value="Отправить">
        </form>
        <!--  -->
    </section>
</body>
</html>