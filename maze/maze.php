<?php
	include "tile.php";

	function generateMaze(){
		$mazeTiles = array();
		$rowCount = 20;
		$colCount = 30;
	
		for($rowIndex = 0; $rowIndex < $rowCount; $rowIndex++){
			$mazeTiles[$rowIndex] = array();
			for($colIndex = 0; $colIndex < $colCount; $colIndex++){
				$mazeTiles[$rowIndex][$colIndex] = new Tile($colIndex, $rowIndex);
			}
		}
		
		for($currentRow = 1; $currentRow < $rowCount - 2;){
			for($currentCol = 1; $currentCol < $colCount - 2;){
				$mazeTiles[$currentRow][$currentCol]->makeFloor();
				if(mt_rand(0, 1) === 1 && $currentRow < $rowCount - 1){
					$currentRow++;
				}else if($currentCol < $colCount - 1){
					$currentCol++;
				}
			}
		}
		
		return $mazeTiles;
	}
?>
