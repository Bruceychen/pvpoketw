// JavaScript Document

function Main(){

	var interface;
	var gm;
	var rss;

	init();

	function init(){
		interface = InterfaceMaster.getInstance();
		gm = GameMaster.getInstance();
		rss = RSS.getInstance();
	}

	this.getGM = function(){
		return gm;
	}
}

var main = new Main();
