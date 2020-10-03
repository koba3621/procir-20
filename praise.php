<?php
session_start();

if (!isset($_SESSION['name'])) {
	header('Location: form.php');
	exit();
}

$praise_array = [
	'最高だよ！',
	'今日ももっとよくなっちゃうね！',
	'格好良いね！',
];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>気分上げよう</title>
</head>
<body>
<h1>気分が良ければ何事もうまくいきやすいですよ！</h1>
<p><?php echo $_SESSION['name']; ?>さんは、<?php echo $praise_array[array_rand($praise_array)]; ?></p>
</body>
</html>
