// Search input handler

$(function(){
	var searchTimeout;
	var searchStr = '';
	var $target = null;

	$("body").on("keyup", ".poke-search[context='ranking-search']", function(e){
		searchStr = $(this).val().toLowerCase();

		$target = $(e.target).closest(".poke-search-container");

		// Reset the timeout when a new key is typed. This prevents queries from being submitted too quickly and bogging things down on mobile.
		window.clearTimeout(searchTimeout);
		searchTimeout = window.setTimeout(submitSearchQuery, 200);
	});

	$("a.search-info").click(function(e){
		e.preventDefault();
		modalWindow("Search Strings", $(".sandbox-search-strings"));
	});

	function submitSearchQuery(){
		var list = GameMaster.getInstance().generatePokemonListFromSearchString(searchStr);

		$target.siblings(".rankings-container").find(".rank").each(function(index, value){
			var id = $(this).attr("data");

			if((list.indexOf(id) > -1)||(! id)){
				$(this).show();
			} else{
				$(this).hide();
			}
		});
	}
})
