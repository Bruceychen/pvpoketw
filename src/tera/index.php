<?php

if(isset($_GET['p']) && isset($_GET['t'])){
	// Put Pokemon names in the meta title

	$name = ucwords(str_replace('_',' ', explode('-', htmlspecialchars($_GET['p']))[0]));

	$META_TITLE = $name . ' 太晶戰反制計算器';

	$META_DESCRIPTION = 'Check ' . $name . ' Tera Raid counters and attackers with the best calculated type matchups.';

	$CANONICAL = '/tera/' . $_GET['p'] . '/' . $_GET['t'] . '/';
}


require_once 'header.php'; ?>

<div class="section home white">
	<h1>太晶戰反制計算器</h1>

	<p>此工具主要針對NS本傳的太晶團體戰，找出最佳攻擊招式與屬性的搭配，以有效克制頭目寶可夢！</p>

	<div class="flex section-header margin-top">
		<h3>太晶戰頭目</h3>
		<div class="hr"></div>
	</div>

	<p>以下輸入太晶戰頭目的詳細資料。你也可以追加該頭目使用的招式以利收斂計算結果。</p>


	<div class="bordered-section boss-section">

		<div class="pattern"></div>
		<div class="flash"></div>

		<div class="flex">
			<div class="poke-search-container">
				<input type="text" id="poke-search" placeholder="搜尋寶可夢" autocomplete="off" />
				<select id="poke-select">
					<option disabled selected value="">選擇一個寶可夢</option>
				</select>

				<h4 class="attack-title">攻擊屬性</h4>
				<div class="boss-attack-types">
					<select id="attack-type-select">
						<option disabled selected value="">加入屬性</option>
						<option value="bug">蟲</option>
						<option value="dark">惡</option>
						<option value="dragon">龍</option>
						<option value="electric">電</option>
						<option value="fairy">妖精</option>
						<option value="fighting">格鬥</option>
						<option value="fire">火</option>
						<option value="flying">飛行</option>
						<option value="ghost">幽靈</option>
						<option value="grass">草</option>
						<option value="ground">地面</option>
						<option value="ice">冰</option>
						<option value="normal">一般</option>
						<option value="poison">毒</option>
						<option value="psychic">超能力</option>
						<option value="rock">岩石</option>
						<option value="steel">鋼</option>
						<option value="water">水</option>
					</select>
				</div>

				<div class="type-item template flex">
					<div class="type-name-container flex">
						<div class="tera-icon"></div>
						<div class="type-name">
						</div>
					</div>

					<a href="#" class="close">×</a>
				</div>
			</div>
			<div class="tera-type-container">
				<div class="flex">
					<div class="tera-icon"></div>
					<div>
						<h4>太晶化屬性</h4>

						<div class="tera-type"></div>

						<select id="tera-select">
							<option value="" selected disabled>選擇太晶化屬性</option>
                            <option value="bug">蟲</option>
                            <option value="dark">惡</option>
                            <option value="dragon">龍</option>
                            <option value="electric">電</option>
                            <option value="fairy">妖精</option>
                            <option value="fighting">格鬥</option>
                            <option value="fire">火</option>
                            <option value="flying">飛行</option>
                            <option value="ghost">幽靈</option>
                            <option value="grass">草</option>
                            <option value="ground">地面</option>
                            <option value="ice">冰</option>
                            <option value="normal">一般</option>
                            <option value="poison">毒</option>
                            <option value="psychic">超能力</option>
                            <option value="rock">岩石</option>
                            <option value="steel">鋼</option>
                            <option value="water">水</option>
						</select>
					</div>
				</div>
			</div>
		</div>
	</div>


	<button id="run">計算結果</button>

	<div class="results-container">
		<div class="flex section-header margin-top">
			<h3>反制寶可夢</h3>
			<div class="hr"></div>
		</div>

		<p>以下為此太晶戰頭目最佳之反制寶可夢，分數來自寶可夢的攻擊招式及其自身屬性的加總運算。</p>

		<div class="bordered-section results-section">
			<div class="results-controls flex">
				<div>
					<input type="text" id="results-search" placeholder="搜尋反制寶可夢" />
					<div class="search-instructions">用寶可夢名稱、屬性或太晶化屬性進行搜索。("@water")</div>
				</div>
				<a class="results-options" href="#"></a>
			</div>

			<div class="table-container">
				<table id="results" cellspacing="0">
					<thead>
						<tr>
							<th>寶可夢</th>
							<th>屬性</th>
							<th>太晶化屬性</th>
							<th>分數</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>

		<div class="share-link-container">
			<p>分享此太晶戰的分析計算結果:</p>
			<div class="share-link">
				<input type="text" value="" readonly>
				<div class="copy">複製</div>
			</div>
		</div>

		<div class="score-details template flex">
			<div class="typings flex full-row border-bottom"></div>
			<div class="tera-type flex full-row border-bottom">
				<div class="type-container"></div>
				<div class="label">太晶化屬性</div>
			</div>
			<div class="overall full-row border-bottom">
				<div class="score"></div>
				<div class="label">反制分數</div>
			</div>
			<div class="offense">
				<div class="score"></div>
				<div class="label">攻擊</div>
			</div>
			<span class="multiply">×</span>
			<div class="defense">
				<div class="score"></div>
				<div class="label">防禦</div>
			</div>

			<p><b>反制分數</b>:結合寶可夢攻擊與防禦分數的綜合結果。</p>
			<p><b>攻擊分數</b>:此寶可夢最佳攻擊傷害值與頭目太晶屬性的計算結果。包含考量招式屬性加成與基礎數值。</p>
			<p><b>防禦分數</b>:相反情況下此寶可夢所承受的傷害值、自身屬性、自身太晶屬性、基礎數值，與頭目招式屬性的計算結果。</p>
		</div>

		<div class="results-options template">

			<h4>排序分數依照</h4>
			<select class="score-sort-select">
				<option value="overall">整體</option>
				<option value="offense">攻擊</option>
				<option value="defense">防禦</option>
			</select>

			<div class="check show-best"><span></span>顯示最佳寶可夢個體</div>

			<button class="save">儲存變更</button>
		</div>

	</div>

</div>


	<script src="<?php echo $WEB_ROOT; ?>tera/js/GameMaster.js?v=<?php echo $SITE_VERSION; ?>"></script>

	<script src="<?php echo $WEB_ROOT; ?>tera/js/TeraRanker.js?v=<?php echo $SITE_VERSION; ?>"></script>
	<script src="<?php echo $WEB_ROOT; ?>tera/js/TeraInterface.js?v=<?php echo $SITE_VERSION; ?>"></script>
	<script src="<?php echo $WEB_ROOT; ?>tera/js/ModalWindow.js?v=<?php echo $SITE_VERSION; ?>"></script>
	<script src="<?php echo $WEB_ROOT; ?>tera/js/Main.js?v=<?php echo $SITE_VERSION; ?>"></script>

<?php require_once 'footer.php'; ?>
