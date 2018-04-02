<h2>Grillage</h2>
<p>Le Grillage est un concept essentiel de BlehWeb. Il s&#39;agit de l&#39;utilisation des grilles CSS (ou <em>Grid</em>) pour structurer le site.
	<br>BlehWeb en fait un usage intensif parce que c&#39;est simple et que &ccedil;a donne un petit air moderno-progressiste &quot;in&quot; pas piqu&eacute; des hannetons.</p>

<h3>Le bon bloc</h3>

<p>Un site BlehWeb est en fait une grande grille divis&eacute;e en petits morceaux appel&eacute;s <strong>Blocs</strong>. Chaque bloc contient un <a href="http://%3C?php%20echo%20machURL(%22/doc/widules%22);%20?%3E">Widule</a>. La cr&eacute;ation du <em>layout</em> se fait dans le fichier .stil.php du <a href="http://%3C?php%20echo%20machURL(%22/doc/themes%22);%20?%3E">th&egrave;me</a> et est un processus plut&ocirc;t simple : il suffit de cr&eacute;er un tableau PHP bi-dimensionnel (donc du futur) &nbsp;dont les lignes et les colonnes repr&eacute;senteront le site. Voici un exemple simple, qui donnera un site de deux blocs de long par deux blocs de haut :</p>

<pre class="code">
$mastergrid = array(
	[$bleh, $bleh],
	[$bleh, $bleh]
);
</pre>

<p>Le tableau doit porter le nom de $mastergrid &ndash; c&#39;est cette variable qui sera interpr&eacute;t&eacute;e par le processeur de style (autre nom du futur).</p>

<p>On notera que le grillage occupe 100% de l&#39;espace en largeur. Si le site est divis&eacute; en deux colonnes, elles prendront chacune 50% de l&#39;&eacute;cran, et cinq colonnes recevront chacune 20%. La hauteur minimale d&#39;un bloc est d&eacute;finie dans les param&egrave;tres du th&egrave;me.</p>

<p>Les variables pr&eacute;sentes dans le tableau sont les diff&eacute;rents widules. Reportez-vous &agrave; la page concern&eacute;e pour savoir comment les cr&eacute;er et les instancier.</p>

<h3>Des widules bien propag&eacute;s</h3>

<p>Il est possible de propager un widule sur plusieurs blocs, et cela se fait via le grillage. Cette propagation permet d&#39;avoir des plus gros widules, ce qui est n&eacute;cessaire aux victimes de complexes d&#39;inf&eacute;riorit&eacute; mais &eacute;galement utile pour des choses comme des arri&egrave;re-plan ou autre. La propagation de widule se fait lors de l&#39;instanciation des widules (voir page concern&eacute;e) en cr&eacute;er un tableau au lieu d&#39;un objet simple. Les deux premiers &eacute;l&eacute;ments du tableau sont les positions de propagation :</p>

<p>$unWidule = array(3, 2, <em>instanciation du widule</em>);</p>

<p>Ce widule aura une largeur de 3 blocs et une hauteur de 2. Par exemple, sur un <em>layout</em> de cinq fois cinq cases, il fonctionnerait ainsi :</p>

<pre class="code">[truc | truc | truc | truc | truc]
[truc | truc | truc | truc | truc]
[truc | <span style="color: rgb(44, 130, 201);">truc&nbsp;</span>| <span style="color: rgb(209, 72, 65);">truc&nbsp;</span>| <span style="color: rgb(226, 80, 65);">truc&nbsp;</span>| truc]
[truc | <span style="color: rgb(226, 80, 65);">truc&nbsp;</span>| <span style="color: rgb(226, 80, 65);">truc&nbsp;</span>| <span style="color: rgb(226, 80, 65);">truc&nbsp;</span>| truc]
[truc | truc | truc | truc | truc]</pre>

<p>L&#39;origine du widule est en bleu et sa propagation en rouge. Plut&ocirc;t simple, non ?</p>
