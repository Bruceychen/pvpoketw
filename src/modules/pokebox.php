<div class="pokebox">
	<a href="#" class="open-pokebox button-highlight"><span>匯入</span><span>寶可夢盒子<span></a>

	<div class="pokebox-import hide">
		<div class="pokebox-on hide">
			<p>選擇寶可夢以匯入</p>
			<div class="poke-count-container multi">
				<span class="poke-count">0</span> / <span class="poke-max-count">100</span>
			</div>
			<div class="pokebox-options">
				<a href="#" class="pokebox-refresh">更新</a>
				<a href="https://www.pokebattler.com/pokebox" class="pokebox-edit" target="_blank">編輯寶可夢盒子</a>
				<a href="https://www.pokebattler.com/user/sponsor/pvpoke" class="pvpoke-sponsor" target="_blank">贊助原版PvPoke</a>
			</div>

			<div class="poke-search-container">
				<input class="poke-search" context="ranking-search" type="text" placeholder="搜尋寶可夢" />
			</div>

			<div class="pokebox-list rankings-container">
				讀取寶可夢盒子...
			</div>
			<div class="error hide">
				讀取寶可夢盒子發生錯誤。請確認你的 <a href="<?php echo $WEB_ROOT; ?>settings/" target="_blank">設定</a>頁面，或是重新整理此畫面。
			</div>
			<div class="center multi">
				<div class="button select">選擇寶可夢</div>
			</div>
		</div>
		<div class="pokebox-off hide">
			<p>PvPokeTW 與 <a href="https://www.pokebattler.com/" class="pokebattler">Pokebattler</a> 網站整合！現在起你可以預先儲存寶可夢資料，並且在任何裝置上匯入本站使用：</p>
			<ol>
				<li><a href="https://www.pokebattler.com/user" target="_blank">創建帳號或登入</a> Pokebattler 。</li>
				<li>在寶可夢盒子中加入寶可夢。</li>
				<li>輸入Pokebattler帳號ID(畫面右上角"數字"):<input type="text" class="pokebox-id" placeholder="Pokebattler ID" /></li>
			</ol>
			<p>如果訂閱 Pokebattler ，你就能儲存更多的寶可夢，同時也能夠贊助原版<a href="https://www.pokebattler.com/user/sponsor/pvpoke" target="_blank"> PvPoke!</a></p>
			<div class="center">
				<div class="button save">儲存設定</div>
			</div>
		</div>
	</div>
</div>
