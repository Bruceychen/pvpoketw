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

	case "10000-40":
		$league = 'Master League Classic';
		break;
}

switch($cup){

	case "premier":
		$league = 'Premier';
		break;

	case "premierclassic":
		$league = 'Premier Classic';
		break;

	case "classic":
		$league = 'Master League Classic';
		break;

	case "holiday":
		$league = 'Holiday Cup';
		break;

	case "littlejungle":
		$league = 'Little Jungle Cup';
		break;

	case "sinnoh":
		$league = 'Sinnoh Cup';
		break;

	case "love":
		$league = 'Love Cup';
		break;

	case "goteamup":
		$league = 'GO Stadium GOTeamUp';
		break;

	case "fusionfactions":
		$league = 'Silph Fusion Cup';
		break;

	case "factions":
		$league = 'Silph Factions Rankings';
		break;

	case "obsidian":
		$league = 'Silph Obsidian Cup';
		break;

	case "nemesis":
		$league = 'Silph Nemesis Cup';
		break;

	case "floatingcity":
		$league = 'Silph Factions Rankings';
		break;

	case "dungeon":
		$league = 'Silph Factions Rankings';
		break;

	case "cometultra":
		$league = 'Silph Factions Rankings';
		break;

	case "remix":
		$league = $league . ' Remix';
		break;

}

$META_TITLE = $league . ' PvP Rankings';

$META_DESCRIPTION = 'Explore the top Pokemon for Pokemon GO PvP in the ' . $league . '. Rankings include top moves, matchups, and counters for every Pokemon, as well as ratings for different roles.';

if(isset($_GET['p'])){
	// Put Pokemon names in the meta title

	$name = ucwords(str_replace('_',' ', explode('-', htmlspecialchars($_GET['p']))[0]));

	$META_TITLE = $name . ' ' . $league . ' PvP Rankings';

	$META_DESCRIPTION = 'Explore key matchups, moves, and counters for ' . $name . ' in ' . $league . '.';

	$CANONICAL = '/rankings/' . $cup . '/' . $cp . '/overall/' . htmlspecialchars($_GET['p']) . '/';
}

require_once 'header.php';

?>

<h1>寶可夢排名</h1>
<div class="section league-select-container white">
	<?php require 'modules/formatselect.php'; ?>

	<div class="ranking-categories">
		<a class="selected" href="#" data="overall" scenario="leads">Overall</a>
		<a href="#" data="leads" scenario="leads">Leads</a>
		<a href="#" data="closers" scenario="closers">Closers</a>
		<a href="#" data="switches" scenario="switches">Switches</a>
		<a href="#" data="chargers" scenario="chargers">Chargers</a>
		<a href="#" data="attackers" scenario="attackers">Attackers</a>
		<a href="#" data="consistency" scenario="leads">Consistency</a>
	</div>

	<div class="clear"></div>

	<p class="description overall"><b>Overall: 納入各種定位考量，整體表現最佳的寶可夢。</b>在各種狀況中皆能有較佳戰果，且自身屬性、招式以及個體數值皆較為突出的寶可夢。</p>
<!--	<p class="description overall"><b>(The best Pokemon overall across multiple roles.</b> They have the typing, moves, and stats to succeed as top contenders.)</p>-->

	<p class="description closers hide"><b>Closers: 對戰中不需使用防禦網就能有優秀表現的寶可夢。</b>擁有夠坦的體質或是較高傷害輸出的招式，使這類寶可夢往往能夠影響對戰結果。</p>
<!--	<p class="description closers hide"><b>The best Pokemon with no shields in play.</b> Bulk or hard-hitting moves allow them to close out matchups.</p>-->

	<p class="description leads hide"><b>Leads: 搭配使用防禦網就能有絕佳表現的寶可夢。</b>能夠給對手造成壓力或是具備長時間對戰優勢的寶可夢。適合作為對戰隊伍先發。</p>
<!--	<p class="description leads hide"><b>The best Pokemon with shields in play.</b> Capable of applying pressure or winning extended fights, they're ideal leads in battle.</p>-->

    <p class="description attackers hide"><b>Attackers: 在面對使用防禦網的對手時，即便自身不使用防禦網也能有出色戰果的寶可夢。</b>此類寶可夢有較佳的個體、抗性以及強大的攻擊能力，能夠針對對手的弱點強力突穿。</p>
