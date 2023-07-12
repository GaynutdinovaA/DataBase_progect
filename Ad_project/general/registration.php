<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Авторизация</title>
    <link href="bootstrap.bundle.min.js/ bootstrap.bundle.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous">
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
            <a class="me-3 py-2 text-blue text-decoration-none">Регистрация</a>
            <a class="me-3 py-2 text-dark text-decoration-none" style="margin-right: 20px" href="authorization.php">Вход</a>
        </nav>
    </div>
</header>
</body>
<body1>
    <div class="container py-3"">
    <form action="" method="post" style="margin-left: 750px">
        <label>Фамилия</label>
        <input type="text" name="Customer_last_name" placeholder="Фамилия">
        <label>Имя</label>
        <input type="text" name="Customer_first_name" placeholder="Имя">
        <label>Отчетсво</label>
        <input type="text" name="Customer_patronymic" placeholder="Отчество">
        <label>Телефон</label>
        <input type="text" name="Customer_Phone_Number" placeholder="7/80000000000">
        <label>Почта</label>
        <input type="text" name="Customer_Email_Address" placeholder="Электронная почта">
        <button>Зарегистрироваться</button>
        <?php
        try {
            $conn = new PDO("mysql:host=localhost; dbname=base_for_repair", 'root', '');
            $check = 0;
            if (!empty($_POST['Customer_last_name']) and !empty($_POST['Customer_first_name']) and
                !empty($_POST['Customer_Phone_Number']) and !empty($_POST['Customer_Email_Address'])) {
                if (!empty($_POST['Customer_patronymic'])) {
                    $query = 'INSERT INTO customers VALUES (null, :Customer_last_name, :Customer_first_name, :Customer_patronymic, 
                              :Customer_Phone_Number, :Customer_Email_Address)';
                    $msg = $conn->prepare($query);
                    $msg->execute(['Customer_last_name' => $_POST ['Customer_last_name'],
                        'Customer_first_name' => $_POST ['Customer_first_name'],
                        'Customer_patronymic' => $_POST ['Customer_patronymic'],
                        'Customer_Phone_Number' => $_POST ['Customer_Phone_Number'],
                        'Customer_Email_Address' => $_POST ['Customer_Email_Address']]);
                } else {
                    $query = 'INSERT INTO customers VALUES (null, :Customer_last_name, :Customer_first_name, null, 
                              :Customer_Phone_Number, :Customer_Email_Address)';
                    $msg = $conn->prepare($query);
                    $msg->execute(['Customer_last_name' => $_POST ['Customer_last_name'],
                        'Customer_first_name' => $_POST ['Customer_first_name'],
                        'Customer_Phone_Number' => $_POST ['Customer_Phone_Number'],
                        'Customer_Email_Address' => $_POST ['Customer_Email_Address']]);
                }
                $check = -1;
            }
        }
        catch (PDOException $exception) {
            $check = 1;
        }
        ?>
        <p>
            У вас есть аккаунт? - <a href="authorization.php">Авторизуйтесь</a>!
        </p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModalSecond">Узнать пароль</button>

        <div class="modal fade" id="exampleModalSecond" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Ваш логин и пароль</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="lll">
                        <form action="" id="localForm">
                            <?php
                            try {
                                if ($check == -1 and !empty($_POST['Customer_Email_Address'])) {
                                    $conna = new mysqli("localhost", "root", "", "base_for_repair");
                                    $login = $_POST['Customer_Email_Address'];
                                    $sql = "Select login, password from authorization where login = '$login'";
                                    $result = $conna->query($sql);

                                    // Проверка на то, что строк больше нуля
                                    if ($result->num_rows > 0) {
                                        // Цикл для вывода данных
                                        foreach ($result as $row) {
                                            echo "Логин: " . $row["login"] . "<br/>";
                                            echo "Пароль: " . $row["password"];
                                        }
                                        // Если данных нет
                                    } else {
                                        echo "Данных нет";
                                    }
                                }
                            }
                            catch (mysqli_sql_exception $e) {

                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
                crossorigin="anonymous"></script>
    </form>
    </div>
    </div>
</body1>
</html>