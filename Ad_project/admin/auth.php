<!DOCTYPE html>
<html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Pixos</title>
    <title>Ремонт часов и ювелирных издений</title>
    <link href="bootstrap.bundle.min.js/ bootstrap.bundle.js">
    <style>
        table {
            background: #ffffff; /* Цвет фона таблицы */
            border-spacing: 0; /* Расстояние между ячеек */
        }
        th {
            background: #a4bbe7; /* Цвет фона ячеек */
            color: #fff; /* Цвет текста */
        }
        td, th {
            padding: 5px 10px; /* Поля в ячейках */
        }
    </style>
</head>


<body>
<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; position: fixed; height: 950px" style="border:20px">
    <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
        <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
        <span class="fs-4">Администратор</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="ad_indic.php" class="nav-link link-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-stickies-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5V13a1 1 0 0 0 1 1V1.5a.5.5 0 0 1 .5-.5H14a1 1 0 0 0-1-1H1.5A1.5 1.5 0 0 0 0 1.5z"/>
                    <path d="M3.5 2A1.5 1.5 0 0 0 2 3.5v11A1.5 1.5 0 0 0 3.5 16h6.086a1.5 1.5 0 0 0
                    1.06-.44l4.915-4.914A1.5 1.5 0 0 0 16 9.586V3.5A1.5 1.5 0 0 0 14.5 2h-11zm6 8.5a1
                    1 0 0 1 1-1h4.396a.25.25 0 0 1 .177.427l-5.146 5.146a.25.25 0 0 1-.427-.177V10.5z"/>
                </svg>
                Указания
            </a>
        </li>
        <li>
            <a href="ad_report.php" class="nav-link link-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0
                    1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"/>
                </svg>
                Отчеты
            </a>
        </li>
        <li>
            <a href="ad_staff.php" class="nav-link link-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0
                    1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0
                    0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"/>
                </svg>
                Сотрудники
            </a>
        </li>
        <li>
            <a href="ad_customer.php" class="nav-link link-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-people-fill" viewBox="0 0 16 16">
                    <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7Zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm-5.784
                    6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1
                    1 1h4.216ZM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                </svg>
                Клиенты
            </a>
        </li>
        <li>
            <a href="ad_order.php" class="nav-link link-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-cart-fill" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5
                    8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0
                    1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7
                    0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                Заказы
            </a>
        </li>
        <li>
            <a href="#" class="nav-link link-dark" style="background: #4a98f1">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-person-check-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708
                    0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
                Авторизации
            </a>
        </li>
        <li>
            <a href="redaction.php" class="nav-link link-dark">
                Редактор
            </a>
        </li>
    </ul>
    <hr>
    <div class="dropdown">
        <a href="../general/authorization.php" class="nav-link link-dark">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle"
                 viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226
                4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
            </svg>
            <strong>Выход</strong>
        </a>
    </div>
</div>



<!DOCTYPE html>
<html lang="ru">
<head style="margin-left: 350px">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php

    if (isset($_REQUEST['search'])) {
        $_SESSION['search'] = $_REQUEST['search'];

    }
    if (isset($_SESSION['search'])) {
        $_REQUEST['search'] = $_SESSION['search'];
    }
    ?>
    <style>
        #myInput {
            background-image: url('../img/search.svg');
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 350px;
            margin-top: 20px;
            font-size: 16px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
        }

    </style>
</head>
<body>

