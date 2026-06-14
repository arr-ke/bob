<!-- 更新選択画面 -->
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="../css/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
<?php
$pdo = new PDO('mysql:dbname=bob;host=localhost;charset=utf8', 'root', '');

$sql = $pdo->prepare("select * from bob1");

$sql->execute([]);

$number = 0;

foreach ($sql as $row) {
  $number = $row['id'];
}
echo <<<EOM

<h1>ボブジテン用語編集</h1>

<!-- 作成 -->
<form action="update-input.php" method="post" class="submit1">
  <h3>
  Noを検索してください。
  <br>
  <br>
  <br>
  <select name="number" class="select">
EOM;
  for ($i = 1; $i <= $number; $i++) {
    echo "<option value=\"{$i}\">{$i}</option>";
  }

echo <<<EOM
</select>
  </h3>
    <h3><button type="submit" class="submit">検索</button></h3>
</form>

<!-- ゲーム画面へ -->
<form action="index.html" method="post" class="submit1">
    <h3><button type="submit" class="submit">戻る</button></h3>
</form>

EOM;

?>
</body>
</html>