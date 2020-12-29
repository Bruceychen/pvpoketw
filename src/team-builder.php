<?php

$META_TITLE = 'Team Builder';

$META_DESCRIPTION = 'Build your team for Pokemon GO Trainer Battles. See how your Pokemon match up offensively and defensively, discover which Pokemon are the best counters to yours, and get suggestions for how to make your team better.';

$CANONICAL = '/team-builder/';

require_once 'header.php';

?>

<h1>隊伍組建模擬</h1>

<div class="section league-select-container team-content white">
	<p>可選定最多六隻寶可夢及個別指定招式，系統將會以此隊伍和指定主題賽制中的各主流優勢寶可夢逐一進行模擬對戰，以找出此團隊可能的威脅、較佳的替換寶可夢，進而找出隊伍的核心成員以及其他主流寶可夢的弱點。</p>
	<p>也可以由 <a href="<?php echo $WEB_ROOT; ?>settings/">設定頁面</a>修改分析結果的呈現方式。</p>
	<?php require 'modules/leagueselect.php'; ?>
	<?php require 'modules/cupselect.php'; ?>

	<a class="toggle" href="#">進階設定 <span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
	<div class="toggle-content team-advanced">
		<div class="flex">
			<div class="flex-section">
				<h3 class="section-title">自訂具威脅寶可夢</h3>
				<p>自行指定1到多個對此隊伍具有威脅之寶可夢清單以進行評估。</p>
                <p>注意：此處之自訂清單將會作為最後meta scorecard的項目，而不會包含、計算指定主題賽中其他非清單羅列之寶可夢的威脅程度。</p>
				<div class="team-build custom-threats">
					<?php require 'modules/pokemultiselect.php'; ?>
				</div>
			</div>
			<div class="flex-section">
			    <h3 class="section-title">自訂替補寶可夢</h3>
                <p>自行指定1到多個替補候選寶可夢清單進行評估。</p>
                <p>注意：此處之自訂清單將會作為最後meta scorecard的項目，而不會包含、計算指定主題賽中其他非清單羅列之寶可夢作為推薦替補。</p>
			    <div class="team-build custom-alternatives">
			        <?php require 'modules/pokemultiselect.php'; ?>
			    </div>
			</div>
		</div>
		<h3 class="section-title">選項設定</h3>
		<div class="flex poke">
		    <div class="team-option">
		        <h3>Scorecard 顯示長度/寶可夢數</h3>
		        <select class="scorecard-length-select">
		            <option value="10">10</option>
		            <option value="20" selected>20</option>
		            <option value="30">30</option>
		            <option value="40">40</option>
		        </select>
		    </div>
		    <div class="team-option">
		        <h3>暗影化寶可夢</h3>
		        <div class="check allow-shadows"><span></span>計算結果顯示暗影化寶可夢</div>
		    </div>
			<div class="team-option">
				<h3>XL標記寶可夢</h3>
				<div class="check allow-xl"><span></span>計算結果包含等級超過40級的寶可夢</div>
			</div>
            <div class="flex-break"></div>
            <div class="team-option">
                <h3>防護網使用策略</h3>
                <select class="shield-select">
                    <option value="average" selected>酌量使用 (0 或 1個)</option>
                    <option value="0">不使用</option>
                    <option value="1">使用 1 個防護網</option>
                    <option value="2">使用 2 個防護網</option>
                </select>
            </div>
		    <div class="team-option">
		        <h3>誘騙防護網</h3>
		        <div class="check shield-baiting on"><span></span>計算時使用低耗能特殊招式誘使對手使用防護網之戰術。</div>
		    </div>
		</div>
		<p>注意：上述進階設定，目前無法紀錄於 "分享此隊伍" 的連結(URL)中！</p>
	</div>
</div>

<div class="section team-build team poke-select-container">
	<?php require 'modules/pokemultiselect.php'; ?>
</div>

<button class="rate-btn button">進行隊伍分析</button>
<div class="section white error">請選擇至少一隻寶可夢進行分析。</div>

<?php require 'modules/ads/body-728.php'; ?>

