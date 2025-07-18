<?php

$META_TITLE = 'Training Battle';

$META_DESCRIPTION = 'Select your team and practice battling against an AI.';


require_once '../header.php';
?>
<h1>AI對戰訓練</h1>
<div class="section white">
	<div class="ranking-categories mode-select">
		<a class="selected" href="<?php echo $WEB_ROOT; ?>train/">Train</a>
		<a href="<?php echo $WEB_ROOT; ?>train/analysis/">Top Performers</a>
	</div>
	<div class="clear"></div>
	<p class="description">Select your team and options below to battle in a real-time simulation against a CPU opponent.</p>
	<p>This tool is a training and learning resource intended to supplement your in-game battles. Experiment with new lineups or practice in a pressure free environment against a difficulty of your choice!</p>
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
				<option value="1500 gobattleleague">GO 超級聯盟</option>
				<option value="2500 gobattleleague">GO 高級聯盟</option>
				<option value="10000 gobattleleague">GO 大師聯盟</option>
                <option value="1500 all">超級聯盟(6v6)</option>
                <option value="2500 all">高級聯盟(6v6)</option>
                <option value="10000 all">大師聯盟(6v6)</option>
			</select>
			<h3 class="section-title">AI 強度</h3>
			<select class="difficulty-select">
				<option value="0">初心者訓練家(Novice)</option>
				<option value="1">有經驗的訓練家(Rival)</option>
				<option value="2">菁英訓練家(Elite)</option>
				<option value="3" selected>冠軍訓練家(Champion)</option>
			</select>
            <h3 class="section-title" style="display:none;">交換冷卻時間</h3>
            <select class="switch-time-select"  style="display:none;">
                <option value="30000">30秒</option>
                <option value="50000" selected>60秒</option>
            </select>
            <div class="check autotap-toggle"><span></span>自動點擊</div>
			<h3 class="section-title">隊伍選擇</h3>
			<select class="team-method-select">
				<option value="random">隨機產生</option>
				<option value="manual">手動指定</option>
				<option value="custom">匯入數據</option>
			</select>
			<?php require '../modules/pokemultiselect.php'; ?>
			<div class="custom-team-section">
				<h3 class="section-title">匯入隊伍</h3>
				<p>Select a custom team pool built in the <a href="<?php echo $WEB_ROOT; ?>train/editor/" class="inline-link" target="_blank">Training Team Editor</a>, or paste a code from the editor or <a href="https://gobattlelog.com" class="inline-link" target="_blank">GoBattleLog.com</a>.</p>
				<select class="team-fill-select">
					<option disabled selected value="">Select a team pool</option>
				</select>
				<textarea class="team-import" placeholder="Paste team pool code"></textarea>
				<div class="custom-team-validation true">Looks good! Teams successfully imported.</div>
				<div class="custom-team-validation false">The code you entered may not be correct. Double check the source.</div>
			</div>
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
			<a href="<?php echo $WEB_ROOT; ?>train/editor/" class="inline-link train-editor-link" target="_blank">訓練隊伍編輯器</a>
		</div>
	</div>
</div>

<div class="section">
	<button class="battle-btn button">
		<span class="btn-content-wrap">
			<span class="btn-icon btn-icon-train"></span>
			<span class="btn-label">訓練開始</span>
		</span>
	</button>
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

<?php require '../modules/ads/body-728.php'; ?>

<?php require_once '../modules/scripts/battle-scripts.php'; ?>
<?php require_once '../modules/scripts/train-scripts.php'; ?>

<script src="<?php echo $WEB_ROOT; ?>js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Pokemon.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Player.js?v=<?php echo $SITE_VERSION; ?>"></script>

<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSearch.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSelect.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeMultiSelect.js?=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/Pokebox.js?=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/ModalWindow.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/battle/rankers/TeamRanker.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/MatchHandler.js?v=<?php echo $SITE_VERSION; ?>"></script>

<!--pvpoketw tools-->
<script src="<?php echo $WEB_ROOT; ?>js/interface/TWTools.js?v=<?php echo $SITE_VERSION; ?>"></script>
<?php require_once '../footer.php'; ?>
