<?php
include "functions.php";
$info=getInfo();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Домашнее задание по базам данных</title> 
    </head>
    <body> 
        <div> 
            <table>
                <thead><th>Код</th><th>ФИО</th><th>Дата рождения</th><th>Домашний адрес</th><th>Номер телефона</th></thead>
                <?php
                for($i=0; $i<count($info); $i++)
                {
                    $id=$info[$i]["student_id"];
                    $fio=$info[$i]["full_name"];
                    $birth=$info[$i]["birth_date"];
                    $home=$info[$i]["address"];
                    $phonenumber=$info[$i]["phone"];
                    echo "<tr><td>$id</td><td>$fio</td><td>$birth</td><td>$home</td><td>$phonenumber</td><td><a href='deleteController.php?id=".$id."'>...</a></td></tr>";
                }
                ?>
            </table>
        </div>
    </body>
<html>