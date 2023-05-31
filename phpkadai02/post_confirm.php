<?php
function h($str){
    return htmlspecialchars($str,ENT_QUOTES);
}
$date = $_POST["date"];
$weather = $_POST["weather"];
$kigen = $_POST["kigen"];
$lunch = $_POST["lunch"];
$neru = $_POST["neru"];
$okita = $_POST["okita"];
$taion = $_POST["taion"];
?>
<html>
<head>
<meta charset="UTF-8">
<title>保育日誌（受信）</title>
<link rel="stylesheet" herf="./style.css">
</head>
<body>
    <p>保育日誌</p>
    いつ：<?= h($date) ?> 
    <br>
    天気：<?= h($weather) ?>
    <br>
    機嫌：<?= h($kigen) ?>
    <br>
    昼食：<?= h($lunch) ?>
    <br>
    午睡：<?= h($neru) ?>〜
         <?= h($okita) ?>
    <br>
    検温：<?= h($taion) ?>Ｃ°   
</body>
</html>
