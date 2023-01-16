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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.6409060906809989" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.005427766698020031" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5360245910877086" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.2556407196292487" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.1574704498177384" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.7971310192636134" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8608863615595714"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.38816540836169944" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.26647281415730273">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6483317029492617">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8898898372449098">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9062488832442837">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.004190924174660937"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.6186249818183767"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.9051912394176009"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07827716224241543"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.6246526745856127"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.663988010076761"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.6835257527012752"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.5870245179533808"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.45543376178083106"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.08213567353747298"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.4060504466238348"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.6712102708996581"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.33808715393027944"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.9095007281539016"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.3728014087362068"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.6718241107993357"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.2633822821048635"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.6547826896677233"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.7685967833683938"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
