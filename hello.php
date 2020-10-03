<?php
session_start();

if (!isset($_SESSION['name'])) {
	header('Location: form.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>名前表示</title>
</head>
<body>
<h1>git practice</h1>
<p>こんにちは、<span style="font-size: bold"><?php echo htmlspecialchars($_SESSION['name'], ENT_QUOTES, 'UTF-8'); ?></span>さん</p>
<div><a href="praise.php">気分を上げに行きましょう！</a></div>
</body>
</html>
