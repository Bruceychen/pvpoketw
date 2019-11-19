<?php require_once 'header.php'; ?>

<div class="section home white">
	<p>歡迎來到 PvPokeTW.com! 這是一個基於 <a href="pvpoke.com">pvpoke.com</a> 的中文翻譯版網站，並且繼承原版精神，為一個針對 Pokemon GO PVP(玩家間對戰) 的開源平台！</p>

	<a href="<?php echo $WEB_ROOT; ?>battle/" class="button">
		<h2 class="icon-battle">戰鬥模擬計算</h2>
		<p>指定兩隻寶可夢進行模擬戰鬥並計算各種數據</p>
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
	<h3>更新紀錄</h3>

    <h4>v1.12.7 (November 12th, 2019)</h4>
    <ul>
        <li>Revamped the <a href="<?php echo $WEB_ROOT; ?>team-builder/">Team Builder</a> tool with new and updated features:</li>
        <ul>
            <li>Enter up to 6 Pokemon or use a custom group</li>
            <li>A "Meta Scorecard" matrix shows how top Pokemon match up against your team. You can print this as a study reference!</li>
            <li>Export your team's matchups against the entire league or cup to a spreadsheet.</li>
            <li>Updated the "Potential Threats" and "Potential Alternatives" sections with matrices that highlight matchups against individual Pokemon on your team, including a "threat score" that rates how vulnerable your team is to prevalent Pokemon.</li>
            <ul>
                <li>The math for calculating potential threats and alternatives has been tweaked to show Pokemon that beat or have soft matchups against the most targets. (Previously, this was a simple average which skewed toward Pokemon with hard wins.)</li>
            </ul>
        </ul>
        <li>New "Matrix Battle" mode generates mass battle results between two groups of Pokemon. Export the results to a spreadsheet!</li>
        <li>You can now apply IV spreads to an entire group in Multi-Battle and Matrix Battle (default, max stat product, etc.). Note that these results may take a little time to generate.</li>
        <li>Custom groups have been reworked to save to local app storage instead of cookies:</li>
        <ul>
            <li>Custom group limit increased from 50 Pokemon to 100.</li>
            <li>This change resolves an issue where too many custom groups could make the site inaccessible.</li>
            <li>When you visit the site for the first time after the update, your custom group data should automatically migrate from cookies to local storage. If you don't see your custom groups, don't worry, your data is still there! Ping me on <a href="https://twitter.com/pvpoke" target="_blank">Twitter</a> and I can help you recover your groups.</li>
        </ul>
        <li>Pokemon no longer select movesets through the "auto-select" algorithm and default to their recommended moveset from the rankings, when available:</li>
        <ul>
            <li>Multi-Battle and Team Builder tools now  use the same movesets every time. (Previously, Pokemon auto-selected movesets for each matchup, producing erroneous results.)</li>
            <li>Hopefully this saves you a few clicks when selecting new Pokemon!</li>
        </ul>
    </ul>

	<p>追蹤原作者 <a href="https://twitter.com/pvpoke" target="_blank">推特</a> 以獲得第一手消息及更新快訊！</p>

	<h3>Latest Article</h3>

	<div class="article-item flex">
		<div class="col-3">
			<a href="<?php echo $WEB_ROOT; ?>articles/cliffhanger-team-building/">
				<img src="<?php echo $WEB_ROOT; ?>assets/articles/cliffhanger-thumb.jpg" />
			</a>
		</div>
		<div class="col-9">
			<h4><a href="<?php echo $WEB_ROOT; ?>articles/cliffhanger-team-building/">Team Building for GO Stadium Cliffhanger</a></h4>
			<div class="date"> September 7, 2019</div>
			<p>GO Stadium has introduced an exciting new format called Cliffhanger! Learn how to spend your points and build your Cliffhanger team from the ground up.</p>
		</div>
	</div>

	<h3>中文版譯者聲明</h3>

	<p>華文地區的訓練家們，歡迎！</p>

<p>這個網除站主要是翻譯自http://pvpoke.com，並已獲得原作者的授權。</p>
<p>在內容上，我僅針對招式、寶可夢的名稱以及部分功能介面進行翻譯，其他的部分如演算法、架構等則尊重原作者不進行更動。</p>

<p>不過也因為有中英文轉換問題，加上php不是我的專業(Orz)，部分功能目前還是需要改善除錯。如果你有發現相關問題，哪邊翻譯的很爛(汗)，或者哪邊也需要翻譯，又或者你也想出一份力協助中文網站的維護，歡迎與我聯絡。</p>

<p>最後，祝各位訓練家PVP技術都能越來越強！我們石英高原見！</p>

<p>Brucey</p>
<br>
<h3>更新時間<h3>
<ul>
	<li>中文版最後更新時間：Tue Nov 19 10:57:15 2019 +0800</li>
	<li>原版最後版本時間：Mon Nov 18 14:51:12 2019 -0600</li>

</ul>
</div>

<?php require_once 'footer.php'; ?>
