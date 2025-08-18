<?php

$CANONICAL = '/settings/';

$META_TITLE = 'Site Settings';

$META_DESCRIPTION = 'Adjust your settings and preferences for the site.';

require_once 'header.php';

?>

<h1>設定</h1>
<div class="section moves white">
	<p>以下設定將會調整此網站的外觀。所有設定值會暫存在你本機端的cookie</p>

	<div class="settings">

		<h3>網站主題風格</h3>
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
        <h3>Gamemaster Version</h3>
        <p>Select the current Pokemon and move values to use in simulations. You can create new gamemaster versions using the <a href="<?php echo $WEB_ROOT; ?>gm-editor/"><b>Gamemaster Editor</b>.</a></p>
        <?php
        $gamemaster = "gamemaster";

        if(isset($_SETTINGS->gamemaster)){
            $gamemaster = $_SETTINGS->gamemaster;
        }
        ?>
        <div>
            <select class="input" id="gm-select">
                <option value="gamemaster" <?php if($gamemaster == "gamemaster") : ?>selected<?php endif; ?>>Default</option>
            </select>
        </div>

		<h3>Pokebox</h3>
        <p>PvPoke 已跟<a target="_blank" href="https://www.pokebattler.com/" class="pokebattler">Pokebattler</a>進行整合。於下方輸入你的Pokebattler id，便能將你於Pokebattlers 網站上所登載的寶可夢資料引入本站：</p>
        <input type="text" class="input" id="pokebox-id" <?php if(isset($_SETTINGS->pokeboxId)) : ?>value="<?php echo intval($_SETTINGS->pokeboxId); ?>"<?php endif; ?> />

		<h3>Performance Mode</h3>
		<div class="check performanceMode <?php if($_SETTINGS->performanceMode == 1) : ?>on<?php endif; ?>"><span></span> Performance mode</div>
		<p>Improve CPU performance on the Rankings and Battle pages. Enable this if you experience lag or freezes on your browser. This feature disables the Suggested Teammates and Similar Pokemon lists in the ranking details, and timeline animations on the Battle page.</p>


		<h3>Colorblind Mode</h3>
		<div class="check colorblindMode <?php if($_SETTINGS->colorblindMode == 1) : ?>on<?php endif; ?>"><span></span> Colorblind mode</div>
		<p>Increase contrast for battle rating colors, symbols, and tables.</p>

		<table class="rating-table" cellspacing="0">
			<tbody><tr>
				<td><a href="javascript:void(0)" class="rating margin-6 loss"><span></span>200</a></td>
				<td><a href="javascript:void(0)" class="rating margin-6 close-loss"><span></span>400</a></td>
				<td><a href="javascript:void(0)" class="rating margin-6 tie"><span></span>500</a></td>
				<td><a href="javascript:void(0)" class="rating margin-6 close-win"><span></span>600</a></td>
				<td><a href="javascript:void(0)" class="rating margin-6 win"><span></span>800</a></td>
			</tr>
		</tbody></table>

		<h3>廣告選項</h3>
		<div class="check ads <?php if($_SETTINGS->ads == 1) : ?>on<?php endif; ?>"><span></span> 顯示廣告</div>
		<p>廣告將用於資助本站以及寶可夢社群！</p>

		<h3>XL 寶可夢</h3>
		<div class="check xls <?php if($_SETTINGS->xls == 1) : ?>on<?php endif; ?>"><span></span> 顯示 XL 寶可夢</div>
		<p>選擇是否要在主要排名資料與隊伍組建模擬中，顯示等級超過40以上的寶可夢。你也可以在各功能頁面中暫時性切換顯示/移除他們。</p>

		<h3>寶可夢預設參數</h3>
		<select class="input" id="default-ivs">
			<option value="gamemaster" <?php if($_SETTINGS->defaultIVs == "gamemaster") : ?>selected<?php endif; ?>>標準IV(約排名500)</option>
			<option value="maximize" <?php if($_SETTINGS->defaultIVs == "maximize") : ?>selected<?php endif; ?>>最佳IV(排名第1)</option>
		</select>
        <p>目前此設定參數將會影響到你於"戰鬥模擬計算"與"隊伍組建模擬"中，我方寶可夢的預設IV。但所有對手方寶可夢的IV都只會採用標準IV。</p>

		<h3>排名資料個體細節顯示設定</h3>
        <p>設定排名資料中，每個寶可夢的對戰數值，招式資料，與關鍵名單等資訊的顯示方式。</p>
		<select class="input" id="ranking-details">
			<option value="one-page" <?php if((isset($_SETTINGS->rankingDetails))&&($_SETTINGS->rankingDetails == "one-page")) : ?>selected<?php endif; ?>>一頁式</option>
			<option value="tabs" <?php if((isset($_SETTINGS->rankingDetails))&&($_SETTINGS->rankingDetails == "tabs")) : ?>selected<?php endif; ?>>頁籤呈現</option>
		</select>

		<h3>Hard Moveset Links</h3>
		<div class="check hard-moveset-links <?php if($_SETTINGS->hardMovesetLinks == 1) : ?>on<?php endif; ?>"><span></span> Bake move ID's into battle links</div>
		<p>This setting is for article writing purposes. When active, movesets are hard coded into the URL so battle links are preserved during future moveset updates.</p>

		<div class="save button">儲存設定</div>
	</div>
</div>

<script src="<?php echo $WEB_ROOT; ?>js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/Settings.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/ModalWindow.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/RankingMain.js?v=<?php echo $SITE_VERSION; ?>"></script>


<?php require_once 'footer.php'; ?>
