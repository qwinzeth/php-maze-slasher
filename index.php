<html>
<head>
	<title>Maze Slasher</title>
	<link rel='stylesheet' type='text/css' href='maze.css' />
</head>
<body>
	<?php
		include "maze/maze.php";
		
		$maze = generateMaze();
		
		for($rowIndex = 0; $rowIndex < count($maze); $rowIndex++){
			for($colIndex = 0; $colIndex < count($maze[$rowIndex]); $colIndex++){
				$displayWallX = $maze[$rowIndex][$colIndex]->x * $TILE_WIDTH;
				$displayWallY = $maze[$rowIndex][$colIndex]->y * $TILE_WIDTH;
				$displayClass = $maze[$rowIndex][$colIndex]->isFloor() ? 'floor' : 'wall';
				echo "<div class='tile {$displayClass}' style='left: {$displayWallX};top: {$displayWallY};'>.</div>";
			}
		}
	?>
</body>
</html>
