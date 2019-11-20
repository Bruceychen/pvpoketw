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
		<h3>Default Pokemon Preferences</h3>
		<select class="input" id="default-ivs">
			<option value="gamemaster" <?php if($_SETTINGS->defaultIVs == "gamemaster") : ?>selected<?php endif; ?>>Typical IV's (~Rank 500)</option>
			<option value="maximize" <?php if($_SETTINGS->defaultIVs == "maximize") : ?>selected<?php endif; ?>>Maximum stat product (Rank 1)</option>
		</select>
		<p>Currently, this will choose which IV's to set for Pokemon you select in Single Battle, Multi-Battle, and the Team Builder. Opponents in Multi-Battle and the Team Builder will still use the "typical" IV's.</p>

		<h3>Battle Timeline</h3>
		<div class="check animate-timeline <?php if($_SETTINGS->animateTimeline == 1) : ?>on<?php endif; ?>"><span></span> Animate after generating results</div>

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

		<div class="save button">儲存設定</div>
	</div>
</div>

<script src="<?php echo $WEB_ROOT; ?>js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/Settings.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/ModalWindow.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/RankingMain.js?v=<?php echo $SITE_VERSION; ?>"></script>


<?php require_once 'footer.php'; ?>
