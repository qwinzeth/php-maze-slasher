<?php
	$TILE_WIDTH = 32;
	
	class Tile{
		private $TILE_TYPE_FLOOR = 0;
		private $TILE_TYPE_WALL = 1;
	
		private $type;
	
		public $x;
		public $y;
		
		function __construct($sx, $sy){
			$this->x = $sx;
			$this->y = $sy;
			$this->type = $this->TILE_TYPE_WALL;
		}
		
		function makeFloor(){
			$this->type = $this->TILE_TYPE_FLOOR;
		}
		
		function isFloor(){
			return $this->type === $this->TILE_TYPE_FLOOR;
		}

		function isWall(){
			return $this->type === $this->TILE_TYPE_WALL;
		}
	}
?>
