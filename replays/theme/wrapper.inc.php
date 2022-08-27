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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.01999072263266788" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.768589497808253" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.6677299044903053" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.43702507103949895" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.5368726609170185" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.37773877668146105" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.23583541326798318"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7168954514974291" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4623560893914078">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.813501962277378">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.48808632554976805">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.11551531456766417">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.23662464224991342"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.5793579469061159"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.44613455001336977"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.772355334768617"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.579447643762693"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.4880442829451861"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.11012923186319568"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.3665862367956667"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.39550639914203045"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.9682125818138427"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.6650284793507304"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.1416473955044335"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.4409873479026081"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.7461894655751036"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.6057545342192963"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.5012489130116655"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.020514144567672643"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.3748962706463479"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.34675049897817267"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
