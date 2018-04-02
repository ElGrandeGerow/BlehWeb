<?php

class SiText extends SimpleWidule {
	
	private $text;
	
	public function __construct($name, $text) {
		parent::__construct($name);
		$this->text = $text;
	}
	
	public function __toString() {
		return "<div class='sitext siwidule'>".$this->text."</div>";
	}
	
}