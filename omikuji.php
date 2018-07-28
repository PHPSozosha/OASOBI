<?php
$omikuji = ["大凶","凶","末吉","小吉","吉","中吉","大吉"];
$result = $omikuji[mt_rand(0, count($omikuji)-1)];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<title>おみくじ</title>
</head>
<body>
	<h1>おみくじ</h1>
	<p>今日の運勢は「<?php echo $result ?>」です！</p>
	<p><a href="<?php echo $_SERVER["SCRIPT_NAME"]; ?>">もう一度！</a></p>
</body>
</html>