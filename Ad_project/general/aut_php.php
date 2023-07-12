<?php
session_start();
try {
    $_SESSION['name'] = 0;
    if (isset($_REQUEST['submit'])) {
        if ($_REQUEST['IDUser'])
            $_SESSION['name'] = $_REQUEST['IDUser'];
    }

    $conn = new mysqli("localhost", "root", "", "base_for_repair");
    $login = $_POST['login'];
    $password = $_POST['password'];

    $check_user = "select * from authorization
    left join customers on customers.Customer_Email_Address = authorization.login
    left join masters on masters.Master_Email_Address = authorization.login
    left join accountants on accountants.Accountant_Email_Address = authorization.login
    left join administrators on administrators.Administrator_Email_Address = authorization.login
         where login='$login' and password='$password'
         order by login ";
    $result = $conn->query($check_user);



    // Проверка на то, что строк больше нуля
    if ($result->num_rows > 0) {

        $sql = "Select rol_num from authorization where login='$login' and password='$password'";
        $row = $conn->query($sql);
        foreach ($row as $rol) {
            if ($rol['rol_num'] == 1) {
                header("Location: ../users/admin_page.html");
            } elseif ($rol['rol_num'] == 2) {
                header("Location: ../users/accountant_page.html");
            } elseif ($rol['rol_num'] == 3) {
                header("Location: ../users/master_page.html");
            } elseif ($rol['rol_num'] == 4) {
                header("Location: ../users/customer_page.html");
            }
        }


    } else {
        echo 'Неверный логин или пароль';
    }
} catch (mysqli_sql_exception $e) {
}
?>
