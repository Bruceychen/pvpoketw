<?php

$cp = '1500';
$cup = 'all';

if(isset($_GET['cp'])){
	$cp = htmlspecialchars($_GET['cp']);
}

if(isset($_GET['cup'])){
	$cup = htmlspecialchars($_GET['cup']);
}

$CANONICAL = '/training/analysis/' . $cup . '/' . $cp;

$league = 'Great League';

switch($cp){
	case "1500":
		$league = 'Great League';
		break;

	case "2500":
		$league = 'Ultra League';
		break;

	case "10000":
		$league = 'Master League';
		break;
}

switch($cup){

	case "premier":
		$league = 'Premier';
		break;

	case "retro":
		$league = 'Retro Cup';
		break;

	case "kanto":
		$league = 'Kanto Cup';
		break;

	case "hisui":
		$league = 'Hisui Cup';
		break;

	case "elementremix":
		$league = 'Element Cup Remix';
		break;


	case "halloween":
		$league = 'Halloween Cup';
		break;

	case "premierclassic":
		$league = 'Premier Classic';
		break;

	case "Remix":
		$league = 'Remix';
		break;

}

$META_TITLE = $league . ' Top Performers';

$META_DESCRIPTION = 'Search the top Pokemon, top movesets, and top teams teams measured from the site\'s simulated Training Battles.';

require_once '../header.php';

?>

<h1>Top Performers</h1>
<div class="section analysis-container white">

    <select class="format-select">
        <option value="1500" cup="all" level-cap="50">超級聯盟</option>
        <option value="2500" cup="all" level-cap="50">高級聯盟</option>
        <option value="10000" cup="all" level-cap="50">大師聯盟</option>
    </select>

	<div class="ranking-categories mode-select">
		<a href="<?php echo $WEB_ROOT; ?>train/">Train</a>
		<a class="selected" href="<?php echo $WEB_ROOT; ?>train/analysis/">Top Performers</a>
	</div>

	<div class="date-updated">資料最後更新</div>

	<h3>Teams</h3>

    <p>以下為各寶可夢及其搭配招式組在原版網站 PvPoke.com <a href="<?php echo $WEB_ROOT; ?>train/">AI對戰訓練</a>中所統計出之整體性能表現數據。資料採樣自使用網站的各位訓練家，以及當下對戰AI等級:菁英訓練家、冠軍訓練家的對戰數據。如果特定寶可夢或其特定招式沒有出現在清單中，代表其被使用的次數與資料還不足。</p>

	<div class="poke-search-container">
		<input class="poke-search" target="teams" type="text" placeholder="搜尋寶可夢" />
		<a href="#" class="search-info">i</a>
	</div>

	<div class="table-container">
		<table class="train-table teams" cellspacing="0">
			<thead>
				<tr>
					<td class="poke-name"><a href="#" data="lead">Team (Lead First)</a></td>
					<td class="poke-name"></td>
					<td class="poke-name"></td>
					<td></td>
					<td><a href="#" class="selected" data="team">Team Rating</a></td>
					<td><a href="#" data="usage">Usage</td>
				</tr>
				<!--Row html to clone-->
				<tr class="hide">
					<td class="poke-name">
						<div class="team-member">
							<div class="sprite-container pokemon">
								<div class="main-sprite"></div>
								<div class="secondary-sprite"></div>
							</div>
							<div class="name-container">
								<div class="name">Azumarill</div>
								<div class="moves">Bubble, Ice Beam, Hydro Pump</div>
							</div>
						</div>
					</td>
					<td class="poke-name">
						<div class="team-member">
							<div class="sprite-container pokemon">
								<div class="main-sprite"></div>
								<div class="secondary-sprite"></div>
							</div>
							<div class="name-container">
								<div class="name">Azumarill</div>
								<div class="moves">Bubble, Ice Beam, Hydro Pump</div>
							</div>
						</div>
					</td>
					<td class="poke-name">
						<div class="team-member">
							<div class="sprite-container pokemon">
								<div class="main-sprite"></div>
								<div class="secondary-sprite"></div>
							</div>
							<div class="name-container">
								<div class="name">Azumarill</div>
								<div class="moves">Bubble, Ice Beam, Hydro Pump</div>
							</div>
						</div>
					</td>
					<td class="link"><a href="#" target="_blank"></a></td>
					<td class="team-score"><div class="rating"></div></td>
					<td class="usage">1,024</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>

	<a href="#" class="button download-csv teams">Export to CSV</a>

	<p class="column-description description"><b>Team Rating - </b> Similar to the Battle Rating metric in battle simulations, the Team Rating metric is a number between 0 and 1000 that measures the quality of wins and losses depending on how much HP remains on the opposing team. An average team rating above 500 means this team wins more often. An average team rating below 500 indicates underperformance.</p>

	<p class="column-description"><b>Usage - </b> Usage by players and bots. A large sample size will yield higher confidence in the data. A <span class="low-volume">small sample size</span> may be the result of an individual player, and consequentially yield lower confidence in the data. The data is filtered by a minimum usage threshold.</p>

	<h3>Pokemon</h3>

	<p class="description">Below are the top performing individual Pokemon from PvPoke.com Training Battles. Data is sampled from both players and bots in the Elite and Champion difficulties. If a Pokemon or moveset isn't listed, it may not have a sufficient data.</p>

	<div class="poke-search-container">
		<input class="poke-search" target="performers" type="text" placeholder="Search Pokemon" />
		<a href="#" class="search-info">i</a>
	</div>

	<h2 class="loading">Loading data...</h2>

	<div class="table-container">
		<table class="train-table performers" cellspacing="0">
			<thead>
				<tr>
					<td><a href="#" data="name">Pokemon</a></td>
					<td></td>
					<td><a href="#" class="selected" data="team">Team Rating</a></td>
					<td><a href="#" data="individual">Individual<br>Rating</a></td>
					<td><a href="#" data="usage">Usage</a></td>
				</tr>
				<!--Row html to clone-->
				<tr class="hide">
					<td class="poke-name">
						<div class="sprite-container pokemon">
							<div class="main-sprite"></div>
							<div class="secondary-sprite"></div>
						</div>
						<div class="name-container">
							<div class="name">Azumarill</div>
							<div class="moves">Bubble, Ice Beam, Hydro Pump</div>
						</div>
					</td>
					<td class="link"><a href="#" target="_blank"></a></td>
					<td class="team-score"><div class="rating"></div></td>
					<td class="individual-score">129.3%</td>
					<td class="usage">1,024</td>
				</tr>
			</thead>
			<tbody>
			</tbody>
		</table>
	</div>

	<a href="#" class="button download-csv performers">Export to CSV</a>

	<p class="column-description"><b>Team Rating - </b> Similar to the Battle Rating metric in battle simulations, the Team Rating metric is a number between 0 and 1000 that measures the quality of wins and losses depending on how much HP remains on the opposing team. An average team rating above 500 means teams including that Pokemon win more often. An average team rating below 500 indicates underperformance, and that teams including that Pokemon may struggle.</p>

	<p class="column-description"><b>Individual Rating - </b> The individual rating metric measures the damage output of a Pokemon in battle. 100% equals 1 Pokemon worth of damage. This metric also includes shields drawn by the Pokemon: 1 shield is treated as 50% of a Pokemon in Great League, and 40% of a Pokemon in Ultra and Master League. Pokemon with high average individual rating have strong damage output and shield pressure. However, high individual rating doesn't always correlate to success on a team.</p>

	<p class="column-description"><b>Usage - </b> Usage by players and bots on teams of 3. A large sample size will yield higher confidence in the data. A <span class="low-volume">small sample size</span> may be the result of an individual player, and consequentially yield lower confidence in the data. The data is filtered by a minimum usage threshold.</p>

	<?php require '../modules/ads/body-728.php'; ?>


