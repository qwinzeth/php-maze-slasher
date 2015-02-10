<html>
<head>
	<title>Maze Slasher</title>
	<link rel='stylesheet' type='text/css' href='maze.css' />
</head>
<body style="text-align:center;">
	<?php
		include "maze/maze.php";
		
		$maze = generateMaze();
		
		for($rowIndex = 0; $rowIndex < count($maze); $rowIndex++){
			echo '<div>';
			for($colIndex = 0; $colIndex < count($maze[$colIndex]); $colIndex++){
				echo "<span>{$maze[$rowIndex][$colIndex]}</span>";
			}
			echo '</div>';
		}
	?>
</body>
</html>
