<select class="cup-select">
	<option value="all" cup="all" meta-group500="littlegeneral" meta-group1500="great" meta-group2500="ultra" meta-group10000="master">Open League</option>
</select>

<script>
	// Dynamically add current formats to the format dropdown
	function updateCupSelect(formats, interfaceMaster){
		for(var i = 0; i < formats.length; i++){
			if(formats[i].showCup){
				$format = $("<option>"+formats[i].title+"</option>");
				$format.attr("value", formats[i].cup);
				$format.attr("meta-group"+formats[i].cp, formats[i].meta);
				$format.attr("cp", formats[i].cp);

				$(".cup-select").append($format);
			}
		}
	}

</script>
<!--保留但註解下述資料供未來翻譯參考-->
<!--<select class="cup-select">-->
<!--	<option value="all" cat="all">全部寶可夢</option>-->
<!--	<option value="gen-5" cat="all">全部寶可夢 (含未開放五世代寶可夢)</option>-->
<!--	<option value="premier" cat="official">紀念盃</option>-->
<!--    <option value="flying" cat="official">飛行盃</option>-->
<!--	<option value="halloween" cat="official">萬聖節</option>-->
<!--	<option value="kanto" cat="official">關都盃</option>-->
<!--    <option value="love" cat="official">愛情盃</option>-->
<!--    <option value="retro" cat="official">復古盃</option>-->
<!--    <option value="remix" cat="official">Remix</option>-->
<!--	<option value="little" cat="official">小小盃</option>-->
<!--	<option value="element" cat="official">元素盃</option>-->
<!--    <option value="bidoof" cat="official">大牙狸盃</option>-->
<!--    <option value="holiday" cat="official">假日盃</option>-->
<!--    <option value="sinnoh" cat="official">神奧盃</option>-->
<!--    <option value="classic" cat="official">大師經典賽 (XL 禁止)</option>-->
<!--    <option value="littlejungle" cat="official">叢林小小盃</option>-->
<!--	<option value="safari" cat="community">Montreal Safari Cup</option>-->
<!--	<option value="fantasy" cat="community">GO LIVE Fantasy Cup</option>-->
<!--	<option value="beam" cat="community">Get Beamed</option>-->
<!--	<option value="grunt" cat="community">Grunt Cup Season 7</option>-->
<!--	<option value="shadow" cat="community">Shadow Cup</option>-->
<!--	<option value="goteamup" cat="community">GO Stadium GOTeamUp</option>-->
<!--	<option value="cliffhanger" cat="community">GO Stadium Cliffhanger</option>-->
<!--    <option value="uber" cat="community">Uber Tier Cup</option>-->
<!--    <option value="scoville" cat="community">Scoville Cup</option>-->
<!--	<option value="mexico" cat="community">México Cup</option>-->
<!--	<option value="kaiser" cat="community">Kaiser Invitational</option>-->
<!--	<option value="cerberus" cat="community">VR Cerberus Cup</option>-->
<!--	<option value="ou" cat="community">PoGoRaids Overused Tournament</option>-->
<!--	<option value="slitzko" cat="community">Slitzko Cup</option>-->
<!--    <option value="johto" cat="community">Johto Cup</option>-->
<!--    <option value="adl" cat="community">ADL</option>-->
<!--    <option value="cutie" cat="community">Cutie Cup</option>-->
<!--    <option value="unity" cat="community">Unity Cup</option>-->
<!--    <option value="comet" cat="community">Comet Cup</option>-->
<!--	<option value="jungle"  cat="tsa-1">叢林盃</option>-->
<!--	<option value="rainbow" cat="tsa-1">彩虹盃</option>-->
<!--	<option value="championships-1" cat="tsa-1">第一季冠軍賽</option>-->
<!--	<option value="regionals-1" cat="tsa-1">第一季區域邀請賽</option>-->
<!--	<option value="nightmare" cat="tsa-1">惡夢盃</option>-->
<!--	<option value="kingdom" cat="tsa-1">王權盃</option>-->
<!--	<option value="tempest" cat="tsa-1">風暴盃</option>-->
<!--	<option value="twilight" cat="tsa-1">暮光盃</option>-->
<!--    <option value="twilightfactions" cat="tsa-1">Twilight Cup</option>-->
<!--	<option value="boulder" cat="tsa-1">巨石盃</option>-->
<!--	<option value="catacomb" cat="tsa-2">Silph-2 深淵盃</option>-->
<!--	<option value="continentals-2" cat="tsa-2">Silph-2 洲際賽</option>-->
<!--	<option value="sorcerous" cat="tsa-2">Silph 魔幻盃</option>-->
<!--	<option value="sorcerous-mirror" cat="tsa-2">Silph 魔幻盃 (Mirror)</option>-->
<!--	<option value="forest" cat="tsa-2">森林盃-202005</option>-->
<!--	<option value="voyager" cat="tsa-2">啟成盃/S2區域賽-202004</option>-->
<!--	<option value="toxic" cat="tsa-2">猛毒盃</option>-->
<!--	<option value="rose" cat="tsa-2">玫瑰盃</option>-->
<!--	<option value="fusion" cat="tsa-2">融合盃</option>-->
<!--    <option value="fusionfactions" cat="tsa-2">Fusion Cup</option>-->
<!--	<option value="timeless" cat="tsa-2">永伴盃</option>-->
<!--	<option value="timeless-mirror" cat="tsa-2">永伴盃 (Mirror)</option>-->
<!--	<option value="ferocious" cat="tsa-2">猛獸盃</option>-->
<!--	<option value="ferocious-mirror" cat="tsa-2">猛獸盃 (Mirror)</option>-->
<!--	<option value="sinister" cat="tsa-2">魅靈盃</option>-->
<!--	<option value="sinister-mirror" cat="tsa-2">魅靈盃 (Mirror)</option>-->
<!--	<option value="circus" cat="tsa-2">Circus Cup</option>-->
<!--	<option value="maelstrom" cat="tsa-2">Maelstrom Cup</option>-->
<!--	<option value="origin" cat="tsa-2">Origin Cup</option>-->
<!--	<option value="duet" cat="tsa-2">Duet Cup</option>-->
<!--	<option value="sunrise" cat="tsa-3">晨曦盃</option>-->
<!--	<option value="marsh" cat="tsa-3">沼澤盃</option>-->
<!--	<option value="nightfall" cat="tsa-3">夜幕盃</option>-->
<!--	<option value="labyrinth" cat="tsa-3">迷宮盃</option>-->
<!--	<option value="vortex" cat="tsa-3">漩渦盃</option>-->
<!--	<option value="prismatic" cat="tsa-3">稜鏡盃</option>-->
<!--	<option value="commander" cat="tsa-3">上將盃</option>-->
<!--    <option value="venture" cat="tsa-3">Venture Cup</option>-->
<!--    <option value="continentals-3" cat="tsa-3">Continentals</option>-->
<!--	<option value="factions" cat="tsa-3">Floating City</option>-->
<!--    <option value="worlds" cat="tsa-3">Silph Worlds</option>-->
<!--    <option value="lunar" cat="tsa-4">Silph 新月盃</option>-->
<!--    <option value="brawler" cat="tsa-4">Silph 擂台盃</option>-->
<!--    <option value="glacial" cat="tsa-4">Silph 冰霸盃</option>-->
<!--	<option value="custom" cat="custom">自訂排名</option>-->
<!--</select>-->
