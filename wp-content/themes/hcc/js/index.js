$(document).ready( function () {
	console.log('ready')

	$('nav a[href="#"]').click( function (e){
		e.preventDefault();
		$(this).parent().find('.sub-menu').toggleClass('show-sub-menu')
	})
	$('nav a[href="#"]').append('<i class="fa fa-angle-down" style="margin-left: 0.5em;" aria-hidden="true"></i>')

	// $(window).scroll(function (){
	// 	if ($(window).scrollTop() > 300) {
	// 		console.log("yes")
	// 	} else {
	// 		console.log("no")
	// 	}
	// })
	function closeAllMenus (menu) {
		$(menu).removeClass('show-sub-menu')
	}
	//
	$('#menu-item-275').click(function(){
		closeAllMenus($('.mconsultas'));
		$('.mespecialidades').toggleClass('show-sub-menu')
	})
	$('#menu-item-276').click(function(){
		closeAllMenus($('.mespecialidades'));
		$('.mconsultas').toggleClass('show-sub-menu')
	})
})