<div style="margin-left: 350px">

    <form action="<?= $_SERVER['SCRIPT_NAME'] ?>">
        <?php
        if (!empty($_REQUEST['search'])) {
        }
        ?>
    </form>


    <form method="POST" style="">
        <?php
        /* Все варианты сортировки */
        $sort_list = array(
            'id_authorization_asc'   => 'id_authorization',
            'id_authorization_desc'  => 'id_authorization DESC',
            'login_asc'  => 'login',
            'login_desc' => 'login DESC',
            'rol_num_asc'  => 'rol_num',
            'rol_num_desc' => 'rol_num DESC',
            'Customer_last_name_asc'   => 'Customer_last_name',
            'Customer_last_name_desc'  => 'Customer_last_name DESC',
            'Accoun_last_name_asc'   => 'Accoun_last_name',
            'Accoun_last_name_desc'  => 'Accoun_last_name DESC',
            'Master_last_name_asc'   => 'Master_last_name',
            'CMaster_last_name_desc'  => 'Master_last_name DESC',
            'Admin_last_name_asc'  => 'Admin_last_name',
            'Admin_last_name_desc' => 'Admin_last_name DESC',
        );

        /* Проверка GET-переменной */
        $sort = @$_GET['sort'];
        if (array_key_exists($sort, $sort_list)) {
            $sort_sql = $sort_list[$sort];
        } else {
            $sort_sql = reset($sort_list);
        }

        /* Запрос в БД */
        $dbh = new PDO("mysql:host=localhost; dbname=base_for_repair", 'root', '');
        if (empty($_REQUEST['search']))
            $sth = $dbh->prepare("select authorization.id_authorization, authorization.login, authorization.password, authorization.rol_num,
       Customers.Customer_last_name, Accountants.Accoun_last_name, Masters.Master_last_name, Administrators.Admin_last_name  from authorization
           left join Customers on Customers.Customer_Email_Address=authorization.login
           left join Accountants on Accountants.Accountant_Email_Address=authorization.login
           left join Masters on Masters.Master_Email_Address=authorization.login
           left join Administrators on Administrators.Administrator_Email_Address=authorization.login ORDER BY {$sort_sql}");
        else {
            $inputSearch = $_REQUEST['search'];
            $sth = $dbh->prepare("select authorization.id_authorization, authorization.login, authorization.password, authorization.rol_num,
       Customers.Customer_last_name, Accountants.Accoun_last_name, Masters.Master_last_name, Administrators.Admin_last_name  from authorization
           left join Customers on Customers.Customer_Email_Address=authorization.login
           left join Accountants on Accountants.Accountant_Email_Address=authorization.login
           left join Masters on Masters.Master_Email_Address=authorization.login
           left join Administrators on Administrators.Administrator_Email_Address=authorization.login 
        WHERE Customers.Customer_last_name like '%$inputSearch%' OR Accountants.Accoun_last_name like '%$inputSearch%' OR Masters.Master_last_name like '%$inputSearch%'
        OR Administrators.Admin_last_name like '%$inputSearch%' OR authorization.login like '%$inputSearch%'
     ORDER BY {$sort_sql}");
        }
        $sth->execute();
        $list = $sth->fetchAll(PDO::FETCH_ASSOC);

        /* Функция вывода ссылок */
        function sort_link_bar($title, $a, $b)
        {
            $sort = @$_GET['sort'];

            if ($sort == $a) {
                return '<a class="active" href="?sort=' . $b . '">' . $title . ' <i>↑</i></a>';
            } elseif ($sort == $b) {
                return '<a class="active" href="?sort=' . $a . '">' . $title . ' <i>↓</i></a>';
            } else {
                return '<a href="?sort=' . $a . '">' . $title . '</a>';
            }

        }

        ?>
        <div class="sort-bar">
            <div class="sort-bar-title">Сортировать по:</div>
            <?php
            ?>
            <div class="sort-bar-list">
                <?php echo sort_link_bar('id_authorization', 'id_authorization_asc', 'id_authorization_desc'); ?>
                <?php echo sort_link_bar('login', 'login_asc', 'login_desc'); ?>
                <?php echo sort_link_bar('rol_num', 'rol_num_asc', 'rol_num_desc'); ?>
                <?php echo sort_link_bar('Customer_last_name', 'Customer_last_name_asc', 'Customer_last_name_desc'); ?>
                <?php echo sort_link_bar('Accoun_last_name', 'Accoun_last_name_asc', 'Accoun_last_name_desc'); ?>
                <?php echo sort_link_bar('Master_last_name', 'Master_last_name_asc', 'Master_last_name_desc'); ?>
                <?php echo sort_link_bar('Admin_last_name', 'Admin_last_name_asc', 'Admin_last_name_desc'); ?>
            </div>
            <input type="text" name="search" id="myInput""  placeholder="Поиск.." title="Введите значение">
            <input type="submit" value="Поиск">
        </div>

        <table style='margin-left: 0px'>
            <thead>
            <tr>
                <th>id</th>
                <th style="width: 250px">login</th>
                <th style="width: 100px">password</th>
                <th>rol</th>
                <th style="width: 200px";>Customer_last_name</th>
                <th style="width: 200px">Accoun_last_name</th>
                <th style="width: 200px">Master_last_name</th>
                <th style="width: 200px">Admin_last_name</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $row): ?>
                <tr>
                    <td><?php echo $row['id_authorization']; ?></td>
                    <td><?php echo $row['login']; ?></td>
                    <td><?php echo $row['password']; ?></td>
                    <td><?php echo $row['rol_num']; ?></td>
                    <td><?php echo $row['Customer_last_name']; ?></td>
                    <td><?php echo $row['Accoun_last_name']; ?></td>
                    <td><?php echo $row['Master_last_name']; ?></td>
                    <td><?php echo $row['Admin_last_name']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>
</html>
</html>