<!--	<p class="description attackers hide"><b>The best Pokemon against shielded opponents, while unshielded.</b> Their natural bulk, resistances, and strong attacks allow them to power through a disadvantage.</p>-->

    <p class="description switches hide"><b>Switches: 在面對開局先發弱勢(逆風或屬性遭剋制)的情況下，適合交換上場的寶可夢。</b>此類寶可夢除了可減少開局弱勢的情況之外，在被擊倒前仍能迫使對手使用防護網，或是提供可觀的傷害輸出。</p>
<!--	<p class="description switches hide"><b>The best Pokemon to switch to from an unfavorable lead.</b> These Pokemon have safe matchups and can pressure shields or deal heavy damage even in their losses.</p>-->

    <p class="description chargers hide"><b>Chargers: 擁有低能量需求優勢的寶可夢。</b>能量蓄積速度快，或是招式能量需求低且威力大的寶可夢類型。此類寶可夢只要有能量蓄積時，他們將變得非常有威脅性。</p>
<!--	<p class="description chargers hide"><b>The best Pokemon with an energy advantage.</b> Fast energy gain or powerful moves make them dangerous after building up energy.</p>-->

    <p class="description consistency hide"><b>Consistency: 對戰表現較穩定的寶可夢。</b>此類寶可夢可提供持續性的傷害。相較於其他寶可夢，不需誘使對手使用防護網亦能有穩定的傷害輸出。</p>
<!--	<p class="description consistency hide"><b>These Pokemon perform the most dependably.</b> They provide consistent damage and rely less on baiting shields than other Pokemon.</p>-->

	<p class="description link hide"><b>主題/賽制資訊：</b> <a href="#" target="_blank"></a></p>

    <p>現在起你可以提供您在天梯遇到的對手資訊，以精進本站(原版網站)對於各寶可夢的使用比例及排名精準度：<a href="https://gobattlelog.com/pvpoke" target="_blank">gobattlelog.com</a>.</p>
    <p>譯者說明請見<a href="https://twitter.com/tw_pvpokeSite">推特</a>或是<a href="https://www.facebook.com/pvpoketw/">臉書粉絲頁</a></p>

	<p>點擊以下各寶可夢可獲得更詳細的資料。</p>

    <div class="ranking-checks flex">
        <div class="check <?php if($_SETTINGS->xls): echo "on"; endif; ?> xl" style="margin-bottom:15px;"><span></span>排名包含XL寶可夢</div>

        <div class="check move-counts" style="margin-bottom:15px;"><span></span>顯示一般招式使用次數</div>
    </div>

	<div class="check on limited hide"><span></span>顯示 <div class="limited-title">數量限制寶可夢</div>*</div>
	<div class="asterisk limited hide">*本賽制規定，這些受標示寶可夢在每位參賽者六隻寶可夢隊伍中，有數量上之限制。詳情請見此賽制規則。</div>

    <p class="limited hide">可輸入以下單字以搜尋特定遊戲內區域或世代的寶可夢："kanto", "johto"...等，或 "gen1", "gen2"... 等。</p>
    <p class="limited hide">詳情請點選 搜尋格後方的驚嘆號。</p>

	<div class="continentals hide">
		<div class="flex">
            <div class="check" value="1"><span></span>Slot 1</div>
            <div class="check" value="2"><span></span>Slot 2</div>
            <div class="check" value="3"><span></span>Slot 3</div>
            <div class="check" value="4"><span></span>Slot 4</div>
            <div class="check" value="5"><span></span>Slot 5</div>
            <div class="check" value="6"><span></span>Slot 6</div>
		</div>
	</div>

	<div class="poke-search-container">
		<input class="poke-search" context="ranking-search" type="text" placeholder="寶可夢中文名或英文屬性搜尋" />
		<a href="#" class="search-info" title="Search Help">?</a>
		<a href="#" class="search-traits" title="搜尋對戰特質">+</a>
	</div>


	<div class="ranking-header">寶可夢</div>
	<div class="ranking-header right">排行分數</div>

	<h2 class="loading">資料讀取中...</h2>
	<div class="rankings-container clear"></div>
</div>

<a href="#" class="button download-csv">匯出成CSV檔</a>

<?php require 'modules/ads/body-728.php'; ?>

