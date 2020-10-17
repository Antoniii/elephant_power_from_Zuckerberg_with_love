<!DOCTYPE html>
<html lang="ru">
	<head>
		<title>Просто "Здравствуй!", просто "Как дела?"</title>
		<meta charset="utf-8">
	</head>
	<body>
		<?php
			include 'index_0.php'
		?>
		<br />
	<titlе>Альтернативные тeги: </title>
		<?= "Hello, world!"; ?>
		<br />
		<br />
		<?php
			echo "Текущая дата и время (UTC+3): <br />";
			echo date(DATE_RSS);
		?>
		<br />
		<br />
		<?php
			if(mt_rand(0,1)) { 
				?>
				<div style='color:green'><?= "You are good man!"; ?></div>
				<?php # Why? Hmm... because!
			} else {
				?>
				<div style='color:red'><?= "You are bad girl!"; ?></div>
				<?php
			}
		?>
		<br />
		<br />
		<?php
			echo "If u're 555, then I'm ";
			echo mt_rand(0,1000);
		?>
	</body>
<?php
phpinfo();
?>
</html>