/**
 * pvpoketw method for content translate
 * */

const debugMode = true;

function eliteXLPokemon(xlPokemon){
    var eliteXLPokemon = {
        'Azumarill':'瑪力露麗',
        'Sableye':'勾魂眼',
        'Medicham':'恰雷姆',
        'Bastiodon':'護城龍',
        'default':''
    };
    return (eliteXLPokemon[xlPokemon] || elitePMNotFound(xlPokemon));
}

function fastMoveArchetypeTranslate(archetype){
    var allArchetype = {
        'Multipurpose':'Multipurpose',
        'Fast Charge':'Fast Charge',
        'Low Quality':'Low Quality',
        'Heavy Damage':'Heavy Damage',
        'General':'General',
        'water':'水',
        'default':''
    };
    return (allArchetype[archetype] || archetypeNotFound("fastMove", archetype));
}

function chargedMoveArchetypeTranslate(archetype){
    var allArchetype = {
        'Boost':'Boost',
        'Boost Nuke':'Boost Nuke',
        'Boost Spam/Bait':'Boost Spam/Bait',
        'Coverage':'Coverage',
        'Coverage Nuke':'Coverage Nuke',
        'Coverage Spam/Bait':'Coverage Spam/Bait',
        'Debuff':'Debuff',
        'Debuff Nuke':'Debuff Nuke',
        'Debuff Spam/Bait':'Debuff Spam/Bait',
        'General':'General',
        'High Energy':'High Energy',
        'High Energy Coverage':'High Energy Coverage',
        'High Energy Debuff':'High Energy Debuff',
        'Neutral Nuke':'Neutral Nuke',
        'Neutral Spam/Bait':'Neutral Spam/Bait',
        'Nuke':'Nuke',
        'Self-Debuff':'Self-Debuff',
        'Self-Debuff Nuke':'Self-Debuff Nuke',
        'Self-Debuff Spam':'Self-Debuff Spam',
        'Spam/Bait':'Spam/Bait',
        'water':'水',
        'default':''
    };
    return (allArchetype[archetype] || archetypeNotFound("chargedMove", archetype));
}

function typeTranslate(type){
    var allTypes = {
        'bug':'蟲',
        'dark':'惡',
        'dragon':'龍',
        'electric':'電',
        'fairy':'妖精',
        'fighting':'格鬥',
        'fire':'火',
        'flying':'飛行',
        'ghost':'幽靈',
        'grass':'草',
        'ground':'地面',
        'ice':'冰',
        'normal':'一般',
        'poison':'毒',
        'psychic':'超能力',
        'rock':'岩石',
        'steel':'鋼',
        'water':'水',
        'default':''
    };
    return (allTypes[type] || allTypes['default']);
}

function fastmoveAbbreviationArrTranslate(fastmove){
    var allFastmoves = {
        'RTh':'落石',
        'E':'火花',
        'FC':'連斬',
        'PS':'細雪',
        'C' :'雙倍奉還',
        'AS':'空氣斬',
        'RL':'飛葉快刀',
        'IS':'冰礫',
        'Cf':'念力',
        'PC':'精神利刃',
        'LO':'鎖定',
        'VW':'藤鞭',
        'B':'泡沫',
        'SD':'擊落',
        'MS':'泥巴射擊',
        'SC':'暗影爪',
        'DB':'龍息',
        'Ch':'撒嬌',
        'Sn':'大聲咆哮',
        'H':'禍不單行',
        'Sp':'電光',
        'VS':'伏特替換',
        'FS':'火焰旋渦',
        'TS':'電擊',
        'BS':'種子機關槍',
        'PJ':'毒擊',
        'I':'燒盡',
        'WA':'翅膀攻擊',
        'L':'舌舔',
        'W':'攀瀑',
        'BP':'子彈拳',
        'DT':'龍尾',
        'WG':'水槍',
        'MSl':'擲泥',
        'FF':'火焰牙',
        'G' :'起風',
        'PSt' :'毒針',
        'QA' :'電光一閃',
        'Bi' :'咬住',
        'Pd' :'拍擊',
        'BBi' :'蟲咬',
        'IF' :'冰凍牙',
        'default':''
    };
    // return (allFastmoves[fastmove] || allFastmoves['default']);
    return (allFastmoves[fastmove] || movesNotFound("fast",fastmove));
}

