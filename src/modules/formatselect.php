<select class="format-select">
	<option value="1500" cup="all" meta-group="great">超級聯盟</option>
	<option value="2500" cup="all" meta-group="ultra">高級聯盟</option>
    <option value="2500" cup="premierclassic" meta-group="ultrapremierclassic">高級紀念經典賽</option>
	<option value="10000" cup="all" meta-group="master">大師聯盟</option>
	<option value="10000" cup="classic" meta-group="master">大師聯盟 (經典賽)</option>
    <option value="1500" cup="johto" meta-group="johto">城都盃</option>
    <option value="1500" cup="guardian" meta-group="guardian">Silph 守護者盃</option>
    <option value="1500" cup="obsidian" meta-group="obsidian">Silph 黑曜盃</option>
    <option value="1500" cup="factions" meta-group="factions">Silph Factions (Cave)</option>
    <option value="1500" cup="fusionfactions" meta-group="fusion">Silph Factions (Fusion)</option>

	<?php if(strpos($_SERVER['REQUEST_URI'], 'team-builder') !== false): ?>
		<option value="1500" cup="cliffhanger" meta-group="great">GO Stadium Cliffhanger</option>
	<?php endif; ?>
	<option value="1500" cup="custom">自訂排名</option>
</select>
