<?php require_once 'modules/config.php';
$SITE_VERSION = '1.36.3.1';

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

	// Deprecate old gamemaster versions
	if(! isset($_SETTINGS->gamemaster)){
		$_SETTINGS->gamemaster = "gamemaster";
	} else if($_SETTINGS->gamemaster == "gamemaster-paldea"){
		$_SETTINGS->gamemaster = "gamemaster";
	} else if($_SETTINGS->gamemaster == "gamemaster-mega"){
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

	if(! isset($_SETTINGS->colorblindMode)){
		$_SETTINGS->colorblindMode = 0;
	}

	if(! isset($_SETTINGS->performanceMode)){
		$_SETTINGS->performanceMode = 0;
	}

	if(! isset($_SETTINGS->theme)){
		$_SETTINGS->theme = 'default';
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
		'hardMovesetLinks' => 0,
		'colorblindMode' => 0,
		'performanceMode' => 0
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
<link rel="manifest" href="<?php echo $WEB_ROOT; ?>data/manifest.json?v=3">

<!--
<?php if(strpos($_SERVER['REQUEST_URI'], 'team-builder') !== false): ?>
	<link id="favicon" rel="icon" href="<?php echo $WEB_ROOT; ?>img/themes/sunflower/favicon_team_builder.png">
<?php elseif(strpos($_SERVER['REQUEST_URI'], 'rankings') !== false): ?>
	<link id="favicon" rel="icon" href="<?php echo $WEB_ROOT; ?>img/themes/sunflower/favicon_rankings.png">
<?php elseif(strpos($_SERVER['REQUEST_URI'], 'battle') !== false): ?>
	<link id="favicon"  rel="icon" href="<?php echo $WEB_ROOT; ?>img/themes/sunflower/favicon_battle.png">
<?php elseif(strpos($_SERVER['REQUEST_URI'], 'train') !== false): ?>
	<link id="favicon"  rel="icon" href="<?php echo $WEB_ROOT; ?>img/themes/sunflower/favicon_train.png">
<?php else: ?>
	<link id="favicon" rel="icon" href="<?php echo $WEB_ROOT; ?>img/themes/sunflower/favicon.png">
<?php endif; ?>
-->

<link id="favicon" rel="icon" href="<?php echo $WEB_ROOT; ?>img/themes/sunflower/favicon.png">

<link rel="stylesheet" type="text/css" href="<?php echo $WEB_ROOT; ?>css/style.css?v=214">

<?php if(strpos($META_TITLE, 'Train') !== false || strpos($META_TITLE, 'Performers') !== false): ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_ROOT; ?>css/train.css?v=21">
<?php endif; ?>

<?php if(strpos($_SERVER['REQUEST_URI'], 'articles') !== false): ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_ROOT; ?>css/article-extras.css?v=22">
<?php endif; ?>

<?php if((isset($_SETTINGS->theme))&&($_SETTINGS->theme != "default")): ?>
	<link rel="stylesheet" type="text/css" href="<?php echo $WEB_ROOT; ?>css/themes/<?php echo $_SETTINGS->theme; ?>.css?v=30">
<?php endif; ?>

<script src="<?php echo $WEB_ROOT; ?>js/libs/jquery-3.3.1.min.js"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/RSSReader.js?v=<?php echo $SITE_VERSION; ?>"></script>

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
			hardMovesetLinks: <?php echo intval($_SETTINGS->hardMovesetLinks); ?>,
			colorblindMode: <?php echo intval($_SETTINGS->colorblindMode); ?>,
			performanceMode: <?php echo intval($_SETTINGS->performanceMode); ?>,
			theme: "<?php echo htmlspecialchars($_SETTINGS->theme); ?>"
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
			hardMovesetLinks: 0,
			colorblindMode: 0,
			performanceMode: 0,
			theme: "default"
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

<body <?php if($_SETTINGS->colorblindMode == 1): ?>class="colorblind"<?php endif; ?>>

	<?php  if(false): // Removing this but saving code for future use ?>
		<?php if(strpos($_SERVER['REQUEST_URI'], 'new-season-2026') == false): ?>
			<div class="header-ticker">
				<a href="https://pvpoke.com/new-season-2026/rankings/">Preview next season</a>
			</div>
		<?php else: ?>
			<div class="header-ticker old-version">
				<a href="https://pvpoketw.com/rankings/">返回當前季度</a>
			</div>
		<?php endif; ?>
	<?php endif; ?>

	<header>
		<div class="header-wrap">
<!--			--><?php //if($_SETTINGS->theme == 'night'): ?>
<!--				<a href="--><?php //echo $WEB_ROOT; ?><!--"><img src="--><?php //echo $WEB_ROOT; ?><!--img/themes/sunflower/header-white.png" title="PvPoke.com" /></a>-->
<!--			--><?php //else: ?>
<!--				<a href="--><?php //echo $WEB_ROOT; ?><!--"><img src="--><?php //echo $WEB_ROOT; ?><!--img/themes/sunflower/header.png" title="PvPoke.com" /></a>-->
<!--			--><?php //endif; ?>
            <h1 class="title"><a href="<?php echo $WEB_ROOT; ?>">PvPoketw.com</a></h1>
			<div class="hamburger mobile">
				<!--Because I'm too lazy to make a graphic-->
				<div class="meat"></div>
				<div class="meat"></div>
				<div class="meat"></div>
			</div>
			<div class="menu">
				<div class="menu-content">
					<div class="parent-menu">
						<a class="icon-battle <?php if(strpos($_SERVER['REQUEST_URI'], '/battle/')): echo "selected"; endif; ?>" href="<?php echo $WEB_ROOT; ?>battle/">
	                        戰鬥模擬計算<span></span>
						</a>
						<div class="submenu">
							<div class="submenu-wrap">
								<a class="nav-great" href="<?php echo $WEB_ROOT; ?>battle/">單場戰鬥</a>
								<a class="nav-ultra" href="<?php echo $WEB_ROOT; ?>battle/multi/">多重戰鬥</a>
								<a class="nav-master" href="<?php echo $WEB_ROOT; ?>battle/matrix/">群組交叉戰鬥</a>
							</div>
						</div>
					</div>
					<div class="parent-menu">
						<a class="icon-rankings <?php if(strpos($_SERVER['REQUEST_URI'], '/rankings/')): echo "selected"; endif; ?>" href="<?php echo $WEB_ROOT; ?>rankings/">
	                        寶可夢排名 <span></span>
						</a>
						<div class="submenu">
							<div class="submenu-wrap">
								<a class="nav-great" href="<?php echo $WEB_ROOT; ?>rankings/all/1500/overall/">超級聯盟</a>
								<a class="nav-ultra" href="<?php echo $WEB_ROOT; ?>rankings/all/2500/overall/">高級聯盟</a>
								<a class="nav-master" href="<?php echo $WEB_ROOT; ?>rankings/all/10000/overall/">大師聯盟</a>
								<a href="<?php echo $WEB_ROOT; ?>custom-rankings/">自訂排名</a>
							</div>
						</div>
					</div>
					<a class="icon-team <?php if(strpos($_SERVER['REQUEST_URI'], '/team-builder/')): echo "selected"; endif; ?>" href="<?php echo $WEB_ROOT; ?>team-builder/">隊伍組建模擬</a>
					<div class="parent-menu">
						<a class="icon-train <?php if(strpos($_SERVER['REQUEST_URI'], '/train/')): echo "selected"; endif; ?>" href="<?php echo $WEB_ROOT; ?>train/">
						AI對戰訓練 <span></span>
						</a>
						<div class="submenu">
							<div class="submenu-wrap">
								<a href="<?php echo $WEB_ROOT; ?>train/analysis/">強勢寶可夢與分析</a>
							</div>
						</div>
					</div>
					<div class="parent-menu more-parent-menu">
						<a class="more desktop" href="#">
							<div class="hamburger desktop">
								<!--Because I'm too lazy to make a graphic-->
								<div class="meat"></div>
								<div class="meat"></div>
								<div class="meat"></div>
							</div>
						</a>
						<div class="submenu">
							<div class="submenu-wrap">
                                <a href="<?php echo $WEB_ROOT; ?>attack-cmp-chart/">CMP Chart</a>
								<a href="<?php echo $WEB_ROOT; ?>moves/">招式</a>
								<a href="<?php echo $WEB_ROOT; ?>articles/">專欄文章</a>
								<a href="<?php echo $WEB_ROOT; ?>settings/">設定</a>
								<a class="icon-heart" href="<?php echo $WEB_ROOT; ?>contact/">聯絡原版</a>
								<a class="tera" href="<?php echo $WEB_ROOT; ?>tera/">太晶戰反制計算器</a>
								<div class="latest-section mobile">
									<h4>Latest <a href="<?php echo $WEB_ROOT; ?>#news"></a></h4>
									<a class="latest-link" href="#"></a>
									<div class="date"></div>
								</div>
							</div>
						</div>
						<div class="safe-mouse-space"></div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<div class="main-wrap">
		<div id="main">
			<?php if($_SETTINGS->gamemaster != "gamemaster"): ?>
				<div class="custom-gm-banner">
					A <a href="<?php echo $WEB_ROOT; ?>gm-editor/">custom gamemaster</a> is active. Simulations and content may change.
				</div>
			<?php endif; ?>
