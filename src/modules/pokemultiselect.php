<div class="poke multi">

	<?php require_once 'cupselect.php'; ?>
	<div class="poke-stats">
		<div class="custom-options">
			<h3 class="section-title">寶可夢 (<span class="poke-count">0</span> / <span class="poke-max-count">100</span>)</h3>
			<p>選擇寶可夢組成隊伍，或選擇已儲存之隊伍。</p>
			<div class="rankings-container clear"></div>
			<button class="add-poke-btn button">+ 選擇寶可夢</button>

			<?php include 'pokebox.php'; ?>

			<button class="export-btn">匯入/匯出</button>

			<h3 class="section-title">快速選擇</h3>
			<select class="quick-fill-select">
				<option value="new">建立新隊伍</option>
				<option value="great" type="great" class="multi-battle">超級(1500)聯盟 Meta</option>
				<option value="ultra" type="ultra" class="hide multi-battle">高級(2500)聯盟 Meta</option>
				<option value="master" type="master" class="hide multi-battle">大師(無上限)聯盟 Meta</option>
				<option value="premierultra" type="ultra" class="hide multi-battle">高級紀念盃 Meta</option>
				<option value="premier" type="master" class="hide multi-battle">大師紀念盃 Meta</option>
				<option value="holiday" type="great" class="multi-battle">假日盃 Meta</option>
                <option value="cerberus" type="great" class="multi-battle">VR Cerberus Cup Meta</option>
			</select>
			<div class="flex quick-fill-buttons">
				<button class="save-btn save-custom">儲存</button>
				<button class="save-btn save-as hide">另存新隊伍</button>
				<button class="delete-btn hide">刪除</button>
			</div>
		</div>

		<div class="options">
			<h3 class="section-title">其他選項</h3>
			<select class="shield-select">
				<option value="0">不使用防禦網</option>
				<option value="1" selected>使用1次防禦網</option>
				<option value="2">使用2次防禦網</option>
			</select>
			<select class="charged-count-select">
                <option value="0">不使用特殊招式</option>
                <option value="1">僅1個特殊招式</option>
                <option value="2" selected="">2個特殊招式</option>
            </select>
            <select class="default-iv-select">
                <option value="original">使用標準IV</option>
                <option value="gamemaster">使用預設IV</option>
                <option value="overall">使用最佳IV(排名第1)</option>
                <option value="atk">使用攻擊最大化IV</option>
                <option value="def">使用防禦最大化IV</option>
            </select>
            <select class="pokemon-level-cap-select">
                <option value="40">預設等級上限(40)</option>
                <option value="45">夥伴等級上限(41)</option>
                <option value="50">新預設等級上限(50)</option>
                <option value="51">新夥伴等級上限(51)</option>
            </select>
            <div class="check shield-baiting on"><span></span>用低能量需求招式引誘對手使用防禦網</div>
        </div>

		<a href="#" class="clear-selection">Clear Selections</a>
	</div>
</div>

<div class="remove-poke-confirm hide">
	<p>將 <b><span class="name"></span></b> 移出隊伍？</p>

	<div class="center flex">
		<div class="button yes">是的</div>
		<div class="button no">不要</div>
	</div>
</div>

<div class="list-export hide">
	<p>複製以下文字或貼上其他隊伍資料以匯入隊伍。</p>
	<textarea class="list-text" type="text"></textarea>
	<div class="copy">複製</div>
	<div class="center">
		<div class="button import">匯入</div>
	</div>
</div>

<div class="save-list hide">
	<input class="list-name" placeholder="新建隊伍名稱" />
	<p>你所建立的隊伍資料將會儲存在此裝置的cookie中。使用匯入/匯出功能便可以將隊伍資料轉移到其他裝置上使用。</p>
	<div class="center">
		<div class="button save">儲存</div>
	</div>
</div>

<div class="multi-clear-confirm hide">
	<p>清空並重設寶可夢隊伍/個體條件？此操作不會刪除"已儲存"的隊伍資料。</p>

	<div class="center flex">
		<div class="button yes">是</div>
		<div class="button no">否</div>
	</div>
</div>


<div class="delete-list-confirm hide">
	<p>刪除 <b><span class="name"></span></b>? 此隊伍資料將會從此裝置中永遠移除。</p>

	<div class="center flex">
		<div class="button yes">是的</div>
		<div class="button no">不要</div>
	</div>
</div>
