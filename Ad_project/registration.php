<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Регистрация</title>
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
          rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
          crossorigin="anonymous">
</head>
<body>
        <form action="" method="post">
            <label>Фамилия</label>
            <input type="text" name="Customer_last_name" placeholder="Введите фамилию">
            <label>Имя</label>
            <input type="text" name="Customer_first_name" placeholder="Введите имя">
            <label>Отчетсво</label>
            <input type="text" name="Customer_patronymic" placeholder="Введите отчество">
            <label>Телефон</label>
            <input type="text" name="Customer_Phone_Number" placeholder="Введите номер телефона">
            <label>Почта</label>
            <input type="text" name="Customer_Email_Address" placeholder="Введите адрес электронной почты">
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

</body>
</html>