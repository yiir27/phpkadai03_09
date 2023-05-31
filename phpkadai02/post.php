<html>
<head>
<meta charset="UTF-8">
<title>保育記録</title>
<link rel="stylesheet" herf="./style.css">
</head>
<body>
<form action="insert.php" method="post">
    <p>保育日誌</p>
    いつ：<input type="date" name="date"> 
    <br>
    天気：<input type="checkbox" name="weather" value="晴れ">晴れ
         <input type="checkbox" name="weather" value="曇り">曇り
         <input type="checkbox" name="weather" value="雨">雨
    <br>
    機嫌：<input type="checkbox" name="kigen" value="良い">良い
         <input type="checkbox" name="kigen" value="普通">普通
         <input type="checkbox" name="kigen" value="悪い">悪い
    <br>
    昼食：<input type="text" name="lunch">
    <br>
    午睡：<input type="time" name="neru">〜
         <input type="time" name="okita">
    <br>
    検温：<input type="text" name="taion">Ｃ°
    <input type="submit" value="送信">
</form>    
</body>
</html>