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

	<!--Update section for updates-->
	<h3>What's New</h3>

	<h4>v1.14.18 (May 8, 2020)</h4>
	<ul>
		<li>Added back Season 2 Silph rankings for the Battle of the Servers tournament. Note that these rankings don't include the upcoming move updates, and will be removed after the tournament begins.</li>
		<li>Updated and fixed some sim logic:</li>
		<ul>
			<li>Fixed an issue where Pokemon building up to two self-debuffing moves wouldn't throw a move before fainting.</li>
			<li>Pokemon now reach for a bigger move if it would KO rather than defaulting to the highest DPE move. This should improve some situations where the highest DPE move wasn't always the optimal play. This behavior is only active when baiting is turned on.</li>
		</ul>
	</ul>

	<h4>v1.14.16 (May 2, 2020)</h4>
	<ul>
		<li>Move balance changes have been rolled back until the delayed Season 2 start</li>
		<li>Note that the Premier Cup rankings use the current (old) move stats and will change once they're reimplemented.</li>
		<li>Updated versions of Moonblast, Wild Charge, and Drill Run are available to add as custom moves.</li>
	</ul>

	<h3>Latest Article</h3>

	<div class="article-item flex">
		<div class="col-3">
			<a href="<?php echo $WEB_ROOT; ?>articles/best-elite-tm-candidates-pvp/">
				<img src="<?php echo $WEB_ROOT; ?>assets/articles/elite-tm-thumb.jpg" />
			</a>
		</div>
		<div class="col-9">
			<h4><a href="<?php echo $WEB_ROOT; ?>articles/best-elite-tm-candidates-pvp/">Best Elite TM Candidates for PvP</a></h4>
			<div class="date">April 28, 2020</div>
			<p>Elite TM's are now available! Which exclusive moves and Pokemon are the best for your PvP team?</p>
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
    <!--
    <p>若有任何建議、網站資料錯誤回報，歡迎至本站 <a href="https://twitter.com/pvpoketw" target="_blank">推特</a> 留言！</p>
    -->
    <p>最後，祝各位訓練家PVP技術都能越來越強！</p>

    <p>Brucey</p>
    <br>
    <h3>Disclaimer</h3>

    <p>This is non-official, translated version of <a href="pvpoke.com">pvpoke.com</a>, with permission from original creator.</p>
    <p>This translated website also follows MIT License, but will NOT used for any commercial behavior.</p>
    <p>Any financial support or donate please refer to original creator's <a href="http://patreon.com/user?u=16528512">Patreon</a>

    <p>Brucey</p>
    <h3>最後更新時間<h3>
            <ul>
                <li>中文版最後更新時間：Sat May 9 16:16:17 2020 +0800</li>
                <li>原版最後版本時間：Fri May 8 16:32:18 2020 -0500</li>

            </ul>
</div>

<?php require_once 'footer.php'; ?>
