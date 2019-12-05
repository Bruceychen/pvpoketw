$(".twGrowingCup").on("click", prepareGrowingCupTw);

function prepareGrowingCupTw(){
    var importData='{"name":"custom","title":"Custom","include":[{"filterType":"type","name":"屬性","values":[]}],"exclude":[{"filterType":"id","name":"指定寶可夢","values":["weezing_galarian","zigzagoon_galarian","linoone_galarian"]},{"filterType":"tag","name":"特殊類別寶可夢","values":["legendary","mythical"]}],"overrides":[],"league":1500}';
    $(".import").empty();
    $(".import").append(importData);
    $(".custom-rankings-import textarea.import").trigger("change");
    

    $(".simulate").click();
}