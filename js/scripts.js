/*(PROGRESS BARS)*/
var pvideo = document.getElementById('putty-vid');
var pBar = document.getElementById('p');
pvideo.addEventListener('timeupdate', function() {
	var percent = Math.floor((100 / pvideo.duration) * pvideo.currentTime);
	pBar.value = percent;
	if (this.currentTime > 0) {
		document.getElementById("vid1-1").className = "playing";
		document.getElementById("vid1-2").classList.remove("playing");
		document.getElementById("vid1-3").classList.remove("playing");
		document.getElementById("vid1-4").classList.remove("playing");
		document.getElementById("vid1-5").classList.remove("playing");
		document.getElementById("vid1-6").classList.remove("playing");
	}
	if (this.currentTime > 31) {
		document.getElementById("vid1-2").className = "playing";
		document.getElementById("vid1-1").classList.remove("playing");
		document.getElementById("vid1-3").classList.remove("playing");
		document.getElementById("vid1-4").classList.remove("playing");
		document.getElementById("vid1-5").classList.remove("playing");
		document.getElementById("vid1-6").classList.remove("playing");
	}
	if (this.currentTime > 42) {
		document.getElementById("vid1-3").className = "playing";
		document.getElementById("vid1-1").classList.remove("playing");
		document.getElementById("vid1-2").classList.remove("playing");
		document.getElementById("vid1-4").classList.remove("playing");
		document.getElementById("vid1-5").classList.remove("playing");
		document.getElementById("vid1-6").classList.remove("playing");
	}
	if (this.currentTime > 53) {
		document.getElementById("vid1-4").className = "playing";
		document.getElementById("vid1-1").classList.remove("playing");
		document.getElementById("vid1-2").classList.remove("playing");
		document.getElementById("vid1-3").classList.remove("playing");
		document.getElementById("vid1-5").classList.remove("playing");
		document.getElementById("vid1-6").classList.remove("playing");
	}
	if (this.currentTime > 71) {
		document.getElementById("vid1-5").className = "playing";
		document.getElementById("vid1-1").classList.remove("playing");
		document.getElementById("vid1-2").classList.remove("playing");
		document.getElementById("vid1-3").classList.remove("playing");
		document.getElementById("vid1-4").classList.remove("playing");
		document.getElementById("vid1-6").classList.remove("playing");
	}
	if (this.currentTime > 82) {
		document.getElementById("vid1-6").className = "playing";
		document.getElementById("vid1-1").classList.remove("playing");
		document.getElementById("vid1-2").classList.remove("playing");
		document.getElementById("vid1-3").classList.remove("playing");
		document.getElementById("vid1-4").classList.remove("playing");
		document.getElementById("vid1-5").classList.remove("playing");
	}
}, false);
puttynav1 = document.getElementById('vid1-1');
puttynav2 = document.getElementById('vid1-2');
puttynav3 = document.getElementById('vid1-3');
puttynav4 = document.getElementById('vid1-4');
puttynav5 = document.getElementById('vid1-5');
puttynav6 = document.getElementById('vid1-6');
$(".vid-nav li a").click(function() {
	$(".vid-nav li a").removeClass("playing");
	$(this).addClass("playing");
});
puttynav1.addEventListener("click", function(event) {
	event.preventDefault();
	pvideo.currentTime = 1;
	pvideo.play();
	return false;
}, false);
puttynav2.addEventListener("click", function(event) {
	event.preventDefault();
	pvideo.currentTime = 32;
	pvideo.play();
	return false;
}, false);
puttynav3.addEventListener("click", function(event) {
	event.preventDefault();
	pvideo.currentTime = 43;
	pvideo.play();
	return false;
}, false);
puttynav4.addEventListener("click", function(event) {
	event.preventDefault();
	pvideo.currentTime = 54;
	pvideo.play();
	return false;
}, false);
puttynav5.addEventListener("click", function(event) {
	event.preventDefault();
	pvideo.currentTime = 72;
	pvideo.play();
	return false;
}, false);
puttynav6.addEventListener("click", function(event) {
	event.preventDefault();
	pvideo.currentTime = 83;
	pvideo.play();
	return false;
}, false);
puttyplay = document.getElementById('putty-toggle');
puttyplay.addEventListener("click", function(event) {
	event.preventDefault();
	pvideo.currentTime = 1;
	pvideo.play();
	return false;
}, false);
var ivideo = document.getElementById('injectable-vid');
var iBar = document.getElementById('i');
ivideo.addEventListener('timeupdate', function() {
	var percent = Math.floor((100 / ivideo.duration) * ivideo.currentTime);
	iBar.value = percent;
	if (this.currentTime > 0) {
		document.getElementById("vid2-1").className = "playing";
		document.getElementById("vid2-2").classList.remove("playing");
		document.getElementById("vid2-3").classList.remove("playing");
		document.getElementById("vid2-4").classList.remove("playing");
	}
	if (this.currentTime > 28) {
		document.getElementById("vid2-2").className = "playing";
		document.getElementById("vid2-1").classList.remove("playing");
		document.getElementById("vid2-3").classList.remove("playing");
		document.getElementById("vid2-4").classList.remove("playing");
	}
	if (this.currentTime > 56) {
		document.getElementById("vid2-3").className = "playing";
		document.getElementById("vid2-1").classList.remove("playing");
		document.getElementById("vid2-2").classList.remove("playing");
		document.getElementById("vid2-4").classList.remove("playing");
	}
	if (this.currentTime > 69) {
		document.getElementById("vid2-4").className = "playing";
		document.getElementById("vid2-1").classList.remove("playing");
		document.getElementById("vid2-2").classList.remove("playing");
		document.getElementById("vid2-3").classList.remove("playing");
	}
}, false);
injectnav1 = document.getElementById('vid2-1');
injectnav2 = document.getElementById('vid2-2');
injectnav3 = document.getElementById('vid2-3');
injectnav4 = document.getElementById('vid2-4');
injectnav1.addEventListener("click", function(event) {
	event.preventDefault();
	ivideo.currentTime = 0;
	ivideo.play();
	return false;
}, false);
injectnav2.addEventListener("click", function(event) {
	event.preventDefault();
	ivideo.currentTime = 30;
	ivideo.play();
	return false;
}, false);
injectnav3.addEventListener("click", function(event) {
	event.preventDefault();
	ivideo.currentTime = 58;
	ivideo.play();
	return false;
}, false);
injectnav4.addEventListener("click", function(event) {
	event.preventDefault();
	ivideo.currentTime = 70;
	ivideo.play();
	return false;
}, false);
injectplay = document.getElementById('injectable-toggle');
injectplay.addEventListener("click", function(event) {
	event.preventDefault();
	ivideo.currentTime = 0;
	ivideo.play();
	return false;
}, false);
$(document).ready(function() {
	var mainVideo = $('#putty-vid');
	var medQualVersionSrc = 'https://s3.amazonaws.com/osteonovus/vid/putty-mobile.mp4';
	var highQualVersionSrc = 'https://s3.amazonaws.com/osteonovus/vid/putty.mp4';
	if ($(window).width() < 400) {
		mainVideo.append("<source type='video/mp4' src='" + medQualVersionSrc + "' />");
	} else {
		mainVideo.append("<source type='video/mp4' src='" + highQualVersionSrc + "' />");
	}
});
$(document).ready(function() {
	var mainVideo2 = $('#injectable-vid');
	var medQualVersionSrc2 = 'https://s3.amazonaws.com/osteonovus/vid/injectable-mobile.mp4';
	var highQualVersionSrc2 = 'https://s3.amazonaws.com/osteonovus/vid/injectable.mp4';
	if ($(window).width() < 400) {
		mainVideo2.append("<source type='video/mp4' src='" + medQualVersionSrc2 + "' />");
	} else {
		mainVideo2.append("<source type='video/mp4' src='" + highQualVersionSrc2 + "' />");
	}
});
$(document).ready(function() {
	var pvideo = $('#putty-vid');
	var ivideo = $('#injectable-vid');
	$("#injectable-toggle").click(function() {
		$(pvideo).get(0).pause()
	});
	$("#putty-toggle").click(function() {
		$(ivideo).get(0).pause()
	});
});

