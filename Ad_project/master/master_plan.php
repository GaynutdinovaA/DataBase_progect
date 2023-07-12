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
        <span class="fs-4">Мастер</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="master_indic.php" class="nav-link link-dark">
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
            <a href="master_report.php" class="nav-link link-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-bar-chart-line-fill" viewBox="0 0 16 16">
                    <path d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0
                    1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2z"/>
                </svg>
                Отчеты
            </a>
        </li>
        <li>
            <a href="master_order.php" class="nav-link link-dark">
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
                     class="bi bi-file-text-fill" viewBox="0 0 16 16">
                    <path d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zM5 4h6a.5.5 0 0 1 0
                    1H5a.5.5 0 0 1 0-1zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8h6a.5.5 0 0 1 0
                    1H5a.5.5 0 0 1 0-1zm0 2h3a.5.5 0 0 1 0 1H5a.5.5 0 0 1 0-1z"/>
                </svg>
                План ремонта
            </a>
        </li>
        <li>
            <a href="master_material.php" class="nav-link link-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-stack" viewBox="0 0 16 16">
                    <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.598.598 0 0
                    1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604
                    0l5.317-2.66zM7.733.063a.598.598 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.598.598
                    0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535L7.733.063z"/>
                    <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.598.598 0 0 1-.534 0L.165
                    7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.659z"/>
                </svg>
                Материалы
            </a>
        </li>
        <li>
            <a href="redaction.php" class="nav-link link-dark">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                     class="bi bi-person-check-fill" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708
                    0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
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
            'ID_plan_asc'   => 'ID_plan',
            'ID_plan_desc'  => 'ID_plan DESC',
            'ID_order_asc'  => 'ID_order',
            'ID_order_desc' => 'ID_order DESC',
            'Master_last_name_asc'   => 'Master_last_name',
            'Master_last_name_desc'  => 'Master_last_name DESC',
            'Materials_name_asc'   => 'Materials_name',
            'Materials_name_desc'  => 'Materials_name DESC',
            'Content_on_the_plan_asc'   => 'Content_on_the_plan',
            'Content_on_the_plan_desc'  => 'Content_on_the_plan DESC',
            'Getting_started_asc'  => 'Getting_started',
            'Getting_started_desc' => 'Getting_started DESC',
            'End_work_asc'  => 'End_work',
            'End_work_desc' => 'End_work DESC',
            'Working_hours_asc'  => 'Working_hours',
            'Working_hours_desc' => 'Working_hours DESC',
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
            $sth = $dbh->prepare("select Plans.ID_plan, Plans.ID_order, Plans.ID_master, Masters.Master_last_name,Materials.Materials_name, 
       Plans.Content_on_the_plan, Plans.Getting_started, Plans.End_work, Plans.Working_hours from Plans
    inner join Masters ON Masters.ID_master=Plans.ID_master
    inner join Materials ON Materials.ID_materials=Plans.ID_materials ORDER BY {$sort_sql}");
        else {
            $inputSearch = $_REQUEST['search'];
            $sth = $dbh->prepare("select Plans.ID_plan, Plans.ID_order, Plans.ID_master, Masters.Master_last_name,Materials.Materials_name, 
       Plans.Content_on_the_plan, Plans.Getting_started, Plans.End_work, Plans.Working_hours from Plans
    inner join Masters ON Masters.ID_master=Plans.ID_master
    inner join Materials ON Materials.ID_materials=Plans.ID_materials WHERE Masters.Master_last_name like '%$inputSearch%' OR Materials.Materials_name like '%$inputSearch%'
    OR Plans.Content_on_the_plan like '%$inputSearch%' OR Plans.Getting_started like '%$inputSearch%' OR Plans.End_work like '%$inputSearch%' ORDER BY {$sort_sql}");
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
            <div class="sort-bar-list">
                <?php echo sort_link_bar('ID_plan', 'ID_plan_asc', 'ID_plan_desc'); ?>
                <?php echo sort_link_bar('ID_order', 'ID_order_asc', 'ID_order_desc'); ?>
                <?php echo sort_link_bar('ID_master', 'ID_master_asc', 'ID_master_desc'); ?>
                <?php echo sort_link_bar('Master_last_name', 'Master_last_name_asc', 'Master_last_name_desc'); ?>
                <?php echo sort_link_bar('Materials_name', 'Materials_name_asc', 'Materials_name_desc'); ?>
                <?php echo sort_link_bar('Content_on_the_plan', 'Content_on_the_plan_asc', 'Content_on_the_plan_desc'); ?>
                <?php echo sort_link_bar('Getting_started', 'Getting_started_asc', 'Getting_started_desc'); ?>
                <?php echo sort_link_bar('End_work', 'End_work_asc', 'End_work_desc'); ?>
                <?php echo sort_link_bar('Working_hours', 'Working_hours_asc', 'Working_hours_desc'); ?>
            </div>
            <input type="text" name="search" id="myInput""  placeholder="Поиск.." title="Введите значение">
            <input type="submit" value="Поиск">
        </div>

        <table style='margin-left: 0px'>
            <thead>
            <tr>
                <th>ID_plan</th>
                <th>ID_order</th>
                <th>ID_master</th>
                <th>Master_last_name</th>
                <th>Materials_name</th>
                <th>Content_on_the_plan</th>
                <th>Getting_started</th>
                <th>End_work</th>
                <th>Working_hours</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($list as $row): ?>
                <tr>
                    <td><?php echo $row['ID_plan']; ?></td>
                    <td><?php echo $row['ID_order']; ?></td>
                    <td><?php echo $row['ID_master']; ?></td>
                    <td><?php echo $row['Master_last_name']; ?></td>
                    <td><?php echo $row['Materials_name']; ?></td>
                    <td><?php echo $row['Content_on_the_plan']; ?></td>
                    <td><?php echo $row['Getting_started']; ?></td>
                    <td><?php echo $row['End_work']; ?></td>
                    <td><?php echo $row['Working_hours']; ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
</div>
</body>
</html>
</html>
