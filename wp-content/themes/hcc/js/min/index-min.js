$(document).ready(function(){function e(){$(".submenu").removeClass("show-sub-menu")}console.log("ready"),$('nav a[href="#"]').click(function(e){e.preventDefault(),$(this).parent().find(".sub-menu").toggleClass("show-sub-menu")}),$('nav a[href="#"]').append('<i class="fa fa-angle-down" style="margin-left: 0.5em;" aria-hidden="true"></i>'),$("#menu-item-275").click(function(){e(),$(".mespecialidades").toggleClass("show-sub-menu")}),$("#menu-item-276").click(function(){e(),$(".mconsultas").toggleClass("show-sub-menu")})});