document.getElementById('putty-vid').addEventListener('loadedmetadata', function() {
	this.currentTime = 1;
}, false);
document.getElementById('injectable-vid').addEventListener('loadedmetadata', function() {
	this.currentTime = 1;
}, false);

/* Switch Toggle Classes */
$(".toggle").on("click", ".init", function() {
	event.preventDefault();
    $(this).closest(".toggle").children('li:not(.init)').toggle();
});
var allOptions = $(".toggle").children('li:not(.init)');
$(".toggle").on("click", "li:not(.init)", function() {
	event.preventDefault();
	allOptions.removeClass('selected');
    $(this).addClass('selected');
    $(".toggle").children('.init').html($(this).html());
    allOptions.toggle();
});

$(".toggle2").on("click", ".init", function() {
	event.preventDefault();
    $(this).closest(".toggle2").children('li:not(.init)').toggle();
});
var allOptions2 = $(".toggle2").children('li:not(.init)');
$(".toggle2").on("click", "li:not(.init)", function() {
	event.preventDefault();
	allOptions2.removeClass('selected');
    $(this).addClass('selected');
    $(".toggle2").children('.init').html($(this).html());
    allOptions2.toggle();
});


//product-toggle
//zoom-toggle


/* Toggle Between Things */
$(document).ready(function() {
	$("#novogro a[data-toggle]").on("click", function(e) {
		e.preventDefault(); // prevent navigating
		//$("#novogro a[data-toggle]").removeClass("active");
		//$(this).addClass("active")
		$("#putty-vid, #injectable-vid, .toggle, progress, .vid-nav, .product-note").addClass("fast");
		var selector = $(this).data("toggle"); // get corresponding selector from data-toggle
		$("#novogro article").hide();
		$(selector).show();
	});
	$("#zoom a[data-toggle]").on("click", function(e) {
		e.preventDefault(); // prevent navigating
		//$("#zoom a[data-toggle]").removeClass("active");
		//$(this).addClass("active");
		var selector = $(this).data("toggle"); // get corresponding selector from data-toggle
		$("#zoom article").hide();
		$(selector).show();
		//Change Active Class of zoom nav
		$(".zoom-nav li.first").addClass("selected");
		$(".zoom-nav li.second").removeClass("selected");
		$(".zoom-nav li.third").removeClass("selected");
		$(".zoom-nav li.fourth").removeClass("selected");
	});
	$("#ct-toggle, #hist-toggle").on("click", function(e) {
		e.preventDefault(); // prevent navigating
		$(".image.second").addClass("hidden");
		$(".image.second").removeClass("visible");
		$(".image.third").removeClass("visible");
		$(".image.third").addClass("hidden");
		$(".image.fourth").removeClass("visible");
		$(".image.fourth").addClass("hidden");
		$(".image.first").removeClass("hidden");
		$(".image.first").addClass("visible");
		$(".zoom-text.second").removeClass("visible");
		$(".zoom-text.second").addClass("hidden");
		$(".zoom-text.third").removeClass("visible");
		$(".zoom-text.third").addClass("hidden");
		$(".zoom-text.fourth").removeClass("visible");
		$(".zoom-text.fourth").addClass("hidden");
		$(".zoom-text.first").removeClass("hidden");
		$(".zoom-text.first").addClass("visible");
		$(".zoom-text li.six").addClass("active");
		$(".zoom-text li.twelve").removeClass("active");
		$(".images").removeClass("twelve");
		$(".images").removeClass("six");
		$(".images").addClass("six");
	});
	$(".vid-nav, .zoom-nav a, .zoom-text-container li.six a, .zoom-text-container li.twelve a").click(function(event) {
		event.preventDefault();
	});
	// Add the selected class to the nav
	$(".zoom-nav li").click(function() {
		$(".zoom-nav li").removeClass("selected");
		$(this).addClass("selected");
	});
	//first circle
	$(".zoom-nav li.first").click(function() {
		$(".image.first").removeClass("hidden visible");
		$(".image.first").addClass("visible");
		$(".image.second").addClass("hidden");
		$(".image.second").removeClass("visible");
		$(".image.third").addClass("hidden");
		$(".image.third").removeClass("visible");
		$(".image.fourth").addClass("hidden");
		$(".image.fourth").removeClass("visible");
		$(".zoom-text.first").addClass("visible")
		$(".zoom-text.first").removeClass("hidden");
		$(".zoom-text.second").addClass("hidden")
		$(".zoom-text.second").removeClass("visible");
		$(".zoom-text.third").addClass("hidden");
		$(".zoom-text.third").removeClass("visible");
		$(".zoom-text.fourth").addClass("hidden");
		$(".zoom-text.fourth").removeClass("visible");
	});
	//Switch from 6 to 12
	$(".zoom-text.first li.six a").click(function() {
		$(".images").removeClass("twelve");
		$(".images").removeClass("six");
		$(".images").addClass("six");
	});
	$(".zoom-text.first li.twelve a").click(function() {
		$(".images").removeClass("six");
		$(".images").removeClass("twelve");
		$(".images").addClass("twelve");
	});
	//second circle
	$(".zoom-nav li.second").click(function() {
		$(".image.first").addClass("hidden");
		$(".image.first").removeClass("visible");
		$(".image.second").removeClass("hidden visible");
		$(".image.second").addClass("visible ");
		$(".image.third").addClass("hidden");
		$(".image.third").removeClass("visible");
		$(".image.fourth").addClass("hidden");
		$(".image.fourth").removeClass("visible");
		$(".zoom-text.first").addClass("hidden")
		$(".zoom-text.first").removeClass("visible");
		$(".zoom-text.second").addClass("visible")
		$(".zoom-text.second").removeClass("hidden");
		$(".zoom-text.third").addClass("hidden");
		$(".zoom-text.third").removeClass("visible");
		$(".zoom-text.fourth").addClass("hidden");
		$(".zoom-text.fourth").removeClass("visible");
	});
	//Switch from 6 to 12
	$(".zoom-text.second li.six a").click(function() {
		$(".images").removeClass("twelve");
		$(".images").removeClass("six");
		$(".images").addClass("six");
	});
	$(".zoom-text.second li.twelve a").click(function() {
		$(".images").removeClass("six");
		$(".images").removeClass("twelve");
		$(".images").addClass("twelve");
	});
	//third circle
	$(".zoom-nav li.third").click(function() {
		$(".image.first").addClass("hidden");
		$(".image.first").removeClass("visible");
		$(".image.second").removeClass("visible");
		$(".image.second").addClass("hidden");
		$(".image.third").removeClass("hidden twelve");
		$(".image.third").addClass("visible six");
		$(".image.fourth").addClass("hidden");
		$(".image.fourth").removeClass("visible");
		$(".zoom-text.first").addClass("hidden")
		$(".zoom-text.first").removeClass("visible");
		$(".zoom-text.second").addClass("hidden")
		$(".zoom-text.second").removeClass("visible");
		$(".zoom-text.third").addClass("visible");
		$(".zoom-text.third").removeClass("hidden");
		$(".zoom-text.fourth").addClass("hidden");
		$(".zoom-text.fourth").removeClass("visible");
	});
	//Switch from 6 to 12
	$(".zoom-text.third li.six a").click(function() {
		$(".images").removeClass("twelve");
		$(".images").removeClass("six");
		$(".images").addClass("six");
	});
	$(".zoom-text.third li.twelve a").click(function() {
		$(".images").removeClass("six");
		$(".images").removeClass("twelve");
		$(".images").addClass("twelve");
	});
	//fourth circle
	$(".zoom-nav li.fourth").click(function() {
		$(".image.first").addClass("hidden");
		$(".image.first").removeClass("visible");
		$(".image.second").removeClass("visible");
		$(".image.second").addClass("hidden");
		$(".image.third").removeClass("visible");
		$(".image.third").addClass("hidden");
		$(".image.fourth").removeClass("hidden twelve");
		$(".image.fourth").addClass("visible six");
		$(".zoom-text.first").addClass("hidden")
		$(".zoom-text.first").removeClass("visible");
		$(".zoom-text.second").addClass("hidden")
		$(".zoom-text.second").removeClass("visible");
		$(".zoom-text.third").addClass("hidden");
		$(".zoom-text.third").removeClass("visible");
		$(".zoom-text.fourth").addClass("visible");
		$(".zoom-text.fourth").removeClass("hidden");
	});
	//Switch from 6 to 12
	$(".zoom-text.fourth li.six a").click(function() {
		$(".images").removeClass("twelve");
		$(".images").removeClass("six");
		$(".images").addClass("six");
	});
	$(".zoom-text.fourth li.twelve a").click(function() {
		$(".images").removeClass("six");
		$(".images").removeClass("twelve");
		$(".images").addClass("twelve");
	});
	//Switch active from 6 to 12
	$(".zoom-text li.six a").click(function() {
		$(".zoom-text li.twelve").removeClass("active");
		$(".zoom-text li.six").addClass("active");
	});
	//Switch active from 12 to 6
	$(".zoom-text li.twelve a").click(function() {
		$(".zoom-text li.six").removeClass("active");
		$(".zoom-text li.twelve").addClass("active");
	});
});

