<?php
include("funcs.php");//セットで使う requireを使うことが多いエラーが出ると止まる/includeはエラーが出ても頑張ってくれる

$date = $_POST["date"];
$weather = $_POST["weather"];
$kigen = $_POST["kigen"];
$lunch = $_POST["lunch"];
$neru = $_POST["neru"];
$okita = $_POST["okita"];
$taion = $_POST["taion"];
$id = $_POST["id"];

//DB接続
$pdo = db_conn(); //db_connを呼び出して$pdoで実行する
$sql = "UPDATE hoiku_table SET date=:date, weather=:weather, kigen=:kigen, lunch=:lunch, neru=:neru, okita=:okita, taion=:taion condition=:condition WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':date', $date, PDO::PARAM_STR);  
$stmt->bindValue(':weather', $weather, PDO::PARAM_STR); 
$stmt->bindValue(':kigen', $kigen, PDO::PARAM_STR);
$stmt->bindValue(':lunch', $lunch, PDO::PARAM_STR);
$stmt->bindValue(':neru', $neru, PDO::PARAM_STR);
$stmt->bindValue(':okita', $okita, PDO::PARAM_STR);
$stmt->bindValue(':taion', $taion, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);
$status = $stmt->execute();//SQL作成時のエラーが返ってくる

//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  sql_error($stmt);//関数sql_errorを実行
}else{
  //５．phpへリダイレクト
  redirect("select.php");
}  

?>