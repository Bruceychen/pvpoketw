<select class="format-select">
	<option value="1500" cup="all" meta-group="great">超級聯盟</option>
	<option value="2500" cup="all" meta-group="ultra">高級聯盟</option>
	<option value="10000" cup="all" meta-group="master">大師聯盟</option>
	<option value="10000" cup="classic" meta-group="master">大師聯盟 (經典賽)</option>
    <option value="1500" cup="remix" meta-group="remix">超級聯盟 Remix</option>
    <option value="2500" cup="remix" meta-group="remixultra">高級聯盟 Remix</option>
    <option value="1500" cup="holiday" meta-group="holiday">假日盃</option>
    <option value="1500" cup="factions" meta-group="factions">Silph Factions (Comet)</option>
    <option value="1500" cup="twilightfactions" meta-group="twilight">Silph Factions (Twilight)</option>
    <option value="1500" cup="brawler" meta-group="brawler">Silph 擂台盃</option>
    <option value="1500" cup="glacial" meta-group="glacial">Silph 冰霸盃</option>

	<?php if(strpos($_SERVER['REQUEST_URI'], 'team-builder') !== false): ?>
		<option value="1500" cup="cliffhanger" meta-group="great">GO Stadium Cliffhanger</option>
	<?php endif; ?>
	<option value="1500" cup="custom">自訂排名</option>
</select>
