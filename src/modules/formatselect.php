<select class="format-select">
	<option value="1500" cup="all" meta-group="great">超級聯盟</option>
	<option value="1500" cup="remix" meta-group="remix">超級聯盟 (Remix)</option>
	<option value="2500" cup="all" meta-group="ultra">高級聯盟</option>
	<option value="2500" cup="remix" meta-group="remixultra">高級聯盟 (Remix)</option>
	<option value="2500" cup="premier" meta-group="premierultra">高級聯盟 (紀念盃)</option>
	<option value="10000" cup="all" meta-group="master">大師聯盟</option>
	<option value="10000" cup="classic" meta-group="master">大師聯盟 (經典賽)</option>
    <option value="1500" cup="continentals-3" meta-group="continentals">Silph Continentals</option>
	<option value="1500" cup="factions" meta-group="factions">Silph Factions (Atlantis)</option>
	<option value="1500" cup="marsh" meta-group="marsh">7-Eleven Marsh Cup</option>

	<?php if(strpos($_SERVER['REQUEST_URI'], 'team-builder') !== false): ?>
		<option value="1500" cup="cliffhanger" meta-group="great">GO Stadium Cliffhanger</option>
	<?php endif; ?>
	<option value="1500" cup="custom">自訂排名</option>
</select>
