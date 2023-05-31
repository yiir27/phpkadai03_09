<?php
//DB接続
include("funcs.php");//セットで使う requireを使うことが多いエラーが出ると止まる/includeはエラーが出ても頑張ってくれる
$pdo = db_conn(); //db_connを呼び出して$pdoで実行する

//２．データ登録SQL作成
$sql = "SELECT * FROM hoiku_table;";
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

//データ表示
$view = "";
if($status == false) {
  sql_error($stmt);//関数sql_errorを実行
}

//全データ取得
$values = $stmt->fetchAll(PDO::FETCH_ASSOC);
//JSONを渡す場合に使う
// $json = json_encode($values,JSON_UNESCAPED_UNICODE);　文字化けしないようにJSON...がある

?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link href="select.css" rel="stylesheet">
<style>div{padding: 10px; font-size: 16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="index.php">データ登録</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->
<!-- Main[Start] -->
<div>
    <div class="container jumbotron">
        <table >
            <tr>
                <th>いつ</th>
                <th>天気</th>
                <th>機嫌</th>
                <th>昼食</th>
                <th>昼寝開始</th>
                <th>昼寝終了</th>
                <th>検温</th>  
            </tr>
            <?php foreach($values as $v) {?>
                <tr>
                    <td><a href="detail.php?id=<?=$v["id"]?>"><?= h($v["date"]) ?></a></td>
                    <td><?= h($v["weather"])?></td>
                    <td><?= h($v["kigen"]) ?></td>
                    <td><a href="detail.php?id=<?=$v["id"]?>"><?= h($v["lunch"]) ?></a></td>
                    <td><a href="detail.php?id=<?=$v["id"]?>"><?= h($v["neru"]) ?></a></td>
                    <td><a href="detail.php?id=<?=$v["id"]?>"><?= h($v["okita"]) ?></a></td>
                    <td><a href="detail.php?id=<?=$v["id"]?>"><?= h($v["taion"]) ?>℃</a></td>
                    <td><a href="delete.php?id=<?=$v["id"]?>">🗑️</a></td>
                </tr>
            <?php } ?>
        </table>
    </div>
</div>    
</body>
</html>