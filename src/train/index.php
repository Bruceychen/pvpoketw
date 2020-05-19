<?php

$META_TITLE = 'Training Battle';

$META_DESCRIPTION = 'Select your team and practice battling against an AI.';


require_once '../header.php';
?>
<h1>AI對戰訓練</h1>
<div class="section home white">
	<p>選擇寶可夢、自由設定招式及個體值，組建隊伍並和網站AI來場即時的擬真戰鬥吧！</p>
    <p>使用此工具測試各種新的隊伍搭配與組成，並且依喜好選擇AI強度進行零壓力的對戰訓練，讓你在遊戲中的PVP更加無往不利！</p>
</div>

<div class="hide">
	<?php require '../modules/pokeselect.php'; ?>
</div>

<div class="section poke-select-container train">
	<div class="poke">
		<h3>你的隊伍</h3>
		<?php require '../modules/pokemultiselect.php'; ?>
		<a class="random" href="#">隨機</a>
	</div>

	<div class="poke ai-options">
		<h3>對手設定</h3>
		<div class="poke-stats">
			<select class="mode-select">
				<option value="single">單場戰鬥 (3v3)</option>
				<option value="tournament">正式比賽 (6v6)</option>
			</select>
			<h3 class="section-title">聯盟 &amp; 主題盃賽</h3>
			<select class="league-cup-select">
				<option value="" selected disabled>選擇聯盟/主題盃賽</option>
				<option value="1500 gobattleleague">GO 超級對戰聯盟(1500)</option>
				<option value="2500 gobattleleague">GO 高級對戰聯盟(2500)</option>
                <option value="10000 gobattleleague">GO 大師對戰聯盟(無上限)</option>
				<option value="1500 all">超級聯盟 CP 1500</option>
				<option value="2500 all">高級聯盟 CP 2500</option>
				<option value="10000 all">大師聯盟 CP 無上限</option>
                <option value="1500 forest">森林盃</option>
			</select>
			<h3 class="section-title">AI 強度</h3>
			<select class="difficulty-select">
				<option value="0">初心者訓練家(Novice)</option>
				<option value="1">有經驗的訓練家(Rival)</option>
				<option value="2">菁英訓練家(Elite)</option>
				<option value="3" selected>冠軍訓練家(Champion)</option>
			</select>
            <div class="check autotap-toggle"><span></span>自動點擊</div>
			<h3 class="section-title">隊伍選擇</h3>
			<select class="team-method-select">
				<option value="random">隨機產生</option>
				<option value="manual">手動指定</option>
				<option value="featured">精選隊伍</option>
			</select>
			<?php require '../modules/pokemultiselect.php'; ?>
			<div class="featured-team-section">
				<h3 class="section-title">精選隊伍</h3>
				<p>與世界頂級選手或知名實況主、部落客的隊伍戰鬥！</p>
				<select class="featured-team-select">
					<option disabled selected value="">選擇隊伍</option>
				</select>
				<div class="featured-team-description">
					<a target="_blank" href="#">
						<img>
						<h3></h3>
					</a>
					<p></p>
					<h5>Team Preview</h5>
					<div class="featured-team-preview">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="clear"></div>
</div>

<div class="section">
	<button class="battle-btn button">戰鬥開始</button>
</div>

<div class="section team-select">
    <a class="return-to-setup" href="#">&larr; 返回隊伍選擇設定頁面</a>
	<div class="opponent">
		<h3 class="center">對手的隊伍成員</h3>
		<div class="featured-team-description">
			<a target="_blank" href="#">
				<img>
				<h3></h3>
			</a>
		</div>
		<div class="roster pokemon-container"></div>
	</div>
	<h3 class="center">vs.</h3>
	<div class="self">
		<h3 class="center">您的隊伍成員</h3>
		<div class="roster pokemon-container"></div>
		<p class="center">選擇出戰的寶可夢及先發順序</p>
		<h4 class="center">目前比數: <span class="round-record"></span></h4>
	</div>
	<button class="lets-go-btn button">Let's Go!</button>
</div>

<div class="section battle">
	<div class="battle-window">
		<img class="img-block" src="<?php echo $WEB_ROOT; ?>img/train/battle-window-block.png" />
		<?php require_once 'modules/top.php'; ?>
		<?php require_once 'modules/scene.php'; ?>
		<?php require_once 'modules/controls.php'; ?>

		<div class="countdown">
			<div class="text"></div>
		</div>

		<div class="animate-message">
			<div class="text"></div>
		</div>

		<?php require_once 'modules/end-screen.php'; ?>
	</div>
</div>

<div class="section white updates">
	<h3>What's New</h3>

    <h4>v1.14.20 (May 17, 2020)</h4>
    <ul>
        <li>Updates to Training Battles:</li>
        <ul>
            <li>Tweaked AI switching behavior to favor soft counters over hard counters when it can be counter-switched.</li>
            <li>The switch window now closes during Charged Moves to prevent overlap with the shield screen.</li>
            <li>Fixed an issue where Pokemon would be locked into their Fast Move cooldown after fainting an opponent with a Fast Move.</li>
        </ul>
	</ul>
</div>

<script src="<?php echo $WEB_ROOT; ?>js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Pokemon.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Player.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/TrainingSetupInterface.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/BattleInterface.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/DecisionOption.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/TrainingAI.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSearch.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSelect.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeMultiSelect.js?=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/ModalWindow.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TimelineEvent.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TimelineAction.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/Battle.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/TeamRanker.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/MatchHandler.js?v=<?php echo $SITE_VERSION; ?>"></script>


<?php require_once '../footer.php'; ?>
