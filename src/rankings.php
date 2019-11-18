<?php

$cp = '1500';
$cup = 'all';

if(isset($_GET['cp'])){
	$cp = htmlspecialchars($_GET['cp']);
}

if(isset($_GET['cup'])){
	$cup = htmlspecialchars($_GET['cup']);
}

$CANONICAL = '/rankings/' . $cup . '/' . $cp . '/overall/';

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
	case "boulder":
		$league = 'Boulder Cup';
		break;

	case "twilight":
		$league = 'Twilight Cup';
		break;

	case "tempest":
		$league = 'Tempest Cup';
		break;

	case "kingdom":
		$league = 'Kingdom Cup';
		break;

	case "nightmare":
		$league = 'Nightmare Cup';
		break;

	case "regionals-1":
		$league = 'Season 1 Regionals';
		break;

	case "championships-1":
		$league = 'Season 1 Championships';
		break;

	case "rainbow":
		$league = 'Rainbow Cup';
		break;

	case "jungle":
		$league = 'Jungle Cup';
		break;

	case "safari":
		$league = 'Safari Cup';
		break;

	case "fantasy":
		$league = 'Fantasy Cup';
		break;

	case "sinister":
		$league = 'Sinister Cup';
		break;

	case "ferocious":
		$league = 'Ferocious Cup';
		break;

    case "timeless":
        $league = 'Timeless Cup';
        break;

	case "rainbowtw":
        $league = 'Rainbow Cup Taiwan';
		break;

	case "plaguetw":
            $league = 'Plague Cup Taiwan';
    		break;
}

$META_TITLE = $league . ' PvP Rankings';

$META_DESCRIPTION = 'Explore the top Pokemon for Pokemon GO PvP in the ' . $league . '. Rankings include top moves, matchups, and counters for every Pokemon, as well as ratings for different roles.';

require_once 'header.php';

?>

