<?php
//vanuse leidmine funktsioon
function getVanus(){
    echo '<form method="post" action="">';
    echo 'Palun sinnu sünnipäev';
    echo '<input type="date" name="age">';
    echo '<input type="submit" value="Arvuta vannus">';
    echo '</form>';
    if (isset($_POST['submit'])){
        $synd=$_POST['age'];
        $diff=date_diff(date_create($synd), date_create('11.16.21'));
        echo '<br>';
        echo $diff->format('%y'). 'aastat vana';
    }
}
function weekend(){
    $today=date('d.m.Y');
    $talv=date('20.12.2021');
    $diff=date_diff(date_create($today), date_create($talv));
    echo '<br>';
    echo 'Talve koolivaheajane on '.$diff->format('%a').' päeva';


}

function getHooaeg(){
    //Блинов тебе не стыдно?
    //vastavalt tänase kuupäeva näitab hooaja pilti
    $pildid=array(
        "sygis"=>"pildid/kevad.png",
        "talv"=>"pildid/talv.jpg",
        "kevad"=>"pildid/sygis.png",
        "suvi"=>"pildid/suvi.png");
    $paev=date("o");
    //sygis
    $sygis_algus=date("o", strtotime("September 1"));
    $sygis_lopp=date("o", strtotime("November 30"));

    $paev=date("z");
    //talv
    $talv_algus=date("z", strtotime("Detsember 1"));
    $talv_lopp=date("z", strtotime("Veebruar 30"));

    $paev=date("v");
    //kevad
    $kevad_algus=date("v", strtotime("Märts 1"));
    $kevad_lopp=date("v", strtotime("Mai 30"));


    if($paev>=$sygis_algus && $paev<=$sygis_lopp) :
        $hooaeg="sygis";
    elseif ($paev>=$talv_algus && $paev<=$talv_lopp):
        $hooaeg="talv";
    elseif ($paev>=$kevad_algus && $paev<=$kevad_algus):
    $hooaeg="kevad";
    else: $hooaeg="suvi";
    endif;
    $hooajepilt=$pildid[$hooaeg];
    echo $hooajepilt;
}
?>

