<?php

// définir les widules du site
// les deux chiffres représentent la taille du widule
$pic = array(5, 5, new SiBackground("pic", "background.png", "stretch", "fixed"));
$home = array(3, 1, new Home("homepage"));
$reg = array(1, 2, new Register("minireg", "bleh_dudes"));
$doc = array(3, 1, new Doc("docpage"));

// création du grillage du site, positionnement des trucs
$mastergrid = array(
	[$pic, PLEMP, PLEMP, PLEMP, PLEMP],
	[PLEMP, PLEMP, PLEMP, PLEMP, PLEMP],
	[PLEMP, PLEMP, PLEMP, PLEMP, PLEMP],
	[PLEMP, PLEMP, PLEMP, PLEMP, PLEMP],
	[PLEMP, PLEMP, PLEMP, PLEMP, PLEMP],
);

// grillages de superposition
// les chiffres représentent leur position : si on commence le tableau par un 2,
// il sera superposé sur la ligne 2
// 
// la superposition permet d'afficher des widules différent selon la page où on se trouve
$homepage = array(
	1 => [1 => $home]
);

$docpage = array(
	1 => [1 => $doc]
);

$roots = array();

// rooting
// la clef (home ou doc ici) est le nom entré dans l'url
// ex. home fait que si on entre http://adresse.pl/home, le grillage $homepage sera superposé
$roots["home"] = $homepage;
$roots["doc"] = $docpage;

