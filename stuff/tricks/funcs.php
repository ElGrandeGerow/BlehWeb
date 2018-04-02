<?php
/**
 * Transforme une chaîne en un truc utilisable dans une URL
 * @param string $string Chaîne à transformer
 * @return string Chaîne transformée
 */
function URLizeString($str, $replace = array(), $delimiter = '-') {
	if(!empty($replace)) {
	 $str = str_replace((array)$replace, ' ', $str);
	}

	$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);

	return $clean;
}

/**
 * generates an URL. Pretty self-explanatory
 * @param string $dest target destination. Must begin with a slash "/"
 * @return string 
 */
function machURL($dest) {
	return ROOTNAME.$dest;
}