<div class="section typings white">
    <a href="#" class="toggle active">總覽 <span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
    <div class="toggle-content article">
        <p>以下針對你的隊伍做更進一步的整體分析，以便讓訓練家們在調校隊伍時能有更全面的了解與方向。需注意到一些較獨特的戰術或組隊考量可能會導致評估分數被拉低。</p>
        <div class="overview-section coverage">
            <div class="flex">
                <h3>涵蓋度(Coverage)：對各種屬性或特定寶可夢的優勢程度。</h3>
                <div class="grade"></div>
            </div>
            <div class="notes">
                <div grade="A">此隊伍在面對指定盃賽中的頂尖meta寶可夢時有絕佳的涵蓋度，可以彈性的對應各種戰況，且隊伍本身很少甚至沒有重大的弱點與突破口。</div>
                <div grade="A">(This team has excellent coverage against top meta threats. It has few or no major vulnerabilities.)</div>
                <div grade="B">此隊伍在面對指定盃賽中大多數的meta寶可夢時有較佳的優勢，且隊伍本身僅有很少的弱點與突破口需要留意。</div>
                <div grade="B">(This team covers most top meta threats. There may be a few vulnerabilities to look out for.)</div>
                <div grade="C">此隊伍在面對部分狀況或對手特定組隊時容易落入劣勢局面，建議考量更換部分隊伍成員或是招式。</div>
                <div grade="C">(This team has coverage gaps and may be vulnerable to certain threats. Consider alternative picks or movesets to shore up your weaknesses.)</div>
                <div grade="D">此隊伍在面對部分狀況或對手特定組隊時有著極大的弱點與突破口，建議更換部分隊伍成員或替補更強勢的meta寶可夢以避免被對手壓在地上摩擦。</div>
                <div grade="D">(This team is highly vulnerable to certain threats. Consider alternative picks to avoid doubling up on weaknesses or look for Pokemon that perform well against the top meta.)</div>
                <div grade="F">此隊伍在大多數對戰狀況下均處於弱勢，建議替補更強勢的meta寶可夢以強化隊伍戰力。</div>
                <div grade="F">(This team has extremely poor coverage against multiple threats. Consider strong meta alternatives to anchor this team.)</div>
            </div>
        </div>
        <div class="overview-section bulk">
            <div class="flex">
                <h3>坦度(Bulk)：隊伍自身傷害耐受能力(防禦力、生命值)強度</h3>
                <div class="grade"></div>
            </div>
            <div class="notes">
                <div grade="A">此隊伍有著絕佳的傷害抗受能力，這將有助於減少防護網的使用壓力與克服各種艱難戰況。</div>
                <div grade="A">(This team has excellent average bulk. It will help manage shields and overcome difficult scenarios.)</div>
                <div grade="B">此隊伍有較佳的傷害抗受能力，在防護網的使用上建議可轉用給較脆弱的隊伍成員。</div>
                <div grade="B">(This team has good average bulk. Make sure to save shields for your more fragile teammates.)</div>
                <div grade="C">此隊伍具有一般程度的傷害抗受能力，你可能會面臨防護網使用取捨的狀況。建議替補具有較佳坦度的寶可夢。</div>
                <div grade="C">(This team has moderate average bulk. You may be pressured to shield more often. Consider a bulky alternative to absorb damage.)</div>
                <div grade="D">此隊伍具有低於水平程度的傷害抗受能力，你可能會更頻繁面臨防護網使用取捨的狀況及壓力。建議替補具有較佳坦度的寶可夢。</div>
                <div grade="D">(This team has low average bulk. You will be pressured to shield often. Consider bulkier alternatives to ease shield pressure.)</div>
                <div grade="F">此隊伍的傷害抗受能力極度不足，你將很難在逆風劣勢中扭轉戰局。建議替補具有較佳坦度的寶可夢以增強隊伍坦度。</div>
                <div grade="F">(This team is extremely fragile and will have a hard time climbing out of bad situations. Use bulkier Pokemon to make this team more forgiving.)</div>
            </div>
        </div>
        <div class="overview-section safety">
            <div class="flex">
                <h3>安全度(Safety)：隊伍的對戰存活率與失誤容忍度。</h3>
                <div class="grade"></div>
            </div>
            <div class="notes">
                <div grade="A">此隊伍有較佳的安全性與穩定度。其具備的彈性亦可在逆境劣勢中輕易扭轉戰況。</div>
                <div grade="A">(This team has extremely safe matchups. It's flexible and can easily pivot to regain advantage.)</div>
                <div grade="B">此隊伍在大多對戰中有良好的安全性與穩定度。在逆風劣勢開局狀況下也較有機會取回優勢或是擺脫困境。</div>
                <div grade="B">(This team has mostly safe matchups. It can work back from lost leads and has options to escape disadvantageous scenarios.)</div>
                <div grade="C">此隊伍僅在部分條件下有較佳的安全性與穩定度。這將減少你能夠使用safe switch(逆風開局替補)的機會或是形成根本無法逆轉的狀況。請考慮替補上較佳坦度或是具廣泛屬性優勢的寶可夢以增進隊伍彈性，或是以防護網為代價換取可能逆轉的機會。</div>
                <div grade="C">(This team has only somewhat safe matchups. It may have limited safe switch options or struggle without switch advantage. Consider alternatives with good bulk or coverage to provide more flexibility. Otherwise, be prepared to spend shields to line up your Pokemon in the right matchups.)</div>
                <div grade="D">此隊伍在多數對戰中之安全性與穩定性偏低。隊伍必須依靠開局順風優勢與寶可夢交換優勢來贏取勝利。建議替補有廣泛屬性優勢與涵蓋度的寶可夢成員。</div>
                <div grade="D">(This team has generally unsafe matchups. It may rely on winning the lead and maintaining switch advantage. Consider safer alternatives with broader coverage.)</div>
                <div grade="F">此隊伍不利於大多數對戰，且極度依賴開局順風優勢與寶可夢交換之後的屬性剋制優勢來取勝。請考慮替補更具有彈性的寶可夢以提高隊伍存活率。</div>
                <div grade="F">(This team has very unsafe matchups. It relies heavily on winning the lead and lining up perfect counters. Consider more flexible alternatives to make your matchups safer.)</div>
            </div>
        </div>
        <div class="overview-section consistency">
            <div class="flex">
                <h3>輸出密集度(Consistency)：短時間內輸出大量傷害或是攻擊次數的程度</h3>
                <div class="grade"></div>
            </div>
            <div class="notes">
                <div grade="A">此隊伍具備極佳的招式組合與輸出密集度，可持續性對對手輸出可觀傷害。</div>
                <div grade="A">(This team has extremely consistent movesets. It will have dependable damage output.)</div>
                <div grade="B">此隊伍具備良好的招式組合與輸出密集度，在大多數情況下不需仰賴誘騙對手防護網的手段來取得優勢。</div>
                <div grade="B">(This team has mostly consistent movesets. It won't depend on baits often.)</div>
                <div grade="C">此隊伍的部分招式輸出密集度不足，某些情況下需要誘使對手使用防護網來取得優勢。</div>
                <div grade="C">(This team has movesets with mixed consistency. You might depend on baits every now and then.)</div>
                <div grade="D">此隊伍具有較多輸出密集度低的招式，你將需要經常的誘使對手使用防護網或是透過招式的增幅能力取得優勢。建議替補具有較佳輸出密集度一般招式或特殊招式的寶可夢成員。</div>
                <div grade="D">(This team has movesets with low consistency. You'll depend on baits or stat boosts often. Consider alternatives with more consistent Fast or Charged Move damage.)</div>
                <div grade="F">此隊伍大多數的招式輸出密集度均偏低，你將需要更頻繁的誘使對手使用防護網或是高度仰賴招式的增幅能力來取得優勢。建議替補上有較佳輸出密集度一般招式或特殊招式的寶可夢成員。</div>
                <div grade="F">(This team has many movesets with poor consistency. You'll be highly dependent on landing baits or triggering stat boosts. Consider alternatives that have more dependable movesets.)</div>
            </div>
        </div>
    </div>
	<a href="#" class="toggle active">Meta Scorecard <span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
	<div class="toggle-content article">
		<p>以下呈現當前主流(meta)寶可夢與你隊伍的對戰結果。可將此分析結果印出或是截圖並搭配練習使用。此外貼心提醒：不可於比賽期間進行分析，請提前完成準備！</p>
        <p>以下圖表預設閱讀方式：左邊縱軸為主，中間欄位圖示為"勝利"時則代表 左邊縱軸寶可夢 勝 上方橫軸寶可夢。</p>
		<div class="table-container">
			<table class="meta-table rating-table" cellspacing="0">
			</table>
		</div>
		<div class="results-buttons">
			<a href="#" class="button print-scorecard">列印結果</a>
			<a href="#" class="button download-csv">匯出全部計算結果CSV檔</a>
		</div>

		<table class="rating-table legend" cellspacing="0">
			<tbody>
				<tr>
					<td><a href="#" class="rating win" target="_blank"><span></span></a></td>
					<td><b>勝利:</b> 此寶可夢在多數對戰狀況下具有壓倒性優勢。除非對手以大量能量值或是HP作為代價才有機會換取逆轉勝利。此寶可夢亦適合在逆風劣勢的狀況下替換上場，甚至能扭轉戰局。</td>
				</tr>
				<tr>
					<td><a href="#" class="rating close-win" target="_blank"><span></span></a></td>
					<td><b>險勝:</b> 此寶可夢具有部分優勢，但仍可能因HP, 能量值，誘騙防護網(騙盾)成功與否以及個體IV等因素而失去勝利契機。此寶可夢較不適合在劣勢逆風狀況下替換上場。</td>
				</tr>
				<tr>
					<td><a href="#" class="rating tie" target="_blank"><span></span></a></td>
					<td><b>平手:</b> 此寶可夢優勢與對手不相上下，且仍受HP, 能量值，誘騙防護網(騙盾)成功與否、個體IV以及特殊招式優先權(CMP,Charged Move priority)等因素影響而遭逆轉。</td>
				</tr>
				<tr>
					<td><a href="#" class="rating close-loss" target="_blank"><span></span></a></td>
					<td><b>惜敗:</b> 此寶可夢在對戰中基本居於弱勢，但仍可能因HP, 能量值，誘騙防護網(騙盾)成功與否以及個體IV等因素而逆轉勝。</td>
				</tr>
				<tr>
					<td><a href="#" class="rating loss" target="_blank"><span></span></a></td>
					<td><b>戰敗:</b> 此寶可夢在大多數對戰狀況中均為絕對弱勢，除非以大量能量值或是HP作為代價才有機會換取逆轉勝利。</td>
				</tr>
			</tbody>
		</table>
	</div>

	<a href="#" class="toggle active">具威脅寶可夢 <span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
	<div class="toggle-content article">
		<p>以下寶可夢均具有較大之威脅，亦即此隊伍之剋星。分析結果乃考量使用 0 至 1 個防護網的情境，以及各寶可夢的戰鬥能力與傷害輸出。</p>
		<div class="table-container">
			<table class="threats-table rating-table" cellspacing="0">
			</table>
		</div>
		<p class="center">此隊伍之威脅分數為 <b class="threat-score"></b></p>
		<p class="small"><strong>威脅分數</strong> 衡量的是此隊伍在面對特定寶可夢時的脆弱程度。分數越低則代表此隊伍的強度與表現越佳。衡量因素包含了隊伍中每隻寶可夢遭對手剋制的機率、對手可能的強度、對方寶可夢的排名以及其傷害輸出表現等等。</p>
	</div>

	<a href="#" class="toggle active">替補寶可夢 <span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
	<div class="toggle-content article">
		<p>以下寶可夢均適合用來替換當前隊伍成員，以增加面對上表威脅時的優勢。分析結果乃考量使用 0 至 1 個防護網的情境，以及各寶可夢的戰鬥能力與傷害輸出。可參照上方進階功能的隊伍涵蓋度分析，以進一步針對可能的威脅做出應對。</p>
		<div class="table-container">
			<table class="alternatives-table rating-table" cellspacing="0">
			</table>
		</div>
	</div>

	<a href="#" class="toggle active">Battle Histograms <span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
	<div class="toggle-content">
		<p>以下圖表顯示個別寶可夢在與其他賽制內寶可夢對戰時的優劣勢。評比分數(Battle Rating) 低於500以下為戰敗，高於500則是勝利。你可以嘗試搭配不同寶可夢成員、不同招式組以及不同個體狀態來找出較佳的隊伍。</p>
		<div class="histograms">
			<div class="histogram"></div>
			<div class="histogram"></div>
			<div class="histogram"></div>
			<div class="histogram"></div>
			<div class="histogram"></div>
			<div class="histogram"></div>
		</div>
	</div>

 	<a href="#" class="toggle active">各屬性防禦分析<span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
	<div class="toggle-content">
		<div class="summary defense-summary"></div>
		<div class="defense"></div>
	</div>

	<a href="#" class="toggle active">招式屬性攻擊分析<span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
	<div class="toggle-content">
		<div class="summary offense-summary"></div>
		<div class="offense"></div>
	</div>

	<div class="share-link-container">
		<p>分享此隊伍:</p>
		<div class="share-link">
			<input type="text" value="" readonly>
			<div class="copy">複製</div>
		</div>
	</div>
</div>

<div class="hide">
	<?php require 'modules/pokeselect.php'; ?>
</div>

<!--test 4-->
<script src="<?php echo $WEB_ROOT; ?>js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Pokemon.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/TeamInterface.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeMultiSelect.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/Pokebox.js?=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSelect.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/BattleHistogram.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/ModalWindow.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TimelineEvent.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TimelineAction.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/Battle.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TeamRanker.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/Main.js?v=3"></script>
<!--pvpoketw tools-->
<script src="<?php echo $WEB_ROOT; ?>js/interface/TWTools.js?v=<?php echo $SITE_VERSION; ?>"></script>

<?php require_once 'footer.php'; ?>
