<div class="poke single">
	<a class="random" href="#">隨機</a>
	<a class="swap" href="#">左右交換</a>
	<input class="poke-search" type="text" placeholder="Search name">
	<select class="poke-select">
		<option disabled selected value="">選擇寶可夢</option>
	</select>

	<div class="poke-stats">
		<h3 class="cp">cp <span class="stat"></span></h3>
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
					<input class="level" type="number" placeholder="Level" min="1" max="40" step=".5" />
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
				<h3 class="section-title">防禦網使用策略</h3>
				<select class="shield-select">
				    <option value="0">不使用防禦網</option>
				    <option value="1" selected>使用1次防禦網</option>
				    <option value="2">使用2次防禦網</option>
				</select>
			</div>
			<div class="shadow-section">
			    <h3 class="section-title">寶可夢個體</h3>
			    <div class="form-group">
			        <div class="check on" value="normal"><span></span>一般</div>
			        <div class="check" value="shadow"><span></span>暗影</div>
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
				<button class="add-fast-move">+ Move</button>
				<button class="pull-from-timeline">從時間軸擷取</button>
				<div class="check shield-baiting on"><span></span>用低能量需求招式引誘對手使用防禦網</div>
			</div>
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
</div>
