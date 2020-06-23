<?php

$CANONICAL = '/settings/';

$META_TITLE = 'Site Settings';

$META_DESCRIPTION = 'Adjust your settings and preferences for the site.';

require_once 'header.php';

?>

<h1>設定</h1>
<div class="section moves white">
	<p>以下設定將會調整此網站的外觀。所有設定值會暫存在你本機端的cookie</p>
	<p>(Adjust your site preferences below. These will be saved in a cookie to your device.)</p>

	<div class="settings">
		<h3>寶可夢預設參數</h3>
		<h3>(Default Pokemon Preferences)</h3>
		<select class="input" id="default-ivs">
			<option value="gamemaster" <?php if($_SETTINGS->defaultIVs == "gamemaster") : ?>selected<?php endif; ?>>標準IV(約排名500)</option>
			<option value="maximize" <?php if($_SETTINGS->defaultIVs == "maximize") : ?>selected<?php endif; ?>>最佳IV(排名第1)</option>
		</select>
		<p>目前此設定參數將會影響到你於"戰鬥模擬計算"與"隊伍組建模擬"中，我方寶可夢的預設IV。但所有對手方寶可夢的IV都只會採用標準IV。</p>
		<p>(Currently, this will choose which IV's to set for Pokemon you select in Single Battle, Multi-Battle, and the Team Builder. Opponents in Multi-Battle and the Team Builder will still use the "typical" IV's.)</p>

		<h3>戰鬥模擬計算時間軸</h3>
		<h3>(Battle Timeline)</h3>
		<div class="check animate-timeline <?php if($_SETTINGS->animateTimeline == 1) : ?>on<?php endif; ?>"><span></span> 於計算結果產生後顯示時間軸動畫。(Animate after generating results)</div>

		<h3>Matrix &amp; Team Builder Results</h3>
        <p>Select whether to display results for Pokemon in rows versus Pokemon in columns, or vice versa, in the Matrix Battle tool and Team Builder scorecards.</p>
        <select class="input" id="matrix-direction">
            <option value="row" <?php if((isset($_SETTINGS->matrixDirection))&&($_SETTINGS->matrixDirection == "row")) : ?>selected<?php endif; ?>>Row vs Column</option>
			<option value="column" <?php if((isset($_SETTINGS->matrixDirection))&&($_SETTINGS->matrixDirection == "column")) : ?>selected<?php endif; ?>>Column vs Row</option>
        </select>
		
		<h3>網站主題</h3>
		<?php
		$theme = "default";
		
		if(isset($_SETTINGS->theme)){
			$theme = $_SETTINGS->theme;
		}
		?>
		<div>
			<select class="input" id="theme-select">
				<option value="default" <?php if($theme == "default") : ?>selected<?php endif; ?>>預設</option>
				<option value="night" <?php if($theme == "night") : ?>selected<?php endif; ?>>夜晚</option>
            </select>
        </div>

        <h3>Gamemaster 版本設定</h3>
        <p>選擇網站使用之寶可夢資料庫。</p>
        <p>(Select the current Pokemon and move values, either the default values or an alternative set.)</p>
        <?php
        $gamemaster = "gamemaster";

        if(isset($_SETTINGS->gamemaster)){
            $gamemaster = $_SETTINGS->gamemaster;
        }
        ?>
        <div>
            <select class="input" id="gm-select">
                <option value="gamemaster" <?php if($gamemaster == "gamemaster") : ?>selected<?php endif; ?>>預設資料庫</option>
                <option value="gamemaster-mega" <?php if($gamemaster == "gamemaster-mega") : ?>selected<?php endif; ?>>含Mega 進化資料(非官方預測)</option>
                <option value="gamemaster-jp" <?php if($gamemaster == "gamemaster-jp") : ?>selected<?php endif; ?>>(beta)預設日文版標準資料庫</option>
                <option value="gamemaster-jp-mega" <?php if($gamemaster == "gamemaster-jp-mega") : ?>selected<?php endif; ?>>(beta)日文版含Mega 進化資料(非官方預測)</option>
			</select>
		</div>

		<div class="save button">儲存設定</div>
	</div>
</div>

<script src="<?php echo $WEB_ROOT; ?>js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/Settings.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/ModalWindow.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/RankingMain.js?v=<?php echo $SITE_VERSION; ?>"></script>


<?php require_once 'footer.php'; ?>
