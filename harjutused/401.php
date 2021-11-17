<?php

//andmed massivis
$data=[
        "nimi"=> "Danil Akulin",
    "aadress"=>"Kivila 1, Tallinn",
    "pilt"=> "fail.png",
    "koduleht"=>"https://akulin20.thkit.ee"
];

?>

            <br>
            <input type="button" onclick="history.back();" class="b1" value="Tagasi";/>
            <br>
                <h1>Ülesanne 401/var 1</h1>
                <p> <b>
                        <?=$data["nimi"]?>
                    </b> </p>
                <p> <i>
                        <?=$data["aadress"]?>
                    </i> </p>
                <img src="<?=$data["pilt"]?>" alt ="pildatake">
                <a href="<?=$data["koduleht"]?>" target="_blank">Danil Akulin;</a>>

                //masiiv array funktsiioniga
                <h1>Ülesanne 401/var 2</h1>
            <?php
            $array=array("Danil Akulin", "Tallinn", "Kivila 1", "fail.png", "akulin20.thkit.ee");
            echo "<b>Nimi: ".$array[0]."</b><br>";
            echo "<i>Aadress: ".$array[1]."</i><br>";
            echo "<img src='$array[3]' alt='pildige'>";
            echo "<br><a href='https://$array[4]'>Koduleht</a>";
            //<a href="../test.php">tagasi...Ülesanne></a>

            ?>

