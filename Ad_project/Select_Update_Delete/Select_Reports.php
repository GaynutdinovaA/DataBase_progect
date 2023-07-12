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
<a href="../general/authorization.php">←</a><br>
<?php
$conn = new mysqli("localhost", "root", "", "base_for_repair");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "select Reports.ID_report, Reports.ID_accountant, Accountants.Accoun_last_name, Reports.Date_publications, 
       Reports.Report_name, Reports.Start_period, Reports.End_period, Reports.Report_comment, Reports.Passed 
from Reports
inner join Accountants ON Accountants.ID_accountant=Reports.ID_accountant
GROUP BY Reports.ID_report";
if($result = $conn->query($sql)){

    echo "Талица Отчетов";
    print "<table name='Reports'><tr><th>ID_report</th><th>ID_accountant</th>
<th>Accountant_last_name</th><th>Date_publications</th><th>Report_name</th>
<th>Start_period</th><th>End_period</th><th>Report_comment</th><th>Passed</th></tr>";
    foreach($result as $row){
        print "<tr>";
        print "<td>" . $row["ID_report"] . "</td>";
        print "<td>" . $row["ID_accountant"] . "</td>";
        print "<td>" . $row["Accoun_last_name"] . "</td>";
        print "<td>" . $row["Date_publications"] . "</td>";
        print "<td>" . $row["Report_name"] . "</td>";
        print "<td>" . $row["Start_period"] . "</td>";
        print "<td>" . $row["End_period"] . "</td>";
        print "<td>" . $row["Report_comment"] . "</td>";
        print "<td>" . $row["Passed"] . "</td>";
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

