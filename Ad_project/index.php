<?php
try {
    $conn = new PDO("mysql:host=localhost; dbname=base_for_repair",'root','' );

    $sql = "update authorization set rol_num = {$_POST['rol_num']} where id_authorization = {$_POST['id_authorization']}";

    $msg = $conn->prepare($sql);
    $msg->execute();

    header("Location: /admin/auth.php");
} catch (Pdoexception $e) {
    echo "error: " . $e->getMessage() . "///";
}
?>


<?php
try {
    $conn = new PDO("mysql:host=localhost; dbname=base_for_repair",'root','' );

    $sql = "delete from authorization where id_authorization = {$_POST['id_authorization']}";

    $msg = $conn->prepare($sql);
    $msg->execute();

    header("Location: /admin/auth.php");
} catch (Pdoexception $e) {
    echo "error: " . $e->getMessage() . "///";
}
?>


<?php

try {
    $conn = new PDO("mysql:host=localhost; dbname=base_for_repair",'root','' );
    echo "Connection successfully";
}
catch (PDOException $exception){
    echo "Connection failed: " . $exception->getMessage();
}

?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница сайта</title>

    <!-- Bootstrap reboot (для сброса стилей) -->
    <link rel="stylesheet" href="libs/bootstrap-reboot.min.css">

    <!-- Bootstrap сетка -->
    <link rel="stylesheet" href="libs/bootstrap-grid.min.css">

    <!-- Шрифты с Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

    <!-- Стили сайта -->
    <link rel="stylesheet" href="css/home_styles.css">
</head>
<body style="background: rgb(231,212,205)">

<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 header-content">
                <img src="img/log2.jpg">
                <h1>Ремонт часов и ювелирных изделий!</h1>
                <button class="btn_main">Начать работу</button>
            </div>
        </div>
    </div>
    <div class="overlay">

    </div>
</header>

</body>
</html>
