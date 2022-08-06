<div class="details-template hide">
	<div class="detail-section detail-tab-nav">
		<a class="tab-moves active" href="#" tab="matchups"><span class="icon"></span>關鍵名單</a>
		<a class="tab-moves" href="#" tab="moves"><span class="icon"></span>招式資料</a>
		<a class="tab-stats" href="#" tab="stats"><span class="icon"></span>對戰數值</a>
		<a class="tab-moves" href="#" tab="misc"><span class="icon"></span>個體資訊</a>
	</div>

	<div class="detail-tab active" tab="matchups">
		<div class="detail-section float margin">
			<div class="ranking-header">最佳剋制對象</div>
			<div class="ranking-header right">戰力指數</div>
			<div class="matchups clear"></div>
		</div>
		<div class="detail-section float">
			<div class="ranking-header">首要威脅來源</div>
			<div class="ranking-header right">戰力指數</div>
			<div class="counters clear"></div>
		</div>

        <div class="multi-battle-link"><p>查看 <b class="name"></b> 在此主題賽中的完整對戰表現:</p><a target="_blank" class="button" href="#">Pokemon vs. Great League</a></div>
	</div><!-- end tab matchups-->

	<div class="detail-tab" tab="stats">
		<div class="detail-section performance float margin">
			<div class="ranking-header">綜合表現</div>
			<div class="hexagon-container">
				<div class="chart-label">
					<div class="value">0</div>
					<div class="label">Lead</div>
				</div>
				<div class="chart-label">
					<div class="value">0</div>
					<div class="label">Closer</div>
				</div>
				<div class="chart-label">
					<div class="value">0</div>
					<div class="label">Switch</div>
				</div>
				<div class="chart-label">
					<div class="value">0</div>
					<div class="label">Charger</div>
				</div>
				<div class="chart-label">
					<div class="value">0</div>
					<div class="label">Attacker</div>
				</div>
				<div class="chart-label">
					<div class="value">0</div>
					<div class="label">Consistency</div>
				</div>
				<canvas class="hexagon"></canvas>
			</div>

		</div>
		<div class="detail-section poke-stats float">
			<div class="ranking-header">狀態數值</div>
			<div class="stat-details clear">
				<div class="stat-row">
					<div class="label">攻擊力</div>
					<div class="value">0</div>
					<div class="bar-container">
						<div class="bar"></div>
						<div class="bar shadow"></div>
						<div class="shadow-mult">+20%</div>
					</div>
				</div>
				<div class="stat-row">
					<div class="label">防禦力</div>
					<div class="value">0</div>
					<div class="bar-container">
						<div class="bar"></div>
						<div class="bar shadow"></div>
						<div class="shadow-mult">-20%</div>
					</div>
				</div>
				<div class="stat-row">
					<div class="label">體力/HP</div>
					<div class="value">0</div>
					<div class="bar-container">
						<div class="bar"></div>
					</div>
				</div>
				<div class="stat-row overall">
					<div class="label">整體評分</div>
					<div class="value">0</div>
					<div class="bar-container">
						<div class="bar"></div>
					</div>
				</div>
				<div class="stat-row level">
					<div class="label">等級</div>
					<div class="value">0</div>
				</div>
				<div class="stat-row rank-1">
					<div class="label">最佳IV組合(Rank 1)</div>
					<div class="value">0</div>
				</div>
				<div class="stat-row xl-info-container">
					<div class="label"><div class="icon"></div></div>
					<div class="xl-info regular hide">不需使用 XL糖果。</div>
					<div class="xl-info mixed hide">建議使用 XL糖果 但非必要。</div>
					<div class="xl-info xl hide">強烈建議使用 XL糖果。</div>
					<div class="xl-info unavailable hide">此寶可夢的 XL糖果尚不易取得。</div>
					<div class="xl-info xs hide">此寶可夢不考慮 XL糖果使用情境。</div>
				</div>
			</div>
		</div>
		<div class="detail-section traits-container">
			<div class="ranking-header">對戰特質(Traits) <a href="#" class="trait-info">?</a></div>
			<div class="traits"></div>
		</div>
	</div><!-- end tab stats-->

	<div class="detail-tab" tab="moves">
		<div class="detail-section float margin">
			<div class="ranking-header">一般招式</div>
			<div class="ranking-header stat-toggle"><a class="show-move-stats" href="#">顯示數據</a></div>
			<div class="moveset fast clear">
				<div class="move-detail-template rank hide">
					<div class="name-container flex">
						<span class="name">Counter</span>
						<span class="archetype"><span class="name"></span><span class="icon"></span></span>
					</div>
					<div class="stats-container name-container flex">
						<div class="dpt"><b class="value">0</b> 傷</div>
						<div class="ept"><b class="value">0</b> 能</div>
						<div class="turns"><b class="value">0</b> 轉</div>
					</div>
				</div>
			</div>
			<div class="rank selected recommended">推薦招式</div>
			<div class="footnote">
				* 活動或僅能透過厲害招式學習器習得<br>
				<sup>†</sup> 無法透過招式學習器學會<br><br>
				<div>招式數值已包含同屬性和暗影化攻擊加成。</div>
			</div>
		</div>
		<div class="detail-section float">
			<div class="ranking-header">特殊招式</div>
			<div class="moveset charged clear">
				<div class="move-detail-template rank hide">
					<div class="name-container flex">
						<span class="name">Counter</span>
						<span class="archetype"><span class="name"></span><span class="icon"></span></span>
					</div>
					<div class="stats-container name-container flex">
						<div class="damage"><b class="value">0</b> 傷害</div>
						<div class="energy"><b class="value">0</b> 能量</div>
						<div class="dpe"><b class="value">0</b> 傷/能</div>
					</div>
					<div class="stats-container name-container move-effect flex"></div>
					<div class="stats-container name-container move-count"><div>一般招式使用次數：<span></span></div></div>
				</div>
			</div>
		</div>
	</div><!-- end tab moves-->

	<div class="clear"></div>

	<div class="detail-tab" tab="misc">
		<div class="detail-section typing">
			<div class="rating-container">
				<div class="ranking-header">第一屬性</div>
				<div class="type"></div>
			</div>
			<div class="rating-container">
				<div class="ranking-header">第二屬性</div>
				<div class="type"></div>
			</div>
		</div>
		<div class="detail-section float margin">
			<div class="ranking-header">弱點屬性</div>
			<div class="weaknesses clear"></div>
		</div>
		<div class="detail-section float">
			<div class="ranking-header">抵抗屬性</div>
			<div class="resistances clear"></div>
		</div>
		<div class="clear"></div>
		<div class="detail-section float margin">
			<div class="ranking-header">夥伴行走距離</div>
			<div class="buddy-distance clear"></div>
		</div>
		<div class="detail-section float">
			<div class="ranking-header">解鎖特殊招式星塵數</div>
			<div class="third-move-cost clear"></div>
		</div>
		<div class="detail-section partner-pokemon">
			<div class="ranking-header">建議組隊成員</div>
			<div class="footnote">
				推薦與以下寶可夢一同組隊，點選進入隊伍組建模擬功能：
			</div>
			<div class="list"></div>
		</div>
		<div class="clear"></div>
		<div class="detail-section similar-pokemon">
			<div class="ranking-header">特性相似寶可夢</div>
			<div class="list"></div>
		</div>
	</div><!--end tab misc-->

	<div class="share-link detail-section"><input type="text" readonly="">
		<div class="copy">複製</div>
	</div>
</div>

<div class="trait-modal hide">
	<p><b class="name"></b> 具有以下對戰特質與風格；</p>

	<div class="traits">
	</div>
</div>