<div class="section about white">
	<a class="toggle" href="#">About Rankings <span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
	<div class="toggle-content">
		<p>How do you know which Pokemon are the best for Trainer Battles? That question has countless answers, and below we'll go over how we arrived at ours, and how you can make the most of the rankings here.</p>
		<p>As we improve our simulator and ranking algorithms, please note that exact rankings may change. They aren't set-in-stone fact, but a best guess at which Pokemon might or might not be good for Trainer Battles. Ultimately we hope the rankings here are a helpful resource in their own way, and help you build toward succcess.</p>
		<h2>Using the Pokemon Rankings</h2>
		<p>In the top-level rankings, you'll see a score for each Pokemon. This score is an overall performance number from 0 to 100, where 100 is the best Pokemon in that league and category. It is derived from simulating every possible matchup, with each Pokemon's most used moveset (these may be manually adjusted). Use this score to compare overall performance between Pokemon; for example, the difference between the #1 and #50 Pokemon may not be the same as the difference between the #50 and #100 Pokemon. This score also allows you to see the parity in different leagues and categories.</p>
		<p>Trainer Battles feature a wide variety of scenarios, especially involving shields. In order to give a fuller picture, our overall rankings are derived from additional sets of rankings, where battles are simulated with different roles in mind. You can explore rankings for each of the following categories:</p>
		<ul>
			<li><b>Overall - </b> Derived from a Pokemon's score in all other categories. Moves are ranked based on calculations across all opponents. Key Counters and Top Matchups, however, are taken from the Leads category.</li>
			<li><b>Leads - </b> Ranking battles simulated with 2 shields vs. 2 shields.</li>
			<li><b>Closers - </b> Ranking battles simulated with no shields vs. no shields.</li>
			<li><b>Switches - </b> Ranking battles simulated with 6 turns of energy advantage and scored to favor safe matches.</li>
			<li><b>Chargers - </b> Ranking battles simulated with 6 turns of energy advantage.</li>
			<li><b>Attackers - </b> Ranking battles simulated with no shields vs. 2 shields.</li>
			<li><b>Consistency - </b> Rating of how dependent Pokemon are at baiting shields.</li>
		</ul>
		<p>Different Pokemon may succeed in different scenarios, so use these categories to help determine when a particular Pokemon would be the most valuable.</p>
		<p>Within each ranking, you'll see four separate detail sections:</p>
		<ul>
			<li><b>Fast Moves - </b> Which Fast Moves the Pokemon uses most in the league and category.</li>
			<li><b>Charged Moves - </b> Which Charged Moves the Pokemon uses most in the league and category.</li>
			<li><b>Key Wins - </b> Which battles the Pokemon performs best in, weighed by the opponent's overall score.</li>
			<li><b>Key Counters - </b> Which significant opponents perform best against the Pokemon.</li>
		</ul>
		<p>Use these to see even more information about a Pokemon, which matchups it might be useful in, and what you can use to counter it.</p>
		<h2>Using the Move Rankings</h2>
		<p>Each Pokemon has a pool of Fast Moves and a pool of Charged Moves. Some moves might be better in one battle, and other moves might be better in another. For Trainer Battles, you'll want know which moves will be the best ones to have in the most matchups. You might also want to know which Pokemon are the best candidates for a second Charged Move. The move details within each Pokemon ranking can help you determine that.</p>
		<p>Moves are ranked using calculations primarily based on their damage and energy cost. Stat changes are also factored in. These calculations are run for each matchup, and then totaled across the format. Matchup weighting affects these numbers as well, so moves that would be used against significant meta targets will rank higher.</p>
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

<?php require_once 'modules/search-string-help.php'; ?>

<div class="search-traits-selector hide">
    <p>Select the options below to search for Pokemon traits and playstyles.</p>

    <div class="traits"></div>

    <div class="center flex">
        <div class="button search">Search</div>
    </div>
</div>


<?php require_once 'modules/rankingdetails.php'; ?>

<!--test 2-->
<script src="<?php echo $WEB_ROOT; ?>js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Pokemon.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/RankingInterface.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/ModalWindow.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSearch.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TimelineEvent.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/Battle.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/RankingMain.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/libs/hexagon-chart.js?v=<?php echo $SITE_VERSION; ?>"></script>
<!--pvpoketw tools-->
<script src="<?php echo $WEB_ROOT; ?>js/interface/TWTools.js?v=<?php echo $SITE_VERSION; ?>"></script>

<?php require_once 'footer.php'; ?>
