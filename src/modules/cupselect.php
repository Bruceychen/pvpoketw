<select class="format-select">
	<option value="all" cup="all">全部寶可夢</option>
    <option value="tsa-2" cup="toxic">猛毒盃-202003</option>
    <option value="tsa-2" cup="voyager">Voyager Cup-202004</option>
    <option value="community">本地社群自創盃賽</option>

	<?php if((strpos($_SERVER['REQUEST_URI'], 'battle') !== false)||(strpos($_SERVER['REQUEST_URI'], 'rankings') !== false)): ?>
		<option value="custom" cup="custom">自訂排名</option>
	<?php endif; ?>

</select>

<select class="cup-select">
	<option value="all" cat="all">全部寶可夢</option>
	<option value="gen-5" cat="all">無限屬大亂鬥 (含未開放五世代寶可夢)</option>
    <option value="llove" cat="community">LLove Cup-高雄群</option>
    <option value="growing" cat="community">成長盃-高雄群</option>
    <option value="plague" cat="community">瘟疫盃-高雄群</option>
	<option value="jungle"  cat="tsa-1">叢林盃</option>
	<option value="rainbow" cat="tsa-1">彩虹盃</option>
	<option value="championships-1" cat="tsa-1">第一季冠軍賽</option>
	<option value="regionals-1" cat="tsa-1">第一季區域邀請賽</option>
	<option value="nightmare" cat="tsa-1">惡夢盃</option>
	<option value="kingdom" cat="tsa-1">王權盃</option>
	<option value="tempest" cat="tsa-1">風暴盃</option>
	<option value="twilight" cat="tsa-1">暮光盃</option>
	<option value="boulder" cat="tsa-1">巨石盃</option>
    <option value="voyager" cat="tsa-2">Voyager Cup</option>
    <option value="toxic" cat="tsa-2">猛毒盃</option>
    <option value="rose" cat="tsa-2">玫瑰盃</option>
    <option value="fusion" cat="tsa-2">融合盃</option>
    <option value="timeless" cat="tsa-2">永伴盃</option>
	<option value="ferocious" cat="tsa-2">猛獸盃</option>
	<option value="sinister" cat="tsa-2">魅靈盃</option>
	<option value="custom" cat="custom">自訂排名</option>
</select>
