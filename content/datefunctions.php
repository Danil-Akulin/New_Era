<h1>Kuupäeva funktsioonid</h1>
<ol>
    <li>time()</li>
    <li>date()</li>
    <li>mktime()</li>
    <li>strtotime()</li>
    <li>date_default_timezone_set()</li>
</ol>

<h1>Ülesanded</h1>
<section>
    <h2>Kuupäev ja aeg formaadis m/d/y h:m</h2>
    <?php
    //Блинов тебе не стыдно?
    //Блинов тебе не стыдно?
    echo date('m/d/Y G:i');
    ?>
</section>
<section>
    <h2>Kasutaja vanus 16.11.2021</h2>
    <?php
    //Блинов тебе не стыдно?
        include('funktsioonid.php');
        echo getVanus();
    ?>
</section>
<section>
    <h2>Järgmine kooli vaheaeg on 20.12.21</h2>
    <?php
    //Блинов тебе не стыдно?
    echo weekend();
    ?>
    <h2> 2022 uue aastani on </h2>
    <?php
    $year=date('Y'); //Показавает текущий год
    $last_day=strtotime('last day of December');
    $date_today= strtotime('Now');
    $diff_to_last_day=$last_day-$date_today;
    echo "<br>";
    echo $year." aasta lõpuni ". floor($diff_to_last_day/(60*60*24)). " päeva";
    ?>


</section>
<section>
    <h2>Hooaja pilt</h2>
    <img src="<?php getHooaeg() ?>" alt="pilt">
</section>