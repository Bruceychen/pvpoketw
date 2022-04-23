<select class="format-select">
	<option value="1500" cup="all" meta-group="great">超級聯盟</option>
	<option value="2500" cup="all" meta-group="ultra">高級聯盟</option>
	<option value="10000" cup="all" meta-group="master">大師聯盟</option>
	<option value="10000" cup="classic" meta-group="master">大師聯盟 (經典賽)</option>
    <option value="1500" cup="retro" meta-group="retro">復古盃</option>
    <option value="1500" cup="kanto" meta-group="kanto">關都盃</option>
    <option value="1500" cup="nemesis" meta-group="nemesis">Silph 勁敵盃</option>
    <option value="1500" cup="firefly" meta-group="firefly">Silph 流螢盃</option>
    <option value="2500" cup="cometultra" meta-group="cometultra">Silph Factions (Ultra Comet)</option>
    <option value="1500" cup="floatingcity" meta-group="floatingcity">Silph Factions (Floating City)</option>
    <option value="1500" cup="dungeon" meta-group="dungeon">Silph Factions (Dungeon)</option>

	<?php if(strpos($_SERVER['REQUEST_URI'], 'team-builder') !== false): ?>
		<option value="1500" cup="cliffhanger" meta-group="great">GO Stadium Cliffhanger</option>
	<?php endif; ?>
	<option value="1500" cup="custom">自訂排名</option>
</select>
