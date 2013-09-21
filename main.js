$(function() {
	$("li.menu-root").click(function() {
		$(this).next(".menu-sub").fadeToggle();
	});
});
