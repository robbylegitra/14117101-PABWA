<!DOCTYPE html>
<head>
    <title>Latihan 2</title>
</head>
<body>
    <form action="Latihan_2.php" method="GET">
    <label>Nama : </label>
    <input type="text" name="nama"><br>
    </form>
<?php
    if(isset($_GET['nama'])){
    if(strlen($_GET['nama'])>20){
        $h = strlen($_GET['nama']);
        $har=0;
        $har=$h*700;
        $color="blue";
        echo '<font color="'.$color.'">'.$_GET['nama'].'</font><br>'.$har.'';    
    } elseif(strlen($_GET['nama'])>10){
        $h = strlen($_GET['nama']);
        $har=0;
        $har=$h*500;
        $color="green";
        echo '<font color="'.$color.'">'.$_GET['nama'].'</font><br>'.$har.'';
    } elseif(strlen($_GET['nama'])>0){
        $color="purple";
        $h = strlen($_GET['nama']);
        $har=0;
        $har=$h*300;
        echo '<font color="'.$color.'">'.$_GET['nama'].'</font><br>'.$har.'';
    } else {
        $color="red";
        echo '<font color="'.$color.'">'.$_GET['nama'].'</font><br>';
    }
}
?>