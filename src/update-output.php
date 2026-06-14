<!-- 更新画面(バックエンド) -->
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

$sql = $pdo->prepare("update bob1 set name1=?, name2=?, name3=?, name4=?, name5=? where id=?");

if ($sql->execute([$_POST['name1'], $_POST['name2'], $_POST['name3'], $_POST['name4'], $_POST['name5'], $_REQUEST['id']])) {
    // ヒアドキュメント(echoが使える領域)
    echo <<<EOM
    <h3>
    <br>
    <br>
    用語が更新されました。
    </h3>
EOM;
} else {
    // ヒアドキュメント(echoが使える領域)
    echo <<<EOM
    <h3>
    <br>
    <br>
    用語が更新されませんでした。
    </h3>
EOM;
}
?>

<!-- トップ画面へ -->
<form action="index.html" method="post" class="submit1">
    <h3><button type="submit" class="submit">戻る</button></h3>
</form>

</body>
</html>