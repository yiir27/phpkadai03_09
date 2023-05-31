<html>
<head>
<meta charset="UTF-8">
<title>保育日誌</title>
<link rel="stylesheet" herf="./style.css">
</head>
<body>
<?php
$file = fopen('data/hoiku.txt','r');
$txt = fgets($file);
$ar = explode(",",$txt);
?>
<form action="write.php" method="post" name="form">
    <table border="1" width="100%">
        <tr>
            <th>いつ</th>
            <th>天気</th>
            <th>機嫌</th>
            <th>昼食</th>
            <th>昼寝開始</th>
            <th>昼寝終了</th>
            <th>検温</th>
        </tr>
        <tr>
            <td><?= $ar[0] ?></td>
            <td><?= $ar[1] ?></td>
            <td><?= $ar[2] ?></td>
            <td><?= $ar[3] ?></td>
            <td><?= $ar[4] ?></td>
            <td><?= $ar[5] ?></td>
            <td><?= $ar[6] ?>Ｃ°</td>
        </tr>
    </table>
</form>
</body>
</html>


