<?php

class SiBackground extends SimpleWidule {
	
	private $file;
	private $style;
	private $fixed;
	
	public function __construct($name, $file, $style = "repeat", $fixed = "") {
		parent::__construct($name);
		$this->file = $file;
		$this->style = $style;
		$this->fixed = $fixed;
	}
	
	public function __toString() {
		$style = ($this->style == "stretch") ? "background-repeat: no-repeat;background-size: 100% auto;" : "";
		return "<div class='siwidule' style='background:url(".ROOTTHEME."/res/pictures/".$this->file.") ".$this->fixed."; ".$style.";'>"
				. "</div>";
	}
	
}