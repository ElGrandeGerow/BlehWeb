<div class="good-content stretch">
	
	<h1 class="doc-title">Documentation de BlehWeb</h1>
	<div class="doc-menu"><h4>accueil</h4></div>
	<div class='doc-contents'>
		<hr><br>
		<?php
		if (isset($params)) {
			if (count($params) > 1) {
				require "lakaien/".$params[1].".lakaien.php";
			} else {
				require "lakaien/".$params[0].".lakaien.php";
			}
		} else {
			require "lakaien/home.lakaien.php";
		}
		?>
	</div>
</div>