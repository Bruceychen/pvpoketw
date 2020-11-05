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
				var theme = $("#theme-select option:selected").val();
				var matrixDirection = $("#matrix-direction option:selected").val();
				var gamemaster = $("#gm-select option:selected").val();
				var pokeboxId = $("#pokebox-id").val();

				$.ajax({

					url : host+'data/settingsCookie.php',
					// url :'http://pvpoketw.com/data/settingsCookie.php',
					type : 'POST',
					data : {
						'defaultIVs' : defaultIVs,
						'animateTimeline' : animateTimeline,
						'theme': theme,
						'matrixDirection': matrixDirection,
						'gamemaster': gamemaster,
						'pokeboxId': pokeboxId,
						'pokeboxLastDateTime': settings.pokeboxLastDateTime
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