function chargemoveAbbreviationArrTranslate(chargemove){
    var allSpecialmoves = {
        'F':'遷怒',
        'Ov':'過熱',
        'HW':'熱風',
        'BBu':'蟲鳴',
        'DD':'破滅之願',
        'PG':'力量寶石',
        'LT':'青草攪拌器',
        'Pbk':'以牙還牙',
        'EB':'能量球',
        'WBI' :'氣象球 冰',
        'PB' :'精神突進',
        'RS' :'岩崩',
        'AA' :'燕返',
        'LB' :'葉刃',
        'IW' :'冰凍之風',
        'WP' :'水之波動',
        'FiP' :'火焰拳',
        'TP' :'雷電拳',
        'GK' :'打草結',
        'M' :'月亮之力',
        'CrC' :'十字劈',
        'FC' :'加農光炮',
        'SA' :'神鳥猛擊',
        'BrB' :'勇鳥猛攻',
        'FB' :'真氣彈',
        'FP' :'瘋狂植物',
        'SlB' :'污泥炸彈',
        'HP' :'水炮',
        'IB' :'冰凍光束',
        'MB' :'泥巴炸彈',
        'WC' :'瘋狂伏特',
        'S' :'衝浪',
        'Eq' :'地震',
        'Ft' :'噴射火焰',
        'SE' :'尖石攻擊',
        'DgP' :'龍之波動',
        'MM' :'彗星拳',
        'P' :'精神強念',
        'PR' :'嬉鬧',
        'FoP' :'欺詐',
        'PUP' :'增強拳',
        'LR' :'珍藏',
        'Tb' :'十萬伏特',
        'HC' :'加農水砲',
        'SW' :'污泥波',
        'AS' :'酸液炸彈',
        'IP' :'冰凍拳',
        'P' :'精神強念',
        'Bl' :'暴風雪',
        'SkB' :'火箭頭錘',
        'SB' :'暗影球',
        'SoB' :'日光束',
        'WBF' :'氣象球 火',
        'GS' :'垃圾射擊',
        'NS' :'暗襲要害',
        'Re' :'報恩',
        'BC' :'骨棒',
        'SBo' :'暗影之骨',
        'D' :'放電',
        'Lu' :'猛撲',
        'SP' :'蠻力',
        'BS' :'泰山壓頂',
        'Bd' :'重踏',
        'PW' :'強力鞭打',
        'T' :'打雷',
        'CC' :'近身戰',
        'ShP' :'暗影拳',
        'BuB' :'泡沫光線',
        'FmC' :'蓄能焰襲',
        'DC' :'龍爪',
        'EP' :'大地之力',
        'FiB' :'大字爆炎',
        'OW' :'奇異之風',
        'AT' :'水流尾',
        'Cr' :'咬碎',
        'DR' :'直衝鑽',
        'Mh' :'超級角擊',
        'DP' :'惡之波動',
        'FS' :'預知未來',
        'AP' :'原始之力',
        'Hu' :'暴風',
        'SS' :'影子偷襲',
        'DG' :'魔法閃耀',
        'XS' :'十字剪',
        'BB' :'爆炸烈焰',
        'WBW' :'氣象球 水',
        'DrlP' :'啄鑽',
        'IH' :'鐵頭',
        'A' :'氣旋攻擊',
        'O' :'逆鱗',
        'Pst' :'精神擊破',
        'DM' :'流星群',
        'Av' :'雪崩',
        'Oc' :'章魚桶炮',
        'MrS' :'鏡光射擊',
        'DyP' :'爆裂拳',
        'BK' :'火焰踢',
        'SeB' :'種子炸彈',
        'St' :'踩踏',
        'ST' :'流沙地獄',
        'HS' :'重磅衝撞',
        'RW' :'岩石炮',
        'Psh' :'精神衝擊',
        'RB' :'岩石爆擊',
        'HB' :'破壞光線',
        'FeS' :'致命針刺',
        'Sy' :'同步干擾',
        'LfS' :'飛葉風暴',
        'PF':'劇毒牙',
        'FrD':'羽毛舞',
        'MW':'濁流',
        'Wr':'緊束',
        'AJ':'水流噴射',
        'Crbh':'蟹鉗錘',
        'FmB':'蓄能焰襲',
        'TBB':'高科技光炮 火',
        'CP' :'十字毒刃',
        'AB' :'極光束',
        'FlP' :'飛身重壓',
        'MgB' :'磁鐵炸彈',
        'BkB' :'劈瓦',
        'SvW' :'銀色旋風',
        'default':''
    };
    // return (allSpecialmoves[chargemove] || allSpecialmoves['default']);
    return (allSpecialmoves[chargemove] || movesNotFound("special", chargemove));

}

function individualMovesHandler(movesetStr){
    var outputMovesetStr = "";
    movesetArr = movesetArrHandler(movesetStr);

    if(movesetArr.length<3){
        outputMovesetStr =
            fastmoveAbbreviationArrTranslate(movesetArr[0])
            + "+"
            + chargemoveAbbreviationArrTranslate(movesetArr[1]);
    }else{
        outputMovesetStr =
            fastmoveAbbreviationArrTranslate(movesetArr[0])
            + "+"
            + chargemoveAbbreviationArrTranslate(movesetArr[1])
            + "/" + chargemoveAbbreviationArrTranslate(movesetArr[2]);
    }
    return outputMovesetStr;
}

function teamMovesHandler(movesetStr){
    var outputMovesetStr = "";
    movesetArr = movesetArrHandler(movesetStr);

    if(movesetArr.length<3){
        outputMovesetStr =
            fastmoveAbbreviationArrTranslate(movesetArr[0])
            + "/"
            + chargemoveAbbreviationArrTranslate(movesetArr[1]);
    }else{
        outputMovesetStr =
            fastmoveAbbreviationArrTranslate(movesetArr[0])
            + "/"
            + chargemoveAbbreviationArrTranslate(movesetArr[1])
            + "/" + chargemoveAbbreviationArrTranslate(movesetArr[2]);
    }
    return outputMovesetStr;
}

function movesetArrHandler(movesetStr){
    return movesetStr.split(/\+|\//);
}

function movesNotFound(type, moves){
    if(debugMode){
        console.log(type + " moves abbrev.: "+ moves + " not found.");
    }
    return moves;
}

function archetypeNotFound(moveType, archetype){
    if(debugMode){
        console.log(moveType + " archetype: \""+ archetype + "\" not found.");
    }
    return archetype;
}

function elitePMNotFound(elitePMName){
    // if(debugMode){
    if(false){
        console.log(" elite pokemon: \""+ elitePMName + "\" not found.");
    }
    return elitePMName;
}
