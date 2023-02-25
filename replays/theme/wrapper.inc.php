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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.9029516825156467" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.35174599744236046" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.3388439321824326" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.9886326723017114" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.9338181338528053" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.037828100711752244" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7232891766046188"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.3135744187753824" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.023741475998662054">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4029162160298747">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8010483589748558">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.33636998951266084">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.8167116987053733"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.0153388403799668"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.36954862456320803"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4206402557187574"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.7072560192228319"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.47246380444746694"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.9914103970816994"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.22248825328062294"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.9153720361289275"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.6871528016790243"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.03619924791670415"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.372724410975783"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.8911258811394804"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.6089571866592485"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.9735056790302246"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.883951366227216"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.8029526280939203"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.42217639267478524"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.29993700111929034"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
