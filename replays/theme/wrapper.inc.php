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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.4496970264188189" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.5364325506933638" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8032013437807246" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.7472206333273237" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.35207988739161444" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.6604218839077844" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.1683189683354469"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.19140514124631558" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.2420554338574119">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.08997799176813404">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.33039742634615243">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.3119245824751362">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.46630196835255"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.7824957300115718"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.16073829967406272"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4206391027418548"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.45932402793419436"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.48540751751516154"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.7040319135094473"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.9179994033086409"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.22648267762910956"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.5890376885427275"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.10033615986707334"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.4136385798937965"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.21021154784058682"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.8412296229192169"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.15495369077283794"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.10289536912564201"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.16872323621145235"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.2894255497703404"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.16793254569922156"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
