/**
 * 屬性轉換
* */

const debugMode = true;

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
        'default':''
    };
    // return (allFastmoves[fastmove] || allFastmoves['default']);
    return (allFastmoves[fastmove] || movesNotFound("fast",fastmove));
}

function chargemoveAbbreviationArrTranslate(chargemove){
    var allSpecialmoves = {
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