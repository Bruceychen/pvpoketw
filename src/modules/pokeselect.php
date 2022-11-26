<div class="poke single">
	<a class="random" href="#">隨機</a>
	<a class="swap" href="#">左右交換</a>

	<div class="poke-search-container flex">
		<input class="poke-search" type="text" placeholder="Search name">
		<a href="#" class="search-info" title="Search Help" context="pokeselect">?</a>
	</div>

	<select class="poke-select">
		<option disabled selected value="">選擇寶可夢</option>
	</select>

	<?php include 'pokebox.php'; ?>

	<div class="poke-stats">
		<h3 class="cp"><span class="identifier" title="Shadow"></span> cp <span class="stat"></span></h3>
		<div class="types"></div>
		<div class="stat-container attack clear">
			<div class="stat-label">
				<span class="label-name">攻擊</span>
				<span class="stat">100</span>
			</div>
			<div class="bar-back">
				<div class="bar"></div>
			</div>
		</div>
		<div class="stat-container defense clear">
			<div class="stat-label">
				<span class="label-name">防禦</span>
				<span class="stat">100</span>
			</div>
			<div class="bar-back">
				<div class="bar"></div>
			</div>
		</div>
		<div class="stat-container stamina clear">
			<div class="stat-label">
				<span class="label-name">HP</span>
				<span class="stat">100</span>
			</div>
			<div class="bar-back">
				<div class="bar"></div>
			</div>
		</div>
		<div class="clear"></div>
		<div class="stat-container overall clear">
			<div class="stat-label">
				<span class="label-name">合計</span>
				<span class="stat">100</span>
			</div>
		</div>
		<div class="clear"></div>

		<div class="mega-cp-container">
			<h3 class="base-name section-title">Pokemon</h3>
			<h3 class="mega-cp">cp <span class="stat"></span></h3>
		</div>

		<div class="advanced-section">
			<a class="advanced" href="#">進階狀態/IV設定 <span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
			<div class="fields">

				<div class="ivs">
					<h3>等級 &amp; IV's</h3>
					<input class="level" type="number" placeholder="Level" min="1" max="51" step=".5" />
					<div class="ivs-group">
						<input class="iv" iv="atk" type="number" placeholder="Atk" min="0" max="15" step="1" /><span>/</span>
						<input class="iv" iv="def" type="number" placeholder="Def" min="0" max="15" step="1" /><span>/</span>
						<input class="iv" iv="hp" type="number" placeholder="HP" min="0" max="15" step="1" />
					</div>
				</div>
				<div class="maximize-section">
					<div class="check-group">
						<div class="check on" value="overall"><span></span>總體最佳</div>
						<div class="check" value="atk"><span></span>攻擊優先</div>
						<div class="check" value="def"><span></span>防禦優先</div>
					</div>
					<div class="level-cap-group">
						<div>等級上限:</div>
						<div class="check on" value="40"><span></span>40</div>
						<div class="check" value="41"><span></span>41</div>
						<div class="check" value="50"><span></span>50</div>
						<div class="check" value="51"><span></span>51</div>
					</div>
					<div class="check auto-level on"><span></span>等級自動調整</div>
					<button class="maximize-stats">最大值</button>
					<button class="restore-default">預設值</button>
				</div>
				<div class="stat-modifiers">
					<h3>Stat Modifiers (-4 to 4)</h3>
					<input class="stat-mod" iv="atk" type="number" placeholder="Atk" min="-4" max="4" step="1" />
					<input class="stat-mod" iv="def" type="number" placeholder="Def" min="-4" max="4" step="1" />
				</div>

                <div class="damage-adjustments">
                    <div class="adjustment attack">
                        <div class="value">x1</div>
                        <div class="label">造成傷害值</div>
                    </div>
                    <div class="adjustment defense">
                        <div class="value">x1</div>
                        <div class="label">承受傷害值</div>
                    </div>
                </div>
			</div>
		</div>

		<div class="move-select-container">
			<h3 class="section-title">一般招式(Fast Move)</h3>

			<select class="move-select fast"></select>

			<h3 class="section-title">特殊招式(Charged Moves)</h3>

			<select class="move-select charged"></select>
			<select class="move-select charged"></select>
			<button class="auto-select">自動選擇招式</button>
            <div class="legacy">*：絕版招式<br><sup>†</sup>：無法透過任何招式學習器習得</div>
		</div>

		<div class="options">
			<div class="shield-section">
				<h3 class="section-title">護盾使用數</h3>
				<div class="form-group shield-picker">
					<div class="option" value="0"><div class="icon"></div> 0</div>
					<div class="option on" value="1"><div class="icon"></div> 1</div>
					<div class="option" value="2"><div class="icon"></div> 2</div>
				</div>
			</div>
			<div class="shadow-section">
				<h3 class="section-title">寶可夢個體</h3>
				<div class="form-group shadow-picker">
					<div class="option on" value="normal">一般</div>
					<div class="option" value="shadow">暗影</div>
				</div>
			</div>
			<a href="#" class="section-title toggle">其他選項 <span class="arrow-down">&#9660;</span><span class="arrow-up">&#9650;</span></a>
			<div class="toggle-content">
				<div class="flex">
					<div class="label">HP:</div><input class="start-hp" type="number" min="0" placeholder="起始HP值" />
				</div>
				<div class="flex">
					<div class="label">能量值:</div><input class="start-energy" type="number" min="0" max="100" placeholder="起始能量值" />
				</div>
				<button class="add-fast-move">+ 招式</button>
				<button class="pull-from-timeline">從時間軸擷取</button>
				<h3 class="section-title">誘使對手用盾</h3>
				<div class="form-group bait-picker">
					<div class="option" value="0">關</div>
					<div class="option on" value="1">策略性使用</div>
					<div class="option" value="2">開</div>
				</div>
				<div class="check optimize-timing on"><span></span>最佳化招式使用時機</div>
			</div>
		</div>

		<div class="custom-ranking-options">
			<h3 class="section-title">Ranking Weight Multiplier</h3>
			<input class="ranking-weight" type="number" placeholder="Weight" min="0" value="1" />
			<div class="legacy">Matchup scores against this Pokemon will be multiplied by the value above. Default is 1. Use values of 2-10 depending on meta relevancy. Use 0 to remove all weighting.</div>
		</div>

		<a href="#" class="clear-selection">清除設定</a>

		<div class="hp bar-back">
			<div class="bar"></div>
			<div class="bar damage"></div>
			<div class="stat"></div>
		</div>

		<div class="move-bars">
			<div class="move-bar">
				<div class="label">CM</div>
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar-back"></div>
			</div>
			<div class="energy-label">
				<div class="num">0</div>
				<div>能量值</div>
			</div>
			<div class="move-bar">
				<div class="label">CM</div>
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar"></div>
				<div class="bar-back"></div>
			</div>
		</div>
	</div>
	<div class="tooltip">
		<h3 class="name"></h3>
		<div class="details"></div>
	</div>

	<div class="clear-confirm hide">
		<p>將 <b><span class="name"></span></b> 移除?</p>

		<div class="center flex">
			<div class="button yes">是</div>
			<div class="button no">否</div>
		</div>
	</div>

	<div class="custom-move hide">
		<p>自訂 <b><span class="name"></span></b>的招式:</p>

		<input class="poke-search" context="move-search" type="text" placeholder="Search move"/>
		<select class="move-select">
			<option selected disabled value="">選擇招式</option>
		</select>

		<div class="center flex">
			<div class="button add-move">加入招式</div>
		</div>
	</div>

	<div class="pokeselector-search-help article hide">
		<p>You can use the following keyboard commands when selecting a Pokemon:</p>
		<table cellspacing="0">
			<tr>
				<td><strong>&uarr;</strong></td>
				<td>Navigate up alphabetically (to select a related form)</td>
			</tr>
			<tr>
				<td><strong>&darr;</strong></td>
				<td>Navigate down alphabetically (to select a related form)</td>
			</tr>
			<tr>
				<td><strong>Enter</strong></td>
				<td>Multi-Select: Add or save changes to the current Pokemon. You can press Enter again to bring up a new Add Pokemon window.</td>
			</tr>
		</table>
	</div>
</div>
