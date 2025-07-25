<div class="poke multi">

	<?php if(strpos($_SERVER['REQUEST_URI'], 'team-builder') == false): ?>
		<?php require_once 'cupselect.php'; ?>
	<?php endif; ?>

	<a class="swap" href="#">Swap</a>

	<div class="poke-stats">
		<div class="custom-options">
			<h3 class="section-title">寶可夢 (<span class="poke-count">0</span> / <span class="poke-max-count">100</span>)</h3>
			<p>選擇寶可夢組成隊伍，或選擇已儲存之隊伍。</p>
            <div class="flex space-between">
                <a class="custom-group-sort" href="#">排序 ...</a>
                <div class="check show-move-counts"><span></span>Move Counts</div>
            </div>

			<div class="rankings-container clear"></div>
			<div class="team-warning ineligible">你的隊伍成員包含不符此賽制規則或數值過低的寶可夢。</div>
			<div class="team-warning labyrinth">迷宮盃隊伍內寶可夢不得有相同屬性！</div>

            <button class="add-poke-btn button">+ 選擇寶可夢</button>

			<?php include 'pokebox.php'; ?>

			<button class="export-btn">匯入/匯出</button>

			<h3 class="section-title">快速選擇</h3>
            <select class="quick-fill-select">
                <option value="new" selected>建立自訂隊伍</option>
                <optgroup label="Default">
                    <option value="great" type="great" class="multi-battle">超級(1500)聯盟 Meta</option>
                    <option value="ultra" type="ultra" class="multi-battle">高級(2500)聯盟 Meta</option>
                    <option value="master" type="master" class="multi-battle">大師(無上限)聯盟 Meta</option>
                    <option value="littlegeneral" type="little" class="multi-battle">小小盃 Meta</option>
                    <option value="top50" type="top" class="multi-battle">排名前50</option>
                    <option value="top100" type="top" class="multi-battle">排名前100</option>
                </optgroup>
                <optgroup label="Cups">
                </optgroup>
                <optgroup label="Custom">
                </optgroup>
            </select>
			<div class="flex quick-fill-buttons">
				<button class="save-btn save-custom">儲存</button>
				<button class="save-btn save-as hide">另存新隊伍</button>
				<button class="delete-btn hide">刪除</button>
			</div>
		</div>

		<div class="options multi-battle-options">
			<h3 class="section-title">對手寶可夢篩選</h3>
			<div class="form-group filter-picker">
				<div class="option on" value="meta">僅 Meta</div>
				<div class="option" value="all">全部寶可夢</div>
			</div>
		</div>

		<div class="options">
			<h3 class="section-title">護盾使用數</h3>
			<div class="form-group shield-picker">
				<div class="option" value="0"><div class="icon"></div> 0</div>
				<div class="option on" value="1"><div class="icon"></div> 1</div>
				<div class="option" value="2"><div class="icon"></div> 2</div>
			</div>
			<h3 class="section-title">Apply to Group</h3>
			<select class="default-iv-select">

                <option selected disabled value="">Select an option to apply</option>
				<option value="gamemaster">使用預設IV</option>
				<option value="overall">使用最佳IV(排名第1)</option>
				<option value="atk">使用攻擊最大化IV</option>
				<option value="def">使用防禦最大化IV</option>
                <option value="buddy">Best Buddy</option>
			</select>
			<select class="pokemon-level-cap-select" style="display:none;">
                <option value="40">預設等級上限(40)</option>
                <option value="45">夥伴等級上限(41)</option>
                <option value="50">新預設等級上限(50)</option>
                <option value="51">新夥伴等級上限(51)</option>
            </select>
            <div class="check show-ivs"><span></span>顯示 等級 &amp; IV數值</div>

			<a href="#" class="section-title toggle clear">Options <span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
			<div class="toggle-content">
				<div class="flex">
					<div class="label">HP (%):</div><input class="start-hp" type="number" min="0" max="100" placeholder="Starting HP (%)" />
				</div>
				<div class="flex">
					<div class="label">Energy (Turns):</div><input class="start-energy" type="number" min="0" max="100" placeholder="Starting Energy" />
				</div>

				<h3 class="section-title">誘使對手用盾</h3>
				<div class="form-group bait-picker">
					<div class="option" value="0">關</div>
					<div class="option on" value="1">策略性使用</div>
					<div class="option" value="2">開</div>
				</div>

				<div class="stat-modifiers">
					<h3 class="section-title">Stat Modifiers (-4 to 4)</h3>
					<input class="stat-mod" iv="atk" type="number" placeholder="Atk" min="-4" max="4" step="1" />
					<input class="stat-mod" iv="def" type="number" placeholder="Def" min="-4" max="4" step="1" />
				</div>
				<div class="damage-adjustments">
					<div class="adjustment attack">
						<div class="value">x1</div>
						<div class="label">damage dealt</div>
					</div>
					<div class="adjustment defense">
						<div class="value">x1</div>
						<div class="label">damage taken</div>
					</div>
				</div>

				<div class="check switch-delay"><span></span>1 turn switch</div>
				<div class="check optimize-timing on"><span></span>Optimize move timing</div>
			</div>
		</div>

        <h3 class="section-title">PMGO搜尋字詞</h3>
        <button class="search-string-btn">產生搜尋字詞</button>

		<a href="#" class="clear-selection">清除名單</a>
	</div>
</div>

<div class="hide">
	<?php require 'pokeselect.php'; ?>
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
	<div class="export-options">
		<div class="copy">複製</div>
		<a class="json" href="#">匯出JSON格式資料</a>
	</div>

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

<div class="sort-group hide">
	<p>群組排序條件：</p>

	<div class="center">
		<div class="button name">名稱</div>
		<div class="button attack">攻擊力</div>
		<div class="button defense">防禦力</div>
	</div>
</div>

<div class="search-string-window hide">
	<p>複製以下PMGO使用的搜尋字詞以找出寶可夢。</p>
	<div class="search-string-options flex">
	    <div class="check hp-option on"><span></span>HP</div>
	    <div class="check cp-option on"><span></span>CP</div>
	    <div class="check region-option"><span></span>包含地區</div>
	</div>
	<h5>注意：CP 及 HP 搜尋字詞在寶可夢使用本站預設IV狀況下不會出現。</h5>
	<textarea class="team-string-text" type="text" readonly></textarea>
	<div class="copy">複製</div>
</div>
