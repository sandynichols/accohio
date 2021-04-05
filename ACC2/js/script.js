
var ww = document.body.clientWidth;

$(document).ready(function() {
						   
// iOS Hover Event Class Fix
if((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i)) || (navigator.userAgent.match(/iPad/i))) {
$(".class li a").click(function(){  // Update class to point at the head of the list
});
}


	$(".nav li a").each(function() {
		if ($(this).next().length > 0) {
			$(this).addClass("parent");
		};
	})
	
	$(".toggleMenu").click(function(e) {
		e.preventDefault();
		$(this).toggleClass("active");
		$(".nav").toggle();
	});
	adjustMenu();
})

$(window).bind('resize orientationchange', function() {
	ww = document.body.clientWidth;
	adjustMenu();
});

var adjustMenu = function() {
	if (ww < 768) {
		$(".toggleMenu").css("display", "inline-block");
		if (!$(".toggleMenu").hasClass("active")) {
			$(".nav").hide();
		} else {
			$(".nav").show();
		}
		$(".nav li").unbind('mouseenter mouseleave');
		$(".nav li a.parent").unbind('click').bind('click', function(e) {
			// must be attached to anchor element to prevent bubbling
			e.preventDefault();
			$(this).parent("li").toggleClass("hover");
		});
	} 
	else if (ww >= 768) {
		$(".toggleMenu").css("display", "none");
		$(".nav").show();
		$(".nav li").removeClass("hover");
		$(".nav li a").unbind('click');
		$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		 	$(this).toggleClass('hover');
		});
	}	


  		
 $("#mysearch").click(function(){
  $(".mobilesearch").toggleClass("show");
  $("#mysearch").hide();
});


function makeAck() {
    //save acknowledgement to cookie
    $.ajax({
        method: 'POST',
        url: "/cookie-service.aspx?action=ack"
    }).done(function () {
        $('#cookieWarning').hide();
    });
}

$(function () {
    //cookie-service.aspx is the handler exists at the consumer side
    $('#cookie-banner').load('/cookie-service.aspx?action=load');
});


}

