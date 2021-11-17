<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Ülesanne 402</title>
</head>
<body>
<br>
<input type="button" onclick="history.back();" class="b1" value="Tagasi";/>
<br>
<h1>Ülesanne 402</h1>
<h2>1. 20 Checkbox tsükliga</h2>
<?php
    $i=1;
    while ($i<=20){
        echo "<input type='checkbox' id='$i' name='box[]' value='$i'>";
        echo "<label for='$i'>box ".$i."</label><br>";
        $i++;
    }

?>
<h2>2. 20 Tekstkast tsükliga </h2>
<?php
$i=21;
while ($i<=41){
    echo "<input type='text' id='$i' name='cell[]' value=''>";
    echo "<label for='t'>cell ".$i."</label><br>";
    $i++;
}

?>
<h2>3. 20 Radionipud tsükliga </h2>
<?php
$p=42;
while ($p<=62){
    echo "<input type='radio' id='$p' name='box[]' value='$p'>";
    echo "<label for='$p'>box ".$p."</label><br>";
    $p++;
}
?>
</body>
</html>


