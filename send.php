<?php
    require_once 'connection.php';
    $link = mysqli_connect($host,$user,$password,$database) or die("Ошибка " . mysqli_error($link));

    $hypertension = $_POST['hypertension'];
    $heart = $_POST['heart'];
    $age = $_POST['age'];
    $sugar = $_POST['sugar'];
    $sex = $_POST['sex'];
    $smoking = $_POST['smoking'];
    $residence = $_POST['residence'];
    $stroke = $_POST['stroke'];
    
    $sql = "INSERT INTO `strokedata` (`hypertension`, `heartdisease`, `age`, `sugarlvl`, `sex`, `smoke`, `residence`, `stroke`) VALUES ('{$hypertension}', '{$heart}', '{$age}', '{$sugar}', '{$sex}', '{$smoking}', '{$residence}', '{$stroke}');";
    mysqli_query($link, $sql) or die("Ошибка " . mysqli_error($link));
    mysqli_close($link);
?>