<?php require_once 'modules/config.php';
$SITE_VERSION = '1.29.27.2';

// This prevents caching on local testing
if (strpos($WEB_ROOT, 'src') !== false) {
    $SITE_VERSION = rand(1,1000) . '.' . rand(1,1000) . '.' . rand(1,1000);
}

// Initialize settings object
if(isset($_COOKIE['settings'])){
	$_SETTINGS = json_decode($_COOKIE['settings']);

	// Fill in missing settings with defaults
	if(! isset($_SETTINGS->matrixDirection)){
		$_SETTINGS->matrixDirection = "row";
	}

	// Fill in missing settings with defaults
	if(! isset($_SETTINGS->gamemaster)){
		$_SETTINGS->gamemaster = "gamemaster";
	}

	if(! isset($_SETTINGS->pokeboxId)){
		$_SETTINGS->pokeboxId = false;
	}

	if(! isset($_SETTINGS->pokeboxLastDateTime)){
		$_SETTINGS->pokeboxLastDateTime = 0;
	}

	if(! isset($_SETTINGS->ads)){
		$_SETTINGS->ads = 1;
	}

	if(! isset($_SETTINGS->xls)){
		$_SETTINGS->xls = 1;
	}

	if(! isset($_SETTINGS->rankingDetails)){
		$_SETTINGS->rankingDetails = "one-page";
	}

	if(! isset($_SETTINGS->hardMovesetLinks)){
		$_SETTINGS->hardMovesetLinks = 0;
	}

	// Validate the gamemaster setting, only allow these options
	$gamemasters = ["gamemaster", "gamemaster-mega", "gamemaster-paldea"];

	if(! in_array($_SETTINGS->gamemaster, $gamemasters)){
		$_SETTINGS->gamemaster = "gamemaster";
	}
} else{
	$_SETTINGS = (object) [
		'defaultIVs' => "gamemaster",
		'animateTimeline' => 1,
		'theme' => 'default',
		'gamemaster' => 'gamemaster',
		'pokeboxId' => 0,
		'ads' => 1,
		'xls' => 1,
		'rankingDetails' => 'one-page',
		'hardMovesetLinks' => 0
	];
}

$performGroupMigration = false;

if(! isset($_COOKIE['migrate'])){
	$performGroupMigration = true;

	setcookie('migrate', 'true', time() + (5 * 365 * 24 * 60 * 60), '/');
}

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php
if(! isset($META_TITLE)){
	$META_TITLE = 'PvPokeTW | 為 Pokemon GO PVP 而設的開源平台';
} else{
	$META_TITLE = $META_TITLE . ' | PvPokeTW';
}

if(! isset($META_DESCRIPTION)){
	$META_DESCRIPTION = '想在 Pokemon GO PVP 戰鬥中無往不利嗎? 善用這個網站，組建並精進你的隊伍，不用二十年你也可以成為冠軍！';
}

if(! isset($OG_IMAGE)){
	$OG_IMAGE = 'https://pvpoke.com/img/og.jpg';
}
?>

<title><?php echo $META_TITLE; ?></title>
<meta name="description" content="<?php echo $META_DESCRIPTION; ?>" />

<?php if(isset($CANONICAL)): ?>
	<link rel="canonical" href="<?php echo $CANONICAL; ?>" /><!--Prevents Google from indexing hundreds of different versions of the same page-->
<?php endif; ?>

<!--OG tags for social-->
<meta property="og:title" content="<?php echo $META_TITLE; ?>" />
<meta property="og:description" content="<?php echo $META_DESCRIPTION; ?>" />
<meta property="og:image" content="<?php echo $OG_IMAGE; ?>" />

<meta name="apple-mobile-web-app-capable">
<meta name="mobile-web-app-capable">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="manifest" href="<?php echo $WEB_ROOT; ?>data/manifest.json?v=2">

<?php if(strpos($_SERVER['REQUEST_URI'], 'team-builder') !== false): ?>
	<link id="favicon" rel="icon" href="<?php echo $WEB_ROOT; ?>img/favicon_team_builder.png">
<?php elseif(strpos($_SERVER['REQUEST_URI'], 'rankings') !== false): ?>
	<link id="favicon" rel="icon" href="<?php echo $WEB_ROOT; ?>img/favicon_rankings.png">
<?php elseif(strpos($_SERVER['REQUEST_URI'], 'matrix') !== false): ?>
	<link id="favicon"  rel="icon" href="<?php echo $WEB_ROOT; ?>img/favicon_matrix.png">
<?php else: ?>
	<link id="favicon" rel="icon" href="<?php echo $WEB_ROOT; ?>img/favicon.png">
<?php endif; ?>

<link rel="stylesheet" type="text/css" href="<?php echo $WEB_ROOT; ?>css/style.css?v=165">

<?php if(strpos($META_TITLE, 'Train') !== false): ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_ROOT; ?>css/train.css?v=20">
<?php endif; ?>

<?php if(strpos($_SERVER['REQUEST_URI'], 'articles') !== false): ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_ROOT; ?>css/article-extras.css?v=11">
<?php endif; ?>

