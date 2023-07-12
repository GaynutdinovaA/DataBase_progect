<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Таблица</title>
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
<?php
$conn = new mysqli("localhost", "root", "", "base_for_repair");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "select Orders.ID_order, Customers.Customer_last_name, Customers.Customer_first_name,
       Masters.ID_master, Masters.Master_last_name, Orders.Date_work, Orders.Date_create, Orders.Weight, Orders.Price 
from Orders
inner join Masters ON Masters.ID_master=Orders.ID_master
inner join Customers ON Customers.ID_customer=Orders.ID_customer
GROUP BY Orders.ID_order";
if($result = $conn->query($sql)){
    echo "Талица Заказов";
    print "<table name='Orders'><tr><th>ID_Order</th><th>Customer_last_name</th>
<th>Customer_first_name</th><th>ID_Master</th><th>Master_last_name</th>
<th>Date_work</th><th>Date_create</th><th>Weight</th><th>Price</th></tr>";
    foreach($result as $row){
        print "<tr>";
        print "<td>" . $row["ID_order"] . "</td>";
        print "<td>" . $row["Customer_last_name"] . "</td>";
        print "<td>" . $row["Customer_first_name"] . "</td>";
        print "<td>" . $row["ID_master"] . "</td>";
        print "<td>" . $row["Master_last_name"] . "</td>";
        print "<td>" . $row["Date_work"] . "</td>";
        print "<td>" . $row["Date_create"] . "</td>";
        print "<td>" . $row["Weight"] . "</td>";
        print "<td>" . $row["Price"] . "</td>";
        print "</tr>";
    }
    echo "</table>";
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>
</body>
</html>

