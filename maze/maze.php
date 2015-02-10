<?php
	function generateMaze(){
		$maze = array();
		$rowCount = 10;
		$colCount = 10;
	
		for($rowIndex = 0; $rowIndex < $rowCount; $rowIndex++){
			$maze[$rowIndex] = array();
			for($colIndex = 0; $colIndex < $colCount; $colIndex++){
				$maze[$rowIndex][$colIndex] = $rowIndex * $colCount + $colIndex;
			}
		}
		
		return $maze;
	}
?>