<?php if((isset($_SETTINGS->theme))&&($_SETTINGS->theme != "default")): ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_ROOT; ?>css/themes/<?php echo $_SETTINGS->theme; ?>.css?v=24">
<?php endif; ?>

<script src="<?php echo $WEB_ROOT; ?>js/libs/jquery-3.3.1.min.js"></script>

<?php require_once('modules/analytics.php'); ?>

<script>
	// Host for link reference

	var host = "<?php echo $WEB_HOST; ?>";
	var webRoot = "<?php echo $WEB_ROOT; ?>";
	var webHostOrign = "<?php echo $WEB_HOST_ORIGN; ?>";
	var siteVersion = "<?php echo $SITE_VERSION; ?>";

	<?php if(isset($_COOKIE['settings'])) : ?>
		var settings = {
			defaultIVs: "<?php echo htmlspecialchars($_SETTINGS->defaultIVs); ?>",
			animateTimeline: <?php echo $_SETTINGS->animateTimeline ? 'true' : 'false'; ?>,
			matrixDirection: "row",
			gamemaster: "<?php echo htmlspecialchars($_SETTINGS->gamemaster); ?>",
			pokeboxId: "<?php echo intval($_SETTINGS->pokeboxId); ?>",
			pokeboxLastDateTime: "<?php echo intval($_SETTINGS->pokeboxLastDateTime); ?>",
			xls: <?php echo $_SETTINGS->xls ? 'true' : 'false'; ?>,
			rankingDetails: "<?php echo htmlspecialchars($_SETTINGS->rankingDetails); ?>",
			hardMovesetLinks: <?php echo intval($_SETTINGS->hardMovesetLinks); ?>
		};
	<?php else: ?>

		var settings = {
			defaultIVs: "gamemaster",
			animateTimeline: 1,
			matrixDirection: "row",
			gamemaster: "gamemaster",
			pokeboxId: 0,
			pokeboxLastDateTime: 0,
			xls: true,
			rankingDetails: "one-page",
			hardMovesetLinks: 0
		};

	<?php endif; ?>

	// If $_GET request exists, output as JSON into Javascript

	<?php
	foreach($_GET as &$param){
		$param = htmlspecialchars($param);
	}


	if($_GET){
		echo 'var get = ' . json_encode($_GET) . ';';
	} else{
		echo 'var get = false;';
	}
	?>
</script>

	<?php require_once 'modules/ads/base-code.php'; ?>

</head>

<body>

	<?php if(false): // Removing this but saving code for future use ?>
		<?php if(strpos($_SERVER['REQUEST_URI'], 'season-13') == false): ?>
			<div class="header-ticker">
				<a href="https://pvpoke.com/season-13/rankings/">Preview Season 13 Updates</a>
			</div>
		<?php else: ?>
			<div class="header-ticker old-version">
				<a href="https://pvpoke.com/rankings/">Return to Season 12</a>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	<header>
		<div class="header-wrap">
            <h1 class="title"><a href="<?php echo $WEB_ROOT; ?>">PvPoketw.com</a></h1>
			<div class="hamburger">
				<!--Because I'm too lazy to make a graphic-->
				<div class="meat"></div>
				<div class="meat"></div>
				<div class="meat"></div>
			</div>
			<div class="menu">
				<a class="icon-battle" href="<?php echo $WEB_ROOT; ?>battle/">戰鬥模擬計算</a>
				<div class="parent-menu">
				    <a class="icon-train" href="<?php echo $WEB_ROOT; ?>train/">AI對戰訓練</a>
				    <div class="submenu">
				        <div class="submenu-wrap">
				            <a class="icon-rankings" href="<?php echo $WEB_ROOT; ?>train/analysis/">強勢個體與組隊</a>
				        </div>
				    </div>
				</div>
				<div class="parent-menu">
					<a class="icon-rankings" href="<?php echo $WEB_ROOT; ?>rankings/">寶可夢排名</a>
					<div class="submenu">
						<div class="submenu-wrap">
							<a class="icon-rankings" href="<?php echo $WEB_ROOT; ?>custom-rankings/">自訂排名</a>
						</div>
					</div>
				</div>
				<a class="icon-team" href="<?php echo $WEB_ROOT; ?>team-builder/">隊伍組建模擬</a>
				<div class="parent-menu">
					<a class="more desktop" href="#"></a>
					<div class="submenu">
						<div class="submenu-wrap">
							<a class="icon-moves" href="<?php echo $WEB_ROOT; ?>moves/">招式</a>
							<a class="icon-articles" href="<?php echo $WEB_ROOT; ?>articles/">專欄文章</a>
							<a class="icon-contribute" href="<?php echo $WEB_ROOT; ?>contribute/">貢獻一己之力</a>
							<a class="icon-settings" href="<?php echo $WEB_ROOT; ?>settings/">設定</a>
							<a class="icon-twitter" href="https://twitter.com/pvpoke" target="_blank">官方推特</a>
                            <a class="icon-tera" href="<?php echo $WEB_ROOT; ?>tera/">Tera Raid Counters</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="main-wrap">
		<div id="main">
			<div class="hide mega-warning"><b>提醒：未實裝之Mega寶可夢的數值為網友推估，於正式實裝前請不要投入任何資源培育！</b></div>
