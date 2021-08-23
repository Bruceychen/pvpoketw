<select class="format-select">
	<option value="1500" cup="all" meta-group="great">超級聯盟</option>
	<option value="2500" cup="all" meta-group="ultra">高級聯盟</option>
	<option value="2500" cup="premier" meta-group="premierultra">高級聯盟 (紀念盃)</option>
	<option value="10000" cup="all" meta-group="master">大師聯盟</option>
	<option value="10000" cup="classic" meta-group="master">大師聯盟 (經典賽)</option>
    <option value="1500" cup="factions" meta-group="factions">Silph Factions (Dungeon)</option>
    <option value="1500" cup="nightfall" meta-group="nightfall">Silph Factions (Nightfall)</option>
    <option value="1500" cup="worlds" meta-group="great">Silph Worlds</option>

	<?php if(strpos($_SERVER['REQUEST_URI'], 'team-builder') !== false): ?>
		<option value="1500" cup="cliffhanger" meta-group="great">GO Stadium Cliffhanger</option>
	<?php endif; ?>
	<option value="1500" cup="custom">自訂排名</option>
</select>
