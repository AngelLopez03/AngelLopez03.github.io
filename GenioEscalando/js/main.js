// scroll up
/*
$(document).ready(function(){
	$('#button-up').click(function scrollUp() {
		var currentScroll = document.documentElement.scrollTop;
		if (currentScroll > 0) {
			window.requestAnimationFrame(scrollUp);
			window.scrollTo (0, currentScroll - (currentScroll / 15));
		}
	});
});

window.onscroll = function(){

	var scroll = document.documentElement.scrollTop;

	if (scroll > 500) {
		document.getElementById("button-up").style.transform = "scale(1)";
	} else if(scroll < 500){
		document.getElementById("button-up").style.transform = "scale(0)";
	}

}*/