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
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/font-awesome.css?0.4186488061181737" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5009829472470799" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.1750309204842071" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/battle.css?0.5117995960383901" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/replay.css?0.7097755793803495" />
	<link rel="stylesheet" href="//insurgence-battle-sim.nl/style/utilichart.css?0.9505463567939825" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.3047100346984939"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8962753229505549" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.39202556719950166">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13464875673812227">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7889556362556707">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6990542828387241">Forum</a></li>
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
	<script src="//insurgence-battle-sim.nl/js/lib/jquery-1.11.0.min.js?0.9530178946242889"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/lodash.core.js?0.3548563848494066"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/backbone.js?0.4362888069007209"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6249370177329485"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//insurgence-battle-sim.nl/js/lib/jquery-cookie.js?0.0719699720642033"></script>
	<script src="//insurgence-battle-sim.nl/js/lib/html-sanitizer-minified.js?0.2490406866821162"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-sound.js?0.17820465574091648"></script>
	<script src="//insurgence-battle-sim.nl/config/config.js?0.725672563353037"></script>
	<script src="//insurgence-battle-sim.nl/js/battledata.js?0.7935405222202541"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini.js?0.7373611694845237"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex-mini-bw.js?0.5067050411919003"></script>
	<script src="//insurgence-battle-sim.nl/data/graphics.js?0.723138155610882"></script>
	<script src="//insurgence-battle-sim.nl/data/pokedex.js?0.5911483392076047"></script>
	<script src="//insurgence-battle-sim.nl/data/items.js?0.5682607587431516"></script>
	<script src="//insurgence-battle-sim.nl/data/moves.js?0.6059175269649313"></script>
	<script src="//insurgence-battle-sim.nl/data/abilities.js?0.1543572162755782"></script>
	<script src="//insurgence-battle-sim.nl/data/teambuilder-tables.js?0.11878545720260814"></script>
	<script src="//insurgence-battle-sim.nl/js/battle-tooltips.js?0.4272932207828095"></script>
	<script src="//insurgence-battle-sim.nl/js/battle.js?0.995080298609561"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
