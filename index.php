<?php
	function createBoard($rows = 10, $columns = 10) {
		echo("<table class='board'>");
		for ($i = 0; $i < $rows; $i++) {
			echo("<tr>");
			for ($j = 0; $j < $columns; $j++) {
				echo("<td><span class='board_cell' id='cell_{$i}_{$j}'></span></td>");
			}
			echo("</tr>");
		}
		echo("</table>");
	}
?>

<!doctype html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="stylesheet.css">
		<title>
			Schiffe versenken
		</title>
	</head>
	<body>
		<div id="boardcontainer">
			<div id="enemyboard">
				<?php createBoard(); ?>
			</div>
			<br>
			<div id="ownboard">
				<?php createBoard(); ?>
			</div>
		</div>
	</body>
</html>