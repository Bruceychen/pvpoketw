<?php

$CANONICAL = '/moves/';

$META_TITLE = 'PvP Moves';

if(isset($_GET['mode'])){
	if($_GET['mode'] == 'fast'){
		$META_TITLE = 'PvP Fast Moves';
	} else if($_GET['mode'] == 'charged'){
		$META_TITLE = 'PvP Charged Moves';
	}
}

$META_DESCRIPTION = 'Explore moves and movsets in Pokemon GO PvP.';

require_once 'header.php';

?>

<h1>招式</h1>
<div class="section moves white">
	<select class="mode-select">
		<option value="fast">一般招式(Fast Moves)</option>
		<option value="charged">特殊招式(Charged Moves)</option>
		<option value="explore">招式閱覽(Moveset Explorer)</option>
	</select>
	<p>可排序或篩選招式，或是自訂招式組合進行傷害測試。</p>

	<h2 class="loading">資料讀取中</h2>
	<div class="move-table-container fast charged">
		<table class="stats-table" cellpadding="0" cellspacing="0">
			<tr>
				<td class="label">D</td>
				<td>傷害</td>
			</tr>
			<tr>
				<td class="label">E</td>
				<td>需求能量</td>
			</tr>
			<tr class="fast">
				<td class="label">T</td>
				<td>施展使用回合</td>
			</tr>
			<tr class="fast">
				<td class="label">DPT</td>
				<td>每回合傷害(Damage Per Turn)</td>
			</tr>
			<tr class="fast">
				<td class="label">EPT</td>
				<td>每回合平均蓄能(Energy Per Turn)</td>
			</tr>
			<tr class="hide"></tr>
			<tr class="charged hide">
				<td class="label">DPE</td>
				<td>單位能量傷害(Damage Per Energy)</td>
			</tr>
		</table>
		<input class="poke-search" context="move-search" type="text" placeholder="Search Move or Type" />
		<table class="sortable-table stats-table moves" cellpadding="0" cellspacing="0"></table>
	</div>

	<div class="move-explore-container explore hide">
		<div class="move-select-container flex">
			<div class="move-select-item" >
				<input class="poke-search" context="move-search" type="text" placeholder="Search move"/>
				<select class="move-select fast">
					<option selected disabled value="">請選擇一般招式</option>
				</select>
				<h3>傷害選項</h3>
				<select class="effectiveness-select fast">
					<option selected value=".244140625">三倍抗屬減傷 (x0.24)</option>
					<option selected value=".390625">雙倍抗屬減傷 (x0.39)</option>
					<option selected value=".625">抗屬減傷 (x0.625)</option>
					<option selected value="1">效果一般 (x1)</option>
					<option value="1.6">效果絕佳 (x1.6)</option>
					<option value="2.56">雙倍效果絕佳 (x2.56)</option>
				</select>
				<div class="stab fast check on"><span></span>屬性一致傷害加成</div>
			</div>
			<div class="move-select-item">
				<input class="poke-search" context="move-search" type="text" placeholder="Search move" />
				<select class="move-select charged">
					<option selected disabled value="">請選擇特殊招式</option>
				</select>
				<h3>傷害選項</h3>
				<select class="effectiveness-select charged">
					<option selected value=".244140625">三倍抗屬減傷 (x0.24)</option>
					<option selected value=".390625">雙倍抗屬減傷 (x0.39)</option>
					<option selected value=".625">抗屬減傷 (x0.625)</option>
					<option selected value="1">效果一般 (x1)</option>
					<option value="1.6">效果絕佳 (x1.6)</option>
					<option value="2.56">雙倍效果絕佳 (x2.56)</option>
				</select>
				<div class="stab charged check on"><span></span>屬性一致傷害加成</div>
			</div>
		</div>

		<div class="explore-results hide">
			<div class="moveset-stats flex"></div>
			<h2>可學會這些招式的寶可夢：</h2>
			<div>* 為絕版招式</div>
			<div class="rankings-container clear"></div>
		</div>

	</div>
</div>


<!--test 2-->
<script src="<?php echo $WEB_ROOT; ?>js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Pokemon.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/SortableTable.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/MovesInterface.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TimelineEvent.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/Battle.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/RankingMain.js?v=<?php echo $SITE_VERSION; ?>"></script>
<!--pvpoketw tools-->
<script src="<?php echo $WEB_ROOT; ?>js/interface/TWTools.js?v=<?php echo $SITE_VERSION; ?>"></script>
<?php require_once 'footer.php'; ?>