</div>

<div class="section about white">
    <a class="toggle" href="#">關於訓練分析報告<span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
    <div class="toggle-content">
        <p>此頁面提供了另一種方式分析 PvP meta，使您能夠找到更適合你的寶可夢與團隊組合。了解這些資料代表的意義更能夠幫助您找出最佳選擇。</p>
        <h2>這些分析資料的來源是？</h2>
        <p>這些資料樣本是來自國外原版網站 <a href="<?php echo $WEB_ROOT; ?>train/">AI對戰訓練</a> 中，每個網站使用者與AI對戰的組合與數據，並且每七天更新一次。（譯按：但因繁中版沒有收集使用者數據，所以不存在這樣的分析資料)。資料的分析同時包含了人類使用者與AI當下選擇的寶可夢與隊伍資料，並且盡量力求對戰過程及環境均與實際遊戲狀況一致。</p>
        <p>The data is sampled with a threshold of around 150 minimum games for Pokemon, and 20 games minimum for teams. Pokemon and teams near these thresholds are marked orange to highlight their small sample sizes. Pokemon or teams with small sample sizes are more prone to being outliers (whether overperforming or underperforming). Consider these data points with some healthy skepticism.</p>
        <h3>How does this page differ from the regular rankings?</h3>
        <p>The regular rankings are generated using 1 vs 1 simulations between eligible Pokemon. The results are empirical and repeatable, but don't take into account team composition or full dynamic play like switching or failed/successful baits. It can provide immediate results for new Pokemon or move updates.</p>
        <p>The Training Analysis data is recorded from fully played games from the Train feature. Team composition, player decisions, and dynamic play are all taken into account. It is able to provide a fuller picture than the simulated rankings. However, the data is not empirical. Performance and usage numbers are subject to the players who use the Train feature, how frequently they use particular Pokemon, and their performance with those Pokemon. Training Analysis also cannot provide immediate data for new Pokemon or move updates; a sufficient volume of battles must be recorded first.</p>
    </div>
</div>

<div class="usage-modal hide">
	<p><div class="usage-legend"></div><b class="pokemon-label"></b> usage on player and bot teams over 30 days.</p>
	<div>Compare with:
		<select class="usage-compare-select">
			<option selected disabled>Select a Pokemon</option>
		</select>
	</div>
	<div class="usage-container">
		<div class="y-axis-container">
			<div class="value">20%</div>
			<div class="label">Usage on teams</div>
			<div class="value">0%</div>
		</div>

		<div class="canvas-container">
			<canvas canvas-id="0" class="usage-chart" width="400" height="300"></canvas>
			<canvas canvas-id="1" class="usage-chart" width="400" height="300"></canvas>
		</div>

	</div>
	<div class="x-axis-container">
		<div class="value">Jan 1</div>
		<div class="label">Time</div>
		<div class="value">Jan 30</div>
	</div>

</div>

<?php require_once '../modules/search-string-help.php'; ?>

<?php require_once '../modules/scripts/battle-scripts.php'; ?>

<script src="<?php echo $WEB_ROOT; ?>js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Pokemon.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/TrainRankingInterface.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSearch.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/ModalWindow.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/RankingMain.js?v=<?php echo $SITE_VERSION; ?>"></script>
<!--pvpoketw tools-->
<script src="<?php echo $WEB_ROOT; ?>js/interface/TWTools.js?v=<?php echo $SITE_VERSION; ?>"></script>
<?php require_once '../footer.php'; ?>
