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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.1699027369282855" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7569042192351243" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.46253843457515953" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.9174352127333936" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.9728992459026895" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.6325183744744773" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.09952965453293983"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6177097739202528" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4748239511803882">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.606158314508253">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6894332556366636">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9215658608448674">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.23006765611458535"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.23529206830876648"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.8059596757138074"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7444619298806985"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.6681840251120756"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.9916638025437272"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.3228399774347481"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.35588442738551573"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.15250649242846803"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.8865626598206726"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.2824978296099141"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.6554918351649197"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.5503558383716021"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.6024052729433154"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.7317455622842579"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.812026611770303"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.4518998894433883"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.9360767993742576"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.2489931153600211"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
