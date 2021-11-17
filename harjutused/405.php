<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Harjutus 405</title>
    <style>
        table{
            background-color: aqua;
        }
        td{
            border: solid 1px;
            padding:1px;
            text-align: center;
        }
    </style>
</head>
<body>
<br>
<input type="button" onclick="history.back();" class="b1" value="Tagasi";/>
<br>
<h1>Ülesanna 405 - Korrutus 2 tsükliga</h1>
<?php

    echo "<table>";

    for ($i=1; $i<=10; $i++){
        echo "<tr>";
            for ($j=1; $j<=10; $j++){

                $val=$i*$j;
                echo "<td>".$val."</td>";
            }
            echo "</tr>";
    }
    echo "</table>";
?>
<footer>
    <?php
    echo 'Tänane kuupäev '.date("d.m.Y");
    echo "<br>";
    echo "Kell on ".date("H: i: s");
    ?>
</footer>

</body>
</html>