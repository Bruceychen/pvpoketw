$(".twRainbowCup").on("click", prepareRainbowCupTw);

function prepareRainbowCupTw(){
    var importData='{"name":"custom","title":"Custom","include":[{"filterType":"type","name":"Type","values":["bug","electric","fire","grass","water"]},{"filterType":"dex","name":"Pokedex Number","values":[1,386]}],"exclude":[{"filterType":"tag","name":"Tag","values":["alolan"]},{"filterType":"id","name":"Species","values":["zapdos","moltres"]}],"overrides":[{"speciesId":"azumarill","fastMove":"BUBBLE","chargedMoves":["ICE_BEAM","PLAY_ROUGH"]},{"speciesId":"forretress","fastMove":"BUG_BITE","chargedMoves":["ROCK_TOMB","EARTHQUAKE"]},{"speciesId":"ivysaur","fastMove":"VINE_WHIP","chargedMoves":["POWER_WHIP","SLUDGE_BOMB"]},{"speciesId":"quagsire","fastMove":"MUD_SHOT","chargedMoves":["EARTHQUAKE","STONE_EDGE"]},{"speciesId":"raichu","fastMove":"THUNDER_SHOCK","chargedMoves":["THUNDER_PUNCH","WILD_CHARGE"]},{"speciesId":"tropius","fastMove":"AIR_SLASH","chargedMoves":["LEAF_BLADE","AERIAL_ACE"]}],"league":1500}';
    $(".import").empty();
    $(".import").append(importData);
    $(".custom-rankings-import textarea.import").trigger("change");
    

    $(".simulate").click();
}