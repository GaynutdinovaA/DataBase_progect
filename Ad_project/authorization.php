<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Авторизация</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <form action="" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <button >Войти</button>
        <?php
        if(!empty($_POST['login'])){
            $login = $_POST['login'];
            if(!empty($_POST['password']))
                $password = $_POST['password'];
        }
        ?>
        <p>
            У вас нет аккаунта? - <a href="registration.php">Зарегистрируйтесь</a>!
        </p>
    </form>
</body>
</html>