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
            <a href="#" class="nav-link link-dark" style="background: #4a98f1">
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
            <a href="auth.php" class="nav-link link-dark">
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
            width: 1185px;
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
        <input type="text" name="search" id="myInput""  placeholder="Поиск.." title="Введите значение">
        <input type="submit" value="Поиск">
    </form>


    <form method="POST" style="">
        <?php
        /* Все варианты сортировки */
        $sort_list = array(
            'ID_accountant_asc'   => 'ID_accountant',
            'ID_accountant_desc'  => 'ID_accountant DESC',
            'Accoun_last_name_asc'  => 'Accoun_last_name',
            'Accoun_last_name_desc' => 'Accoun_last_name DESC',
            'Accoun_first_name_asc'   => 'Accoun_first_name',
            'Accoun_first_name_desc'  => 'Accoun_first_name DESC',
            'Accoun_patronymic_asc'   => 'Accoun_patronymic',
            'Accoun_patronymic_desc'  => 'Accoun_patronymic DESC',
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
            $sth = $dbh->prepare("select Accountants.ID_accountant, Accountants.Accoun_last_name, Accountants.Accoun_first_name, 
       Accountants.Accoun_patronymic, Accountants.Accountant_Phone_Number, Accountants.Accountant_Email_Address, 
       Accountants.Active from Accountants ORDER BY {$sort_sql}");
        else {
            $inputSearch = $_REQUEST['search'];
            $sth = $dbh->prepare("select Accountants.ID_accountant, Accountants.Accoun_last_name, Accountants.Accoun_first_name, 
       Accountants.Accoun_patronymic, Accountants.Accountant_Phone_Number, Accountants.Accountant_Email_Address, 
       Accountants.Active from Accountants WHERE Accountants.Accoun_last_name like '%$inputSearch%' OR Accountants.Accoun_first_name like '%$inputSearch%' 
                                            or Accountants.Accoun_patronymic like '%$inputSearch%'  or Accountants.Accountant_Email_Address like '%$inputSearch%'ORDER BY {$sort_sql}");
        }
        $sth->execute();
        $list = $sth->fetchAll(PDO::FETCH_ASSOC);

        /* Функция вывода ссылок */

        ?>
        <div class="sort-bar">
            <div class="sort-bar-title">Сортировать по:</div>
            <div class="sort-bar-list">
                <?php echo sort_link_bar('ID_accountant', 'ID_accountant_asc', 'ID_accountant_desc'); ?>
                <?php echo sort_link_bar('Accoun_last_name', 'Accoun_last_name_asc', 'Accoun_last_name_desc'); ?>
                <?php echo sort_link_bar('Accoun_first_name', 'Accoun_first_name_asc', 'Accoun_first_name_desc'); ?>
                <?php echo sort_link_bar('Accoun_patronymic', 'Accoun_patronymic_asc', 'Accoun_patronymic_desc'); ?>
            </div>
        </div>

        <table style='margin-left: 0px'>
            <thead>
            <tr>
                <th>ID_accountant</th>
                <th>Accoun_last_name</th>
                <th>Accoun_first_name</th>
                <th>Accoun_patronymic</th>
                <th style="width: 200px">Accountant_Phone_Number</th>
                <th style="width: 200px">Accountant_Email_Address</th>
                <th>Active</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $row): ?>
                <tr>
                    <td><?php echo $row['ID_accountant']; ?></td>
                    <td><?php echo $row['Accoun_last_name']; ?></td>
                    <td><?php echo $row['Accoun_first_name']; ?></td>
                    <td><?php echo $row['Accoun_patronymic']; ?></td>
                    <td><?php echo $row['Accountant_Phone_Number']; ?></td>
                    <td><?php echo $row['Accountant_Email_Address']; ?></td>
                    <td><?php echo $row['Active']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>





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
            'ID_master_asc'   => 'ID_master',
            'ID_master_desc'  => 'ID_master DESC',
            'Master_last_name_asc'  => 'Master_last_name',
            'Master_last_name_desc' => 'Master_last_name DESC',
            'Master_first_name_asc'   => 'Master_first_name',
            'Master_first_name_desc'  => 'Master_first_name DESC',
            'Master_patronymic_asc'   => 'Master_patronymic',
            'Master_patronymic_desc'  => 'Master_patronymic DESC',
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
            $sth = $dbh->prepare("select Masters.ID_master, Masters.Master_last_name, Masters.Master_first_name, 
       Masters.Master_patronymic, Masters.Master_Phone_Number, Masters.Master_Email_Address, 
       Masters.Active from Masters ORDER BY {$sort_sql}");
        else {
            $inputSearch = $_REQUEST['search'];
            $sth = $dbh->prepare("select Masters.ID_master, Masters.Master_last_name, Masters.Master_first_name, 
       Masters.Master_patronymic, Masters.Master_Phone_Number, Masters.Master_Email_Address, 
       Masters.Active from Masters WHERE Masters.Master_last_name like '%$inputSearch%' OR Masters.Master_first_name like '%$inputSearch%' 
                                            or  Masters.Master_patronymic like '%$inputSearch%'  or Masters.Master_Email_Address like '%$inputSearch%'ORDER BY {$sort_sql}");
        }
        $sth->execute();
        $list = $sth->fetchAll(PDO::FETCH_ASSOC);

        /* Функция вывода ссылок */

        ?>
        <div class="sort-bar">
            <div class="sort-bar-title">Сортировать по:</div>
            <div class="sort-bar-list">
                <?php echo sort_link_bar('ID_master', 'ID_master_asc', 'ID_master_desc'); ?>
                <?php echo sort_link_bar('Master_last_name', 'Master_last_name_asc', 'Master_last_name_desc'); ?>
                <?php echo sort_link_bar('Master_first_name', 'Master_first_name_asc', 'Master_first_name_desc'); ?>
                <?php echo sort_link_bar('Master_patronymic', 'Master_patronymic_asc', 'Master_patronymic_desc'); ?>
            </div>
        </div>

        <table style='margin-left: 0px'>
            <thead>
            <tr>
                <th>ID_master</th>
                <th>Master_last_name</th>
                <th>Master_first_name</th>
                <th>Master_patronymic</th>
                <th style="width: 200px">Master_Phone_Number</th>
                <th style="width: 200px">Master_Email_Address</th>
                <th>Active</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $row): ?>
                <tr>
                    <td><?php echo $row['ID_master']; ?></td>
                    <td><?php echo $row['Master_last_name']; ?></td>
                    <td><?php echo $row['Master_first_name']; ?></td>
                    <td><?php echo $row['Master_patronymic']; ?></td>
                    <td><?php echo $row['Master_Phone_Number']; ?></td>
                    <td><?php echo $row['Master_Email_Address']; ?></td>
                    <td><?php echo $row['Active']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>




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
            'ID_administrator_asc'   => 'ID_administrator',
            'ID_administrator_desc'  => 'ID_administrator DESC',
            'Admin_last_name_asc'  => 'Admin_last_name',
            'Admin_last_name_desc' => 'Admin_last_name DESC',
            'Admin_first_name_asc'   => 'Admin_first_name',
            'Admin_first_name_desc'  => 'Admin_first_name DESC',
            'Admin_patronymic_asc'   => 'Admin_patronymic',
            'Admin_patronymic_desc'  => 'Admin_patronymic DESC',
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
            $sth = $dbh->prepare("select Administrators.ID_administrator, Administrators.Admin_last_name, Administrators.Admin_first_name, 
       Administrators.Admin_patronymic, Administrators.Administrator_Phone_Number, Administrators.Administrator_Email_Address, 
       Administrators.Active from Administrators ORDER BY {$sort_sql}");
        else {
            $inputSearch = $_REQUEST['search'];
            $sth = $dbh->prepare("select Administrators.ID_administrator, Administrators.Admin_last_name, Administrators.Admin_first_name, 
       Administrators.Admin_patronymic, Administrators.Administrator_Phone_Number, Administrators.Administrator_Email_Address, 
       Administrators.Active from Administrators WHERE Administrators.Admin_last_name like '%$inputSearch%' OR Administrators.Admin_first_name like '%$inputSearch%' 
                                            or  Administrators.Admin_patronymic like '%$inputSearch%'  or Administrators.Administrator_Email_Address like '%$inputSearch%'ORDER BY {$sort_sql}");
        }
        $sth->execute();
        $list = $sth->fetchAll(PDO::FETCH_ASSOC);

        /* Функция вывода ссылок */

        ?>
        <div class="sort-bar">
            <div class="sort-bar-title">Сортировать по:</div>
            <div class="sort-bar-list">
                <?php echo sort_link_bar('ID_administrator', 'ID_administrator_asc', 'ID_administrator_desc'); ?>
                <?php echo sort_link_bar('Admin_last_name', 'Admin_last_name_asc', 'Admin_last_name_desc'); ?>
                <?php echo sort_link_bar('Admin_first_name', 'Admin_first_name_asc', 'Admin_first_name_desc'); ?>
                <?php echo sort_link_bar('Admin_patronymic', 'Admin_patronymic_asc', 'Admin_patronymic_desc'); ?>
            </div>
        </div>

        <table style='margin-left: 0px'>
            <thead>
            <tr>
                <th>ID_administrator</th>
                <th>Admin_last_name</th>
                <th>Admin_first_name</th>
                <th>Admin_patronymic</th>
                <th style="width: 250px">Administrator_Phone_Number</th>
                <th style="width: 250px">Administrator_Email_Address</th>
                <th>Active</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $row): ?>
                <tr>
                    <td><?php echo $row['ID_administrator']; ?></td>
                    <td><?php echo $row['Admin_last_name']; ?></td>
                    <td><?php echo $row['Admin_first_name']; ?></td>
                    <td><?php echo $row['Admin_patronymic']; ?></td>
                    <td><?php echo $row['Administrator_Phone_Number']; ?></td>
                    <td><?php echo $row['Administrator_Email_Address']; ?></td>
                    <td><?php echo $row['Active']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>

<?php
/* Функция вывода ссылок */
function sort_link_bar($title, $a, $b) {
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

</body>
</html>
</html>