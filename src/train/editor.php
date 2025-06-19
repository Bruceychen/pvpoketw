<?php

$META_TITLE = 'Training Team Editor';

$META_DESCRIPTION = 'Edit the teams you battle in training.';


require_once '../header.php';
?>
<h1>自訂訓練隊伍</h1>
<div class="section home white train editor">
	<p>使用以下工具，建立個人專屬的 <a href="<?php echo $WEB_ROOT; ?>train/" target="_blank">AI對戰訓練</a> 隊伍！請注意，AI隊伍寶可夢的CP及IV，是在模擬對戰開始前才會產生。</p>

	<div class="team-selector">
		<div class="table-container">
			<table class="train-table teams" cellspacing="0">
				<thead>
					<tr>
						<td class="poke-name">隊伍成員 (第一隻為先發)</td>
						<td class="poke-name"></td>
						<td class="poke-name"></td>
						<td></td>
						<td></td>
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
						<td><a href="#" class="edit">編輯</a></td>
						<td><a href="#" class="delete">刪除</a></td>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>

		<button class="button new-team">+ 新隊伍</button>

		<div class="multi-selector" mode="new">
			<?php require '../modules/pokemultiselect.php'; ?>
			<button class="button add-team">新增隊伍</button>
			<button class="button save-changes">儲存變更</button>
		</div>

	</div>
</div>

<div class="section white training-editor-import">
	<h3>儲存/讀取 隊伍</h3>

	<p>在當前使用裝置上儲存隊伍 或 讀取當前使用裝置上既有的隊伍資料。</p>

	<select class="team-fill-select">
		<option value="new">New Team Pool</option>
	</select>
	<div class="flex team-fill-buttons">
		<button class="save-btn save-custom">儲存</button>
		<button class="save-btn save-as hide">另存為</button>
		<button class="delete-btn hide">刪除</button>
	</div>
</div>

<div class="section white training-editor-import">
	<h3>匯入/匯出 隊伍資料</h3>

	<p>複製以下文字以匯出您客製化的隊伍，或在下方貼上隊伍資料以匯入。或是登入<a href="https://gobattlelog.com" target="_blank">GoBattleLog.com</a>網站以匯出你經常遇到的隊伍組合資訊。</p>

	<textarea class="import"></textarea>
	<div class="copy">複製</div>
</div>


<div class="hide">
	<?php require '../modules/pokeselect.php'; ?>
</div>

<div class="team-delete-confirm hide">
	<p>刪除此隊伍？</p>
	<p></p>

	<div class="center flex">
		<div class="button yes">是</div>
		<div class="button no">否</div>
	</div>
</div>

<div class="enter-full-team hide">
	<p>請補足隊伍成員數</p>
</div>

<div class="save-pool hide">
	<input class="list-name" placeholder="Team pool name" />
	<p>This will save your team pool locally to your device. Use the export code to transfer this pool between devices.</p>
	<div class="center">
		<div class="button save">Save</div>
	</div>
</div>

<div class="delete-list-confirm hide">
	<p>確定刪除 <b><span class="name"></span></b>? 此隊伍資料將會完全自裝置移除。</p>

	<div class="center flex">
		<div class="button yes">是</div>
		<div class="button no">否</div>
	</div>
</div>

<?php require_once '../modules/scripts/battle-scripts.php'; ?>

<script src="<?php echo $WEB_ROOT; ?>js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Pokemon.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/pokemon/Player.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/training/TrainingEditor.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSearch.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeSelect.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/PokeMultiSelect.js?=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/Pokebox.js?=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/interface/ModalWindow.js?v=<?php echo $SITE_VERSION; ?>"></script>
<script src="<?php echo $WEB_ROOT; ?>js/Main.js?v=<?php echo $SITE_VERSION; ?>"></script>


<?php require_once '../footer.php'; ?>
