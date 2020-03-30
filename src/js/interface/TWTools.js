/**
 * 屬性轉換
* */
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