<select class="format-select">
	<option value="all" cup="all">無屬性大亂鬥</option>
	<option value="community" cup="safari">Montreal Safari Cup</option>
	<option value="community" cup="fantasy">GO LIVE Fantasy Cup</option>
	<option value="tsa-1">西爾佛第一季各賽事排名</option>
	<option value="community">Community Formats</option>
	<option value="fatsai">發財盃_舊</option>
	<?php if((strpos($_SERVER['REQUEST_URI'], 'battle') !== false)||(strpos($_SERVER['REQUEST_URI'], 'rankings') !== false)): ?>
		<option value="custom">發財盃_新</option>
	<?php endif; ?>

	<?php if((strpos($_SERVER['REQUEST_URI'], 'battle') !== false)||(strpos($_SERVER['REQUEST_URI'], 'rankings') !== false)): ?>
		<option value="custom" cup="custom">自訂排名</option>
	<?php endif; ?>

</select>

<select class="cup-select">
	<option value="all" cat="all">無屬性大亂鬥</option>
	<option value="safari" cat="community">Montreal Safari Cup</option>
	<option value="fantasy" cat="community">GO LIVE Fantasy Cup</option>
	<option value="jungle"  cat="tsa-1">叢林盃</option>
	<option value="rainbow" cat="tsa-1">彩虹盃</option>
	<option value="championships-1" cat="tsa-1">第一季冠軍賽</option>
	<option value="regionals-1" cat="tsa-1">第一季區域邀請賽</option>
	<option value="nightmare" cat="tsa-1">惡夢盃</option>
	<option value="kingdom" cat="tsa-1">王權盃</option>
	<option value="tempest" cat="tsa-1">風暴盃</option>
	<option value="twilight" cat="tsa-1">暮光盃</option>
	<option value="boulder" cat="tsa-1">巨石盃</option>
	<option value="rainbowtw" cat="fatsai">發財盃_舊</option>
	<option value="custom" cat="custom">自訂排名</option>
</select>
