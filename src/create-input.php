<!-- 用語作成画面(フロントエンド) -->
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
  <title>Login Page</title>
  <link rel="stylesheet" href="../css/style.css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>

<h1>ボブジテン用語新規作成</h1>
<!-- 用語作成 -->
<form action="create-output.php" method="post">
<h3>

用語１<input type="text" name="name1" class="text" required>
<br>
用語２<input type="text" name="name2" class="text" required>
<br>
用語３<input type="text" name="name3" class="text" required>
<br>
用語４<input type="text" name="name4" class="text" required>
<br>
用語５<input type="text" name="name5" class="text" required>
<br>
</h3>

    <h3><button type="submit" class="submit submit1">作成</button></h3>
</form>

<!-- ゲーム画面へ -->
<form action="index.html" method="post" class="submit1">
    <h3><button type="submit" class="submit">戻る</button></h3>
</form>


</body>
</html>