$(".popup").click(function() {
	$(this).removeClass("fadein");
});
$(".home .logomark").css('opacity', 1).animate({
	opacity: .4
}, 3500);
$(document).ready(function() {
	$("#introMessage").delay(3500).queue(function(next){
	    $(this).css('display','none');
		next();
	});
});
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 197) {
		$('progress').removeClass('fixer');
		$('.vid-nav').removeClass('fixer');
		$('.scrolldown').removeClass('fixer');
		$('.novogro').removeClass('fixer');
		$('#novogro .toggle').removeClass('fixer');
		$('p.product-note').removeClass('fixer');
    }
    if (scroll <= 197) {
		$('progress').addClass('fixer');
		$('.vid-nav').addClass('fixer');
		$('.scrolldown').addClass('fixer');
		$('.novogro').addClass('fixer');
		$('#novogro .toggle').addClass('fixer');
		$('p.product-note').addClass('fixer');
    }
	//console.log(scroll);
});
$(window).resize(function () {
    var viewportHeight = $(window).height();
    if (viewportHeight < 600) {
		$('progress').addClass('fixer');
		$('.vid-nav').addClass('fixer');
		$('.scrolldown').addClass('fixer');
		$('.novogro').addClass('fixer');
		$('#novogro .toggle').addClass('fixer');
		$('p.product-note').addClass('fixer');
    }
	console.log(viewportHeight);
}); 
/*
$(document).ready(function() {
	$(window).scroll(function(){
	  $(".scrolldown").fadeOut("slow");
	});
});*/