<select class="format-select">
	<option value="1500" cup="all" meta-group="great">超級聯盟</option>
	<option value="2500" cup="all" meta-group="ultra">高級聯盟</option>
    <option value="2500" cup="premierclassic" meta-group="ultrapremierclassic">高級聯盟 (紀念盃經典賽)</option>
	<option value="10000" cup="all" meta-group="master">大師聯盟</option>
	<option value="10000" cup="classic" meta-group="master">大師聯盟 (經典賽)</option>
    <option value="10000" cup="premierclassic" meta-group="masterpremierclassic">大師聯盟 (紀念盃經典賽)</option>
    <option value="1500" cup="halloween" meta-group="halloween">萬聖節盃</option>
    <option value="1500" cup="factions" meta-group="factions">Silph Factions (Comet)</option>
    <option value="1500" cup="twilightfactions" meta-group="twilight">Silph Factions (Twilight)</option>
    <option value="1500" cup="lunar" meta-group="lunar">Silph 新月盃</option>
    <option value="1500" cup="brawler" meta-group="lunar">Silph Brawler Cup</option>
    <option value="1500" cup="adl" meta-group="great">Arrohh Draft League</option>

	<?php if(strpos($_SERVER['REQUEST_URI'], 'team-builder') !== false): ?>
		<option value="1500" cup="cliffhanger" meta-group="great">GO Stadium Cliffhanger</option>
	<?php endif; ?>
	<option value="1500" cup="custom">自訂排名</option>
</select>
