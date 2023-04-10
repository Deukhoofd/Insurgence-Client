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
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/font-awesome.css?0.8497212771916172" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.45708824380240665" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7777117991875131" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/battle.css?0.18351490650308389" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/replay.css?0.1655988411622542" />
	<link rel="stylesheet" href="//battling.p-insurgence.com/style/utilichart.css?0.834338047092994" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.017843721148168568"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7278168701233625" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.14219839621376695">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5670813392377518">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.04052910170029245">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6679516070045013">Forum</a></li>
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
	<script src="//battling.p-insurgence.com/js/lib/jquery-1.11.0.min.js?0.21931869943347437"></script>
	<script src="//battling.p-insurgence.com/js/lib/lodash.core.js?0.5763462788027183"></script>
	<script src="//battling.p-insurgence.com/js/lib/backbone.js?0.09223612965928196"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9622242982799318"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//battling.p-insurgence.com/js/lib/jquery-cookie.js?0.7233190950421284"></script>
	<script src="//battling.p-insurgence.com/js/lib/html-sanitizer-minified.js?0.019564663287747752"></script>
	<script src="//battling.p-insurgence.com/js/battle-sound.js?0.8793522553535562"></script>
	<script src="//battling.p-insurgence.com/config/config.js?0.5130166296339014"></script>
	<script src="//battling.p-insurgence.com/js/battledata.js?0.11493939121407615"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini.js?0.4015301433160434"></script>
	<script src="//battling.p-insurgence.com/data/pokedex-mini-bw.js?0.7978663108784592"></script>
	<script src="//battling.p-insurgence.com/data/graphics.js?0.5932522105675813"></script>
	<script src="//battling.p-insurgence.com/data/pokedex.js?0.8359724942673799"></script>
	<script src="//battling.p-insurgence.com/data/items.js?0.26896584268247414"></script>
	<script src="//battling.p-insurgence.com/data/moves.js?0.13038619780864047"></script>
	<script src="//battling.p-insurgence.com/data/abilities.js?0.2078929322347356"></script>
	<script src="//battling.p-insurgence.com/data/teambuilder-tables.js?0.543982579887589"></script>
	<script src="//battling.p-insurgence.com/js/battle-tooltips.js?0.0803758701837709"></script>
	<script src="//battling.p-insurgence.com/js/battle.js?0.17243620192581144"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
