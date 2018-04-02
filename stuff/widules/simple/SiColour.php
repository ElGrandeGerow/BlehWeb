<?php

class SiColour extends SimpleWidule {
	
	private $colour;
	
	public function __construct($name, $colour) {
		parent::__construct($name);
		$this->colour = $colour;
	}
	
	public function __toString() {
		return "<div class='sicolour siwidule' style='background-color: ".$this->colour."'></div>";
	}
	
}