<!-- 更新画面(フロントエンド) -->
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

$sql = $pdo->prepare("select * from bob1 where id=?");

$sql->execute([$_POST['number']]);

foreach ($sql as $row) {
  $sql1 = $pdo->prepare("select * from bob1");

  $sql1->execute([]);

  $number = 0;

  // 最終的に最後尾を代入している。
  foreach ($sql1 as $row1) {
    $number = $row1['id'];
  }

  // ヒアドキュメント(echoが使える領域)
  echo <<<EOM
  <h1>ボブジテン用語新規作成</h1>

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
    // 検索番号を保持しています。
    if ($i == $_POST['number']) {
      echo "<option value=\"{$i}\" selected>{$i}</option>";
    } else {
      echo "<option value=\"{$i}\">{$i}</option>";
    }
    
  }

// ヒアドキュメント(echoが使える領域)
echo <<<EOM
  </select>
    </h3>
      <h3><button type="submit" class="submit">検索</button></h3>
  </form>

  <!-- 作成 -->
  <form action="update-output.php" method="post" class="submit1">
  <h3>

  用語１<input type="text" name="name1" class="text" value="{$row['name1']}" required>
  <br>
  用語２<input type="text" name="name2" class="text" value="{$row['name2']}" required>
  <br>
  用語３<input type="text" name="name3" class="text" value="{$row['name3']}" required>
  <br>
  用語４<input type="text" name="name4" class="text" value="{$row['name4']}" required>
  <br>
  用語５<input type="text" name="name5" class="text" value="{$row['name5']}" required>
  <br>
  <input type="hidden" name="id" value="{$row['id']}">
  </h3>

  <h3><button type="submit" class="submit">更新</button></h3>
</form>

EOM;
}

?>

<!-- トップ画面へ -->
<form action="index.html" method="post" class="submit1">
    <h3><button type="submit" class="submit">戻る</button></h3>
</form>


</body>
</html>