<h1>寶可夢排名</h1>
<div class="section league-select-container white">
	<?php require 'modules/leagueselect.php'; ?>
	<?php require 'modules/cupselect.php'; ?>

	<div class="ranking-categories">
    		<a class="selected" href="#" data="overall">總體評估(Overall)</a>
    		<a href="#" data="leads">先鋒(Leads)</a>
    		<a href="#" data="closers">終結者(Closers)</a>
    		<a href="#" data="attackers">攻擊手(Attackers)</a>
    		<a href="#" data="defenders">盾兵(Defenders)</a>
    	</div>

	<div class="clear"></div>

	<p class="description overall"><b>在面對強大對手時能夠擔任多種定位的寶可夢。</b>在各種狀況中皆能有較佳戰果，且自身屬性、招式以及個體數值皆較為突出的寶可夢。</p>
    <p class="description overall"><b>(The best Pokemon against top opponents in multiple roles.</b> They have the typing, moves, and stats to succeed against the top Pokemon in multiple scenarios.)</p>

	<p class="description closers hide"><b>對戰中不需使用防禦網就能有優秀表現的寶可夢。</b>擁有優秀的屬性、個體數值以及強勢的招式使這類寶可夢無往不利。</p>
	<p class="description closers hide"><b>(The best Pokemon with no shields in play.</b> Good typing, stats, and efficient moves give them the advantage.)</p>

	<p class="description leads hide"><b>搭配使用防禦網就能有絕佳表現的寶可夢。</b>能夠給對手造成壓力並且能夠提供較佳的掩護與抵抗能力，適合作為對戰隊伍先發。</p>
	<p class="description leads hide"><b>(The best Pokemon with shields in play.</b> Capable of pressuring the opponent with good coverage or resistances, they're ideal leads in battle.)</p>

    <p class="description attackers hide"><b>在面對使用防禦網的對手時，即便自身不使用防禦網也能有出色戰果的寶可夢。</b>此類寶可夢有絕佳的個體、抗性以及強大的攻擊能力，能夠有效對抗具備優越防禦能力的對手。</p>
	<p class="description attackers hide"><b>(The best Pokemon against shielded opponents, while unshielded.</b> Their natural bulk, resistances, and strong attacks allow them to succeed against sturdy defenses.)</p>

	<p class="description defenders hide"><b>在面對沒有使用防禦網的對手時，只要自己使用，就能發揮優秀性能的寶可夢。</b>此類寶可夢先天具備能夠承受大量傷害的能力，在面對強大對手時更能看到勝利的機會。</p>
	<p class="description defenders hide"><b>(The best Pokemon while shielded, against unshielded opponents.</b> Able to absorb incredible damage, they can emerge victorious against top opponents.)</p>

	<p>點擊以下各寶可夢可獲得更詳細的資料。</p>

	<div class="check on limited hide"><span></span>顯示 <div class="limited-title">數量限制寶可夢</div>*</div>
	<div class="asterisk limited hide">*本賽制規定，這些受標示寶可夢在每位參賽者六隻寶可夢隊伍中，有數量上之限制。詳情請見此賽制規則。</div>

	<div class="poke-search-container">
		<input class="poke-search" context="ranking-search" type="text" placeholder="寶可夢中文名或英文屬性搜尋" />
		<a href="#" class="search-info">i</a>
	</div>


	<div class="ranking-header">寶可夢</div>
	<div class="ranking-header right">排行分數</div>

	<h2 class="loading">資料讀取中...</h2>
	<div class="rankings-container clear"></div>
</div>

<div class="section about white">

	<a class="toggle" href="#">About Rankings <span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
	<div class="toggle-content">
		<p>How do you know which Pokemon are the best for Trainer Battles? That question has countless answers, and below we'll go over how we arrived at ours, and how you can make the most of the rankings here.</p>
		<p>在訓練家對戰中，要如何知道哪隻寶可夢能有較好的表現？這個問題其實有無數的答案，以下將說明我們的看法，以及您又能從這些排名中得到什麼訊息。</p>
		<p>As we improve our simulator and ranking algorithms, please note that exact rankings may change. They aren't set-in-stone fact, but a best guess at which Pokemon might or might not be good for Trainer Battles. Ultimately we hope the rankings here are a helpful resource in their own way, and help you build toward succcess.</p>
		<p>首先你需要知道的是，隨著我們不斷的改進、修正這個網站的模擬以及排名演算法，任何的排行資料都有可能會隨著時間更新改變。但同時這些排行資料也不代表著絕對的強弱，而是一個推測，推測哪些寶可夢在PVP中能有較佳戰果的排行。終極的目標則是希望這份資料能夠協助你在PVP中無往不利。</p>
		<h2>如何解讀寶可夢排行資料</h2>
		<p>點擊任一隻寶可夢所展開的排行資料中，你可以看到在上層會有一個分數。這個分數代表的是這隻寶可夢的總體表現。分數介於0-100之間，越高則代表這隻寶可夢在當前這個主題賽/聯盟賽中的表現越好。此分數的計算方式，是將這隻寶可夢配上最常使用的招式(也可能手動指定)，並與所有其他寶可夢加上其最常使用的招式組合，實施模擬對戰後所計算出來的結果。這個分數同時也能幫你了解不同主題賽/聯盟賽之間的差異性。</p>
		<p>In the top-level rankings, you'll see a score for each Pokemon. This score is an overall performance number from 0 to 100, where 100 is the best Pokemon in that league and category. It is derived from simulating every possible matchup, with each Pokemon's most used moveset (these may be manually adjusted). Use this score to compare overall performance between Pokemon; for example, the difference between the #1 and #50 Pokemon may not be the same as the difference between the #50 and #100 Pokemon. This score also allows you to see the parity in different leagues and categories.</p>
		<p>訓練家間的PVP戰鬥存在著多種可能性與影響因素，特別是包含了防護網的使用與否。因此在排行中為了能有更全面的計算與考量，</p>
		<p>Trainer Battles feature a wide variety of scenarios, especially involving shields. In order to give a fuller picture, our overall rankings are derived from additional sets of rankings, where battles are simulated with different roles in mind. You can explore rankings for each of the following categories:</p>
		<ul>
			<li><b>Overall - </b> Derived from a Pokemon's score in all other categories. Moves are ranked based on usage in every category. Key Counters and Top Matchups, however, are taken from the Leads category.</li>
			<li><b>Leads - </b> Ranking battles simulated with 2 shields vs. 2 shields.</li>
			<li><b>Closers - </b> Ranking battles simulated with no shields vs. no shields.</li>
			<li><b>Attackers - </b> Ranking battles simulated with no shields vs. 2 shields.</li>
			<li><b>Defenders - </b> Ranking battles simulated with 2 shields vs. no shields.</li>
			<li><b>Consistency - </b> Rating of how dependent Pokemon are at baiting shields.</li>
		</ul>
		<p>Different Pokemon may succeed in different scenarios, so use these categories to help determine when a particular Pokemon would be the most valuable.</p>
		<p>Within each ranking, you'll see four separate detail sections:</p>
		<ul>
			<li><b>Fast Moves - </b> Which Fast Moves the Pokemon uses most in the league and category.</li>
			<li><b>Charged Moves - </b> Which Charged Moves the Pokemon uses most in the league and category.</li>
			<li><b>Key Matchups - </b> Which battles the Pokemon performs best in, weighed by the opponent's overall score.</li>
			<li><b>Top Counters - </b> Which opponents perform best against the Pokemon.</li>
		</ul>
		<p>Use these to see even more information about a Pokemon, which matchups it might be useful in, and what you can use to counter it.</p>
		<h2>Using the Move Rankings</h2>
		<p>Each Pokemon has a pool of Fast Moves and a pool of Charged Moves. Some moves might be better in one battle, and other moves might be better in another. For Trainer Battles, you'll want know which moves will be the best ones to have in the most matchups. You might also want to know which Pokemon are the best candidates for a second Charged Move. The move details within each Pokemon ranking can help you determine that.</p>
		<p>Each move is sorted by usage percentage—the percentage of battles where that move was used during the simulation, not just where it was selected. The distinction is that, in practice, an often selected move might be used infrequently, or conversely, an infrequently selected move might see more use in the matches where it's selected. Here are a few of examples to illustrate the difference:</p>
		<ul>
			<li>Kyogre's best Charged Move in terms of DPE (damage per energy) is Hydro Pump. However, Hydro Pump takes so long to charge and Kyogre's Fast Move, Waterfall, hits so hard that Kyogre ends up using the faster-charging move Thunder to knock out its opponents much more often than it uses Hydro Pump. In other words, there are very few Pokemon that would survive Kyogre's Thunder by the time it has Hydro Pump charged. As a result, Thunder has a higher usage percentage than Hydro Pump.</li>
			<li>On paper, Meganium's second best Charged Move is Solar Beam, and is selected in a large number of matchups. However, there are no situations in the current battle algorithm where Solar Beam is more optimal than Frenzy Plant, so it sees no usage. Alternatively, Earthquake is selected in fewer matchups but sees widespread use in the matchups where it's selected, making it a better secondary Charged Move than Solar Beam.</li>
			<li>Raticate and Alolan Raticate both know Hyper Beam and the faster but less efficient Hyper Fang. Raticate is less bulky than its Alolan counterpart, and that reflects in its move usage. It often doesn't survive long enough to use Hyper Beam, and ends up using Hyper Fang instead. Alolan Raticate, by comparison, survives to use Hyper Beam with more regular frequency, and so sees more balanced usage between Hyper Beam and Hyper Fang.</li>
		</ul>
		<p>When looking at potential moves, keep an eye out for Pokemon that have a strong tendency toward a single Fast Move and a single Charged Move. These Pokemon will have their optimal moveset in the most matchups. On the other hand, some Pokemon see more balanced usage in their Charged Moves. This is where having a second Charged Move comes into play.</p>
		<p>If you're investing in a second Charged Move, you want a pair that would be optimal in the most number of matchups. Two moves that would be used in 90% of matchups are better than two moves that would be used in 60% of matchups. You also want a move that adds the most value to those matchups. A second Charged Move that is used in 40% of matchups will give you more value than one that's used in 5% of matchups.</p>
		<p>However, not all matchups are equal. When your opponent switches in a Pokemon, it isn't just random; they're likely to send out something that's strong against you. Because of this, a Charged Move that counters your counters might be more valuable than the rankings indicate. Blastoise, for example, doesn't use Ice Beam often in simulated head-to-head matchups (premier Grass-types like Meganium and Venusaur will knock it out before it can). However, Ice Beam can still be valuable when your opponent sends out these Pokemon while Blastoise has Ice Beam near or fully charged, or if you have shields while they don't.</p>
		<p>As an exercise, select any one Pokemon in the <a href="<?php echo $WEB_ROOT; ?>team-builder/">Team Builder tool</a> and compare its battle histograms when it has one Charged Move and when it has two. If a second Charged Move improves its matchups, it might be one worth investing in.</p>
		<h2>Ranking Algorithm</h2>
		<p>Rankings are generated using the following steps:</p>
		<ol>
			<li>For each category:</li>
			<ol>
				<li>Simulate every possible matchup and assign a Battle Rating for each Pokemon.</li>
				<li>Calculate each Pokemon's average Battle Rating across all matchups.</li>
				<li>Iterate through the matchups again and weigh each individual Battle Rating by the opponent's average, calculating averages again each time. Iterate through this process multiple times. Only do this if matchups are even (same shields).</li>
				<li>Calculate a Pokemon's category score as a percentage of its average weighted Battle Rating to the #1 Pokemon.</li>
			</ol>
			<li>For each Pokemon, calculate the geometric mean of its scores in every category for the overall score.</li>
		</ol>
		<p>Battle Rating is at the core of the ranking algorithm. It tells us if a Pokemon wins in battle, and by how much. Averaging all of these tells us which Pokemon perform the best against the most other Pokemon.</p>
		<p>Comparing averages alone isn't always best, though; you aren't equally likely to face every Pokemon, and numerous weak Pokemon of a certain type could skew the results in favor of their counters. So, the algorithm iterates through every matchup again and weighs each Battle Rating by the opponent's average. Now a good Battle Rating against a powerful Pokemon has more value than a good Battle Rating against a weak one. This process is recursive; a Pokemon that has a low original average might have a better weighted average, affecting all of the Pokemon who rate well against it, so this process runs a number of times to allow the top Pokemon and those that beat them to filter upward in the rankings.</p>
		<p>The overall scores are calculated through a geometric mean (root of A x B x C) as opposed to a regular mean (quotient of A + B + C). This is because the category scores are percentages; adding these percentages doesn't produce a tangible value, so a geometric mean is more applicable. Geometric mean also favors well-rounded Pokemon over Pokemon who rank highly in one category but low in others.</p>
		<p>Each Pokemon is given its optimal moveset for every matchup. Note that this can cause Pokemon with broad movesets like Mew or Suicune with Hidden Power to rank more highly than they practically should; this is already adjusted for in the overall rankings, but may appear in the Team Builder.</p>
	</div>
</div>

<div class="sandbox-search-strings hide">
	<p>使用以下格式可以用來過濾尋找特定條件寶可夢(均不含雙引號 " ")：</p>
	<table>
		<tr>
			<td><strong>中文名稱 如：</strong></td>
			<td>"瑪力露麗"</td>
		</tr>
		<tr>
			<td><strong>英文屬性 如：</strong></td>
			<td>"water"</td>
		</tr>
		<tr>
			<td><strong>中文招式名稱 如：</strong></td>
			<td>"@雙倍奉還"</td>
		</tr>
		<tr>
			<td><strong>英文招式屬性 如：</strong></td>
			<td>"@fighting"</td>
		</tr>
		<tr>
			<td><strong>And(且)符號 如：</strong></td>
			<td>"water&amp;@fighting"</td>
		</tr>
		<tr>
			<td><strong>Or(或)符號 如：</strong></td>
			<td>"water,fighting"</td>
		</tr>
		<tr>
			<td><strong>Not(非)符號 如：</strong></td>
			<td>"!water"</td>
		</tr>
	</table>
</div>

<!--test 2-->
<script src="<?php echo $WEB_ROOT; ?>js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Pokemon.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/RankingInterface.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/ModalWindow.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSearch.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TimelineEvent.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/Battle.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/RankingMain.js?v=<?php echo $SITE_VERSION; ?>"></script>

<?php require_once 'footer.php'; ?>
