<?php
session_start();

if (isset($_POST['name']) && $_POST['name'] !== '') {
	$_SESSION['name'] = $_POST['name'];
	header('Location: hello.php');
	exit();
}
?>
<!DOCTYPE html>
<html lang-"ja">
<head>
<meta charset="UTF-8">
<title>form</title>
</head>
<body>
<h1>gitになれるための適当なファイルです。</h1>
<form action="" method="post">
<label for="name">名前：</label>
<input type="text" name="name" id="name" required>
<input type="submit" value="送信">
</form>
</body>
</html>
