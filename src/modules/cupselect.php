<select class="format-select">
	<option value="all" cup="all">全部寶可夢</option>
	<option value="official" cup="premier">紀念盃</option>
	<option value="official" cup="flying">飛行盃</option>
	<option value="official" cup="halloween">萬聖節盃</option>
	<option value="tsa-2" cup="circus">Circus Cup</option>
	<option value="tsa-3" cup="sunrise">Silph Sunrise Cup</option>

	<?php if(strpos($_SERVER['REQUEST_URI'], 'team-builder') !== false): ?>
		<option value="community" cup="cliffhanger">GO Stadium Cliffhanger</option>
	<?php endif; ?>

	<?php if((strpos($_SERVER['REQUEST_URI'], 'battle') !== false)||(strpos($_SERVER['REQUEST_URI'], 'rankings') !== false)): ?>
		<option value="custom" cup="custom">自訂排名</option>
	<?php endif; ?>

</select>

<select class="cup-select">
	<option value="all" cat="all">全部寶可夢</option>
	<option value="gen-5" cat="all">全部寶可夢 (含未開放五世代寶可夢)</option>
	<option value="premier" cat="official">紀念盃</option>
	<option value="flying" cat="official">飛行盃</option>
	<option value="halloween" cat="official">萬聖節盃</option>
	<option value="safari" cat="community">Montreal Safari Cup</option>
	<option value="fantasy" cat="community">GO LIVE Fantasy Cup</option>
	<option value="beam" cat="community">Get Beamed</option>
	<option value="grunt" cat="community">Grunt Cup Season 7</option>
	<option value="shadow" cat="community">Shadow Cup</option>
	<option value="goteamup" cat="community">GO Stadium GOTeamUp</option>
	<option value="cliffhanger" cat="community">GO Stadium Cliffhanger</option>
    <option value="scoville" cat="community">Scoville Cup</option>
	<option value="mexico" cat="community">México Cup</option>
	<option value="kaiser" cat="community">Kaiser Invitational</option>
	<option value="jungle"  cat="tsa-1">叢林盃</option>
	<option value="rainbow" cat="tsa-1">彩虹盃</option>
	<option value="championships-1" cat="tsa-1">第一季冠軍賽</option>
	<option value="regionals-1" cat="tsa-1">第一季區域邀請賽</option>
	<option value="nightmare" cat="tsa-1">惡夢盃</option>
	<option value="kingdom" cat="tsa-1">王權盃</option>
	<option value="tempest" cat="tsa-1">風暴盃</option>
	<option value="twilight" cat="tsa-1">暮光盃</option>
	<option value="boulder" cat="tsa-1">巨石盃</option>
	<option value="catacomb" cat="tsa-2">Silph-2 深淵盃</option>
	<option value="continentals-2" cat="tsa-2">Silph-2 洲際賽</option>
	<option value="sorcerous" cat="tsa-2">Silph 魔幻盃</option>
    <option value="sorcerous-mirror" cat="tsa-2">Silph 魔幻盃 (Mirror)</option>
	<option value="forest" cat="tsa-2">森林盃-202005</option>
	<option value="voyager" cat="tsa-2">啟成盃/S2區域賽-202004</option>
	<option value="toxic" cat="tsa-2">猛毒盃</option>
	<option value="rose" cat="tsa-2">玫瑰盃</option>
	<option value="fusion" cat="tsa-2">融合盃</option>
	<option value="timeless" cat="tsa-2">永伴盃</option>
    <option value="timeless-mirror" cat="tsa-2">永伴盃 (Mirror)</option>
	<option value="ferocious" cat="tsa-2">猛獸盃</option>
    <option value="ferocious-mirror" cat="tsa-2">猛獸盃 (Mirror)</option>
	<option value="sinister" cat="tsa-2">魅靈盃</option>
    <option value="sinister-mirror" cat="tsa-2">魅靈盃 (Mirror)</option>
	<option value="circus" cat="tsa-2">Circus Cup</option>
	<option value="maelstrom" cat="tsa-2">Maelstrom Cup</option>
	<option value="origin" cat="tsa-2">Origin Cup</option>
	<option value="duet" cat="tsa-2">Duet Cup</option>
	<option value="sunrise" cat="tsa-3">Sunrise Cup</option>
	<option value="custom" cat="custom">自訂排名</option>
</select>
