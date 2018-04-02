<?php

define("PLEMP", 0);
define("PLHOL", 1);

/**
 * Aplatit un layout sur un autre. Précisez des positions dans le layout à empiler pour le placer là où vous voulez.
 * C'est un système tout simple qu'il faut comprendre un coup
 * @param array $target un layout (tableau bi-dimensionnel)
 * @param array $grid un autre layout (tableau bi-dimensionnel)
 * @return array la combinaison des deux layouts
 */
function stack($target, $grid) {
	foreach ($grid as $i => $row) {
		foreach ($row as $z => $col) {
			if (!is_int($col)) $target[$i][$z] = $col;
		}
	}
	return $target;
}

require_once "./looks/".$THEME."/".$THEME.".stil.php";
require_once 'rooting.php';

$finaltheme = "";

echo "<div class='wrapper'>";

foreach ($mastergrid as $i => $row) {
	foreach ($row as $z => $col) {
		$c = $i+1;
		$r = $z+1;
		if (is_array($col)) {
			$col[0] += $r;
			$col[1] += $c;
			echo "<div style='grid-column: ".$r." / ".$col[0]."; grid-row: ".$c." / ".$col[1].";' class='blbl'>";
			$col = $col[2];
		} elseif (is_int($col)) {
			$col = new SiEmpty();
			echo "<div style='grid-column: ".$r."; grid-row: ".$c.";' class='blbl'>";	
		} else {
			echo "<div style='grid-column: ".$r."; grid-row: ".$c.";' class='blbl'>";	
		}
		if (!property_exists($col, "isSimple")) {
			/**
			 * @var ComplexWidule
			 */
			$ich = $col;
			require "./insides/".$col->getWidule()."/".$col->getWidule().".gesicht.php";

		} else {
			echo $col;
		}
		echo "</div>";
		
	}
}

echo "</div>";