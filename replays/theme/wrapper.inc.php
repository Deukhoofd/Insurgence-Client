<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.32274543792967525" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8784544771211895" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.18554504076505873" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.4432333404736184" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.9761143512638601" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.929169702014921" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.06622400487378033"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7609493042332958" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9448683428837641">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.28781348210995206">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.40886900616032396">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.04854418961795348">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.40211340015630026"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.3449646190481581"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.41619853126142425"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8453018565811583"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.29676425135161666"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.7661101033491868"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.8169446432811478"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.41230362499517703"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.038806044148482544"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.2485062330918102"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.5861429723377658"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.41090711980732353"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.1416436263807337"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.8012024762143248"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.7830945407655208"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.06961930761811108"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.17457615821894956"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.7055973456036668"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.7413243231496875"></script>
	<script src="//battling.p-insurgence.com/replays/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
