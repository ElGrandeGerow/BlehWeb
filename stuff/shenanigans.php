<?php

// Constantes plutôt pratiques
define("ROOTNAME", "http://localhost/BlehWeb");
define("ROOTSTAND", __DIR__);
define("ROOTUPLOAD", __DIR__);
//var_dump(__DIR__);
define("ROOTCOOK", "/BlehWeb/stuff");

// Session plutôt sensationnelle
session_start();

$THEME = "inutsuna";
define("ROOTTHEME", ROOTNAME."/stuff/looks/".$THEME);

// inclusions plutôt amusantes, entrcoupées d'autoloads

require_once 'tricks/Bleh.php';
require_once 'widules/SimpleWidule.php';
require_once 'widules/ComplexWidule.php';

spl_autoload_register(function($widule) {
	$type = (substr($widule, 0, 2) == "Si") ? "simple" : "complex";
	require_once('widules/'.$type.'/'.$widule.'.php');
});
spl_autoload_register(function($widule) {
	require_once('widules/simple/'.$widule.'.php');
});

require_once 'tricks/funcs.php';

