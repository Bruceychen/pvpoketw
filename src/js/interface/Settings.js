// JavaScript Document

var InterfaceMaster = (function () {
    var instance;

    function createInstance() {


        var object = new interfaceObject();

		function interfaceObject(){

			this.init = function(){
				$("body").on("click", ".check", checkBox);
				$(".save.button").click(saveSettings);
			};

			// Given a name, save current list to a cookie

			function saveSettings(e){

				var defaultIVs = $("#default-ivs option:selected").val();
				var animateTimeline = $(".check.animate-timeline").hasClass("on") ? 1 : 0;
				var ads = $(".check.ads").hasClass("on") ? 1 : 0;
				var theme = $("#theme-select option:selected").val();
				var gamemaster = $("#gm-select option:selected").val();
				var pokeboxId = $("#pokebox-id").val();
				var xls = $(".check.xls").hasClass("on") ? 1 : 0;
				var rankingDetails = $("#ranking-details option:selected").val();
				var hardMovesetLinks = $(".check.hard-moveset-links").hasClass("on") ? 1 : 0;
				var colorblindMode = $(".check.colorblindMode").hasClass("on") ? 1 : 0;

				$.ajax({

					url : '../data/settingsCookie.php',
					// url : host+'data/settingsCookie.php',
					type : 'POST',
					data : {
						'defaultIVs' : defaultIVs,
						'animateTimeline' : animateTimeline,
						'theme': theme,
						'matrixDirection': "row",
						'gamemaster': gamemaster,
						'pokeboxId': pokeboxId,
						'pokeboxLastDateTime': settings.pokeboxLastDateTime,
						'ads': ads,
						'xls': xls,
						'rankingDetails': rankingDetails,
						'hardMovesetLinks': hardMovesetLinks,
						'colorblindMode': colorblindMode
					},
					dataType:'json',
					success : function(data) {
						modalWindow("設定已儲存", $("<p>設定值已完成更新。(如果是變動網站外觀的設定需要刷新(refresh)一次才會生效。)</p>"))
					},
					error : function(request,error)
					{
						console.log("Request: "+JSON.stringify(request));
						console.log(error);
					}
				});
			}

			// Turn checkboxes on and off

			function checkBox(e){
				$(this).toggleClass("on");

				if($(this).hasClass("colorblindMode")){
					if($(this).hasClass("on")){
						$("body").addClass("colorblind");
					} else{
						$("body").removeClass("colorblind");
					}
				}
			}

		};

        return object;
    }

    return {
        getInstance: function () {
            if (!instance) {
                instance = createInstance();
            }
            return instance;
        }
    };
})();
