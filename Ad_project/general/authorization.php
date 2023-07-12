<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Авторизация</title>
    <link href="bootstrap.bundle.min.js/ bootstrap.bundle.js">
<style>
        *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        }

        body1 {
        height: 85vh;
        width: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: Montserrat, sans-serif;
        }
        a {
        color: #20a8be;
        font-weight: bold;
        text-decoration: none;
        }
        p {
        margin: 10px 0;
        }

        form {
        display: flex;
        flex-direction: column;
        width: 400px;
        }

        input {
        margin: 10px 0;
        padding: 10px;
        border: unset;
        border-bottom: 2px solid #e3e3e3;
        }

        button {
        padding: 10px;
        background: #285efa;
        border: unset;
        cursor: pointer;
        color: #fff;
        border-radius: 5px;
        }
</style>
</head>
<body>
    <header>
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <h3 class="me-3 py-2 text-decoration-none" style="color: #4d4d4d">Ремонт часов и ювелирных изделий</h3>
            <img style="width: 150px; height: 36px; margin-left: 380px" src="../img/rsz_rixos_hotels_logo.png">
            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark text-decoration-none" href="registration.php">Регистрация</a>
                <a class="me-3 py-2 text-blue text-decoration-none" style="margin-right: 20px">Вход</a>
            </nav>
        </div>
    </header>
</body>
<body1>
    <div class="container py-3"">
        <form action="aut_php.php" method="post" style="width: 424px; margin-left: 750px">
            <label>Логин</label>
            <input type="text" name="login" id="login" placeholder="Введите логин">
            <label>Пароль</label>
            <input type="password" name="password" id="password" placeholder="Введите пароль">
            <button>Войти</button>
            <p>
                У вас нет аккаунта? - <a href="registration.php">Зарегистрируйтесь</a>!
            </p
        </form>
    </div>
</body1>
</html>