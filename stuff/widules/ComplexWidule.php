<?php

class ComplexWidule extends Bleh {
	
	protected $name;
	protected $table;
	
	protected $lang;
	
	public function __construct($name, $table) {
		$this->name = $name;
		$this->table = $this->tableRegistry($table);
		return $this;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getWidule() {
		return strtolower(get_class($this));
	}
	
	public function getLang() {
		return $this->lang;
	}
	
	public function table() {
		return $this->table;
	}
	
	/**
	 * enforce this widule's language to a specific one, preventing the global language to take apply to the widule.
	 * @param string $lang a double-trouble language tag (en-EN, en-US, hu-HU, fr-CA...)
	 */
	public function enforceLang($lang = "en-EN") {
		$this->lang = $lang;
		return $this;
	}
	
}