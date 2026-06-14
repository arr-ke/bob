<!-- ゲーム操作画面 -->
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

$sql->execute([random_int(1, 10)]);

$cnt = random_int(1, 4);

foreach ($sql as $row) {

  // 通常にカタカナを使わずに伝えるとき。
  if ($cnt == 1 || $cnt == 2) {
    echo "<h1>".random_int(1, 5)."</h1>";

    // ヒアドキュメント(echoが使える領域)
    echo <<< EOM
    <h2>
    <ol>
    No.{$row['id']}
    <br>
    <br>
    <li>{$row['name1']}</li>
    <li>{$row['name2']}</li>
    <li>{$row['name3']}</li>
    <li>{$row['name4']}</li>
    <li>{$row['name5']}</li>
    </ol>
    </h2>
    EOM;

    // かたことで伝えるとき。
  } else if ($cnt == 3) {
    echo "<h1 class=\"red\">".random_int(1, 5)."</h1>";

    // ヒアドキュメント(echoが使える領域)
    echo <<< EOM
    <h2>
    <ol>
    No.{$row['id']}
    <br>
    <br>
    <li>{$row['name1']}</li>
    <li>{$row['name2']}</li>
    <li>{$row['name3']}</li>
    <li>{$row['name4']}</li>
    <li>{$row['name5']}</li>
    </ol>
    </h2>
    EOM;

    // ジェスチャーで伝えるとき。
  } else if ($cnt == 4) {
    echo "<h1 class=\"blue\">".random_int(1, 5)."</h1>";

    // ヒアドキュメント(echoが使える領域)
    echo <<< EOM
    <h2>
    <ol>
    No.{$row['id']}
    <br>
    <br>
    <li>{$row['name1']}</li>
    <li>{$row['name2']}</li>
    <li>{$row['name3']}</li>
    <li>{$row['name4']}</li>
    <li>{$row['name5']}</li>
    </ol>
    </h2>
    EOM;
  }

}
?>

<!-- ゲームスタート -->
<form action="input.php" method="post" class="submit1">
  <h3><button type="submit" class="submit">ゲームスタート</button></h3>
</form>

<!-- ゲーム画面へ -->
<form action="index.html" method="post" class="submit1">
    <h3><button type="submit" class="submit">戻る</button></h3>
</form>

</body>
</html>