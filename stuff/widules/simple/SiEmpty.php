<?php

class SiEmpty extends SimpleWidule {
	public function __construct() {
		
	}
	public function __toString() {
		return "<div class='siempty'></div>";
	}
}