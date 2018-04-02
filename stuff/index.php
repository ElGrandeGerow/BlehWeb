<?php

// COUQUIS
if (isset($_COOKIE["stay"])) {
    
}

// Le rooting c'est fantastique
$url = (isset($_SERVER['PATH_INFO'])) ? $_SERVER['PATH_INFO'] : "";
if ($url == "") {
    $rooting = array(
        "akt" => "home"
    );
} else {
    $url = array_filter(explode("/", $url));
    $rooting["akt"] = $url[1];
    if (count($url) > 1) {
        $rooting["params"] = array_slice($url, 1);
    }
}

// Alias plut�t efficace
$params = (array_key_exists("params", $rooting)) ? $rooting["params"] : "KEIN_PARAMETREN";
if ($params == "KEIN_PARAMETREN") unset($params);

// un require un peu random mais bon
require_once 'shenanigans.php';

/*
 * FONCTIONNEMENT DES INCLUSIONS
 * ---------
 * 
 * chaque module (désigné par "akt") possède un dossier dans "stuff/insides"
 * il peut posséder jusqu'à trois fichiers différents (normalement-peut-être-je-crois) :
 * > un gesicht.php : obligatoire, c'est l'apparence (html), et le code php si besoin est
 * > un gehirn.php : facultatif, c'est s'il est nécessaire d'exécuter du php avant de charger le front-end
 * > un fassade.js : facultatif, c'est le javascript (en jquery, uiui)
 * le module peut également avoir un dossier "lakaien" contenant des fichiers lakaien.php
 * les lakaien servent à diviser le gesicht ou le gehirn pour pouvoir s'y retrouver en codant
 * enfin, chaque module peut posséder un Stand se trouvant dans "stuff/standos"
 * le Stand est la communication Ajax, il est appelé dans le fassade.js via le fichier "stuff/bowandarrow.php"
 * 
 * kopf.php est le header
 * fuss.php le footer
 * DIO.js le fichier de js global 
 * uberbase.css le fichier de css global
 * lors de la création d'un nouveau Stand, il est nécessaire de lui donner un nom adapté (StarHome, ShinyRegister...)
 */

// S'il existe un gehirn, on l'inclut, uiui
if (file_exists($file = 'insides/'.$rooting['akt']."/".$rooting['akt'].".gehirn.php")) {
    include $file;
}

// puis on ajoute la tête, le corps et les pieds
require_once 'tricks/kopf.php';
require_once 'tricks/styleprocessor.php';
require_once 'tricks/fuss.php';
// pas de bras
// 
// ...
// 
// pas de chocolat