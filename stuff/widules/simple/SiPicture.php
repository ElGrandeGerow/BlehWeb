<?php

class SiPicture extends SimpleWidule {
	
	private $file;
	private $style;
	
	public function __construct($name, $file, $style = "stretch") {
		parent::__construct($name);
		$this->file = $file;
		$this->style = $style;
	}
	
	public function __toString() {
		$center = ($this->style == "center") ? "dcenter" : "";
		$stretch = ($this->style == "stretch") ? "stretch" : "";
		return "<div class='siwidule'>"
				. "<div class='sipicture ".$center."'><img class='".$stretch."' src='".ROOTTHEME."/res/pictures/".$this->file."'></div>"
				. "</div>";
	}
	
}