$(".twPlagueCup").on("click", preparePlagueCupTw);

function preparePlagueCupTw(){
    var importData='{"name":"custom","title":"Custom","include":[{"filterType":"type","name":"屬性","values":["fighting","poison","psychic","water"]}],"exclude":[],"overrides":[],"league":1500}';
    $(".import").empty();
    $(".import").append(importData);
    $(".custom-rankings-import textarea.import").trigger("change");
    

    $(".simulate").click();
}