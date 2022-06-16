<?php require_once 'header.php'; ?>

<div class="section home white">

	<p>歡迎來到 PvPokeTW.com! 這是一個基於 <a href="pvpoke.com">pvpoke.com</a> 的非官方繁中翻譯版，針對 Pokemon GO PVP(玩家間對戰) 的開源平台。</p>

	<a href="<?php echo $WEB_ROOT; ?>battle/" class="button">
		<h2 class="icon-battle">戰鬥模擬計算</h2>
		<p>指定兩隻或多隻寶可夢進行模擬戰鬥並計算各種數據</p>
	</a>
	<a href="<?php echo $WEB_ROOT; ?>train/" class="button">
		<h2 class="icon-train">AI對戰訓練</h2>
		<p>與AI進行模擬真實狀況的即時戰鬥訓練</p>
	</a>
	<a href="<?php echo $WEB_ROOT; ?>rankings/" class="button">
		<h2 class="icon-rankings">寶可夢排名</h2>
		<p>各聯盟、主題賽中所有寶可夢的招式與戰鬥能力排行</p>
	</a>
	<a href="<?php echo $WEB_ROOT; ?>team-builder/" class="button">
		<h2 class="icon-team">隊伍組建模擬</h2>
		<p>組建隊伍，並且找出屬性優劣勢與潛在威脅</p>
	</a>
	<a href="<?php echo $WEB_ROOT; ?>contribute/" class="button">
		<h2 class="icon-contribute">貢獻一己之力</h2>
		<p>網站原始程式碼位置以及贊助原作者(非譯者)</p>
	</a>

	<?php require 'modules/ads/body-728.php'; ?>

	<?php if($_SETTINGS->ads == 1) : ?>
		<span data-ccpa-link="1"></span>
	<?php endif; ?>

	<!--Update section for updates-->
	<h3>更新內容</h3>

	<h4>v1.28.4 (June 11, 2022)</h4>
	<ul>
		<li>Tab title and icon updates:</li>
		<ul>
			<li>Multi-Battle and Matrix Battle tabs are now labeled in the page title</li>
			<li>Team Builder tabs list Pokemon names in the page title</li>
			<li>Added new favicons to help distinguish between Ranking, Multi-Battle, Matrix Battle, and Team Builder pages.</li>
		</ul>
		<li>Team Builder fixes/updates:</li>
		<ul>
			<li>Fixed an issue in the Team Builder where custom threats would revert to their default movesets.</li>
			<li>Shadow Pokemon in custom threats and alternatives lists will automatically appear in the results without needing to manually enable the Shadow Pokemon setting.</li>
		</ul>
		<li>Custom Rankings fixes:</li>
		<ul>
			<li>Fixed the "Import League or Cup" dropdown to import cup settings. This dropdown currently has duplicate entries and is missing recent cups - stay tuned for more updates.</li>
			<li>An issue where the Custom Rankings buttons would sometimes do nothing should be resolved.</li>
		</ul>
		<li>Fixed the "Copy" button for importing and exporting custom groups.</li>
		<li>Fixed an issue where battles with multiple custom added moves didn't generate links correctly.</li>
		<li>Fixed the Moves page search after sorting the table, and searching now allows for spaces between a list of move types or names.</li>
		<li>Normal Pokemon will have Frustration automatically added or removed from their movepools when changing the Pokemon Form setting.</li>
	</ul>

	<h3>Latest Article</h3>

	<div class="article-item flex">
		<div class="col-3">
			<a href="<?php echo $WEB_ROOT; ?>articles/infographics/22-06-season-11-master-league-starter-pack/">
				<img src="<?php echo $WEB_HOST_ORIGN; ?>articles/article-assets/infographics/22-06-season-11-master-league-starter-pack/thumb.jpg">
			</a>
		</div>
		<div class="col-9">
			<h4><a href="<?php echo $WEB_ROOT; ?>articles/infographics/22-06-season-11-master-league-starter-pack/">Master League Starter Pack for Season 11</a></h4>
			<div class="date">June 14, 2022</div>
			<p>Check out the best legendary and non-legendary Pokemon to get started in Master League for GO Battle League Season 11!</p>
			<div class="tags"><a href="<?php echo $WEB_ROOT; ?>articles?tag=Infographic"># Infographic</a><a href="<?php echo $WEB_ROOT; ?>articles?tag=Starter Pack"># Starter Pack</a></div>
		</div>
	</div>


    <p>追蹤原作者 <a href="https://twitter.com/pvpoke" target="_blank">推特</a> 以獲得第一手消息及更新快訊！</p>
    <p>追蹤中文版 <a href="https://twitter.com/tw_pvpokesite" target="_blank">推特</a> 以獲得即時更新快訊！也可以回饋反映意見問題給管理員喔！</p>


    <h3>中文版譯者聲明</h3>

    <p>華文地區的訓練家們，歡迎！</p>

    <p>本站為非官方翻譯版 <a hre="pvpoke.com">pvpoke.com</a>，並已獲得原作者的授權許可，作為在官方未完成i18n之前，一個專屬華文地區pvp社群的暫時網站。</p>
    <p>在內容上，我僅針對招式、寶可夢的名稱以及部分功能介面進行翻譯，其他的部分如演算法、網站架構等則尊重原作者不進行更動。</p>
    <p>資料與版本更新則追隨原作者github上的repository。更新時間差會盡量維持在24小時內。中文版網站也同樣開放原始碼在github上。</p>

    <p>雖然原網站是採用MIT License，但基於對原作者的敬意，本繁中版網站將不會掛載任何廣告、不收集任何使用者個資，也不會收受任何費用。</p>
    <p>若你希望提供實質上的資助，我會建議您轉贊助給原作者<a href="http://patreon.com/user?u=16528512">(Patreon)</a>或是你所在地區的當地寶可夢pvp社群！</p>
    <p>最後，祝各位訓練家PVP技術都能越來越強！</p>

    <p>Brucey</p>
    <br>
    <h3>Disclaimer</h3>

    <p>This is non-official, translated version of <a href="pvpoke.com">pvpoke.com</a>, with permission from original creator.</p>
    <p>This translated website also follows MIT License, but will NOT used for any commercial behavior.</p>
    <p>Any financial support or donate please refer to original creator's <a href="http://patreon.com/user?u=16528512">Patreon</a>

    <p>Brucey</p>
    <h3>最後更新時間</h3>
            <ul>
                <li>中文版最後更新時間：Thu Jun 16 13:25:28 2022 +0800</li>
                <li>原版最後版本時間：Wed Jun 15 15:21:43 2022 -0500</li>
            </ul>
</div>

<?php require_once 'footer.php'; ?>
