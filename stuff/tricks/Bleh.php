<?php

abstract class Bleh {
	
	protected function db() {
		return new PDO("mysql:host=localhost;dbname=blehweb", "root", "");
	}
	
	static function stdb() {
		return new PDO("mysql:host=localhost;dbname=blehweb", "root", "");
	}
	
	/**
	 * protection sql
	 * un inventaire des tables, utilisé pour appeler les tables en toute sécurité ou presque
	 * @param string $tablename nom de la table
	 * @return string la table, si elle est enregistrée dans la liste, vide sinon
	 */
	protected function tableRegistry($tablename) {
		switch ($tablename) {
			case "bleh_news":
				return "bleh_news";
			case "bleh_dudes":
				return "bleh_dudes";

			default:
				return;
		}
	}
	
}