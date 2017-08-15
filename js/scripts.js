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
   if (this.currentTime > 31 ) {
 	  document.getElementById("vid1-2").className = "playing";
 	  document.getElementById("vid1-1").classList.remove("playing");
 	  document.getElementById("vid1-3").classList.remove("playing");
 	  document.getElementById("vid1-4").classList.remove("playing");
 	  document.getElementById("vid1-5").classList.remove("playing");
 	  document.getElementById("vid1-6").classList.remove("playing");
    }
    if (this.currentTime > 42 ) {
  	  document.getElementById("vid1-3").className = "playing";
  	  document.getElementById("vid1-1").classList.remove("playing");
  	  document.getElementById("vid1-2").classList.remove("playing");
  	  document.getElementById("vid1-4").classList.remove("playing");
  	  document.getElementById("vid1-5").classList.remove("playing");
  	  document.getElementById("vid1-6").classList.remove("playing");
     }
     if (this.currentTime > 53 ) {
   	  document.getElementById("vid1-4").className = "playing";
   	  document.getElementById("vid1-1").classList.remove("playing");
   	  document.getElementById("vid1-2").classList.remove("playing");
   	  document.getElementById("vid1-3").classList.remove("playing");
   	  document.getElementById("vid1-5").classList.remove("playing");
   	  document.getElementById("vid1-6").classList.remove("playing");
      }
     if (this.currentTime > 71 ) {
      document.getElementById("vid1-5").className = "playing";
      document.getElementById("vid1-1").classList.remove("playing");
      document.getElementById("vid1-2").classList.remove("playing");
      document.getElementById("vid1-3").classList.remove("playing");
      document.getElementById("vid1-4").classList.remove("playing");
      document.getElementById("vid1-6").classList.remove("playing");
       }
     if (this.currentTime > 82 ) {
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
$(".vid-nav li a" ).click(function () {
	$(".vid-nav li a").removeClass("playing");
	$(this).addClass("playing"); 
});
puttynav1.addEventListener("click", function (event) {
    event.preventDefault();
    pvideo.currentTime = 0;
    pvideo.play();
	return false;
}, false);
puttynav2.addEventListener("click", function (event) {
    event.preventDefault();
    pvideo.currentTime = 32;
    pvideo.play();
	return false;
}, false);
puttynav3.addEventListener("click", function (event) {
    event.preventDefault();
    pvideo.currentTime = 43;
    pvideo.play();
	return false;
}, false);
puttynav4.addEventListener("click", function (event) {
    event.preventDefault();
    pvideo.currentTime = 54;
    pvideo.play();
	return false;
}, false);
puttynav5.addEventListener("click", function (event) {
    event.preventDefault();
    pvideo.currentTime = 72;
    pvideo.play();
	return false;
}, false);
puttynav6.addEventListener("click", function (event) {
    event.preventDefault();
    pvideo.currentTime = 83;
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
injectnav1.addEventListener("click", function (event) {
    event.preventDefault();
    ivideo.currentTime = 0;
    ivideo.play();
	return false;
}, false);
injectnav2.addEventListener("click", function (event) {
    event.preventDefault();
    ivideo.currentTime = 30;
    ivideo.play();
	return false;
}, false);
injectnav3.addEventListener("click", function (event) {
    event.preventDefault();
    ivideo.currentTime = 58;
    ivideo.play();
	return false;
}, false);
injectnav4.addEventListener("click", function (event) {
    event.preventDefault();
    ivideo.currentTime = 70;
    ivideo.play();
	return false;
}, false);

/* Toggle Between */

$(document).ready(function() {
	$("#novogro a[data-toggle]").on("click", function(e) {
	  e.preventDefault();  // prevent navigating
	  $("#novogro a[data-toggle]").removeClass("active");
	  $(this).addClass("active"); 
	  var selector = $(this).data("toggle");  // get corresponding selector from data-toggle
	  $("#novogro article").hide();
	  $(selector).show();
	});
	$("#zoom a[data-toggle]").on("click", function(e) {
	  e.preventDefault();  // prevent navigating
	  $("#zoom a[data-toggle]").removeClass("active");
	  $(this).addClass("active"); 
	  var selector = $(this).data("toggle");  // get corresponding selector from data-toggle
	  $("#zoom article").hide();
	  $(selector).show();
	  $(".zoom-nav li.first").addClass("selected");
	  $(".zoom-nav li.second").removeClass("selected");
	  $(".zoom-nav li.third").removeClass("selected");
	  $(".zoom-nav li.fourth").removeClass("selected");
	  $(".image.first").removeClass("hidden");
	  $(".image.first").addClass("visible");
	  $(".image.second").addClass("hidden");
	  $(".image.third").addClass("hidden");
	  $(".image.fourth").addClass("hidden");
	});
	$( ".vid-nav, .zoom-nav a, .zoom-text-container li.six a, .zoom-text-container li.twelve a" ).click(function( event ) {
		event.preventDefault();
	});
	// Add the selected class to the nav
	$( ".zoom-nav li" ).click(function () {
		$(".zoom-nav li").removeClass("selected");
		$(this).addClass("selected"); 
	});
	//first circle
	$( ".zoom-nav li.first" ).click(function () {
		$(".image.first").removeClass("hidden");
		$(".image.second").addClass("hidden");
		$(".image.third").addClass("hidden");
		$(".image.fourth").addClass("hidden");
		$(this).addClass("visible");
		//Toggle the related elements
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
		$( ".zoom-text.first li.six a" ).click(function () {
			$(".image.first").removeClass("twelve");
			$(".image.first").removeClass("six");
			$(".image.first").addClass("six");
		});
		$( ".zoom-text.first li.twelve a" ).click(function () {
			$(".image.first").removeClass("six");
			$(".image.first").removeClass("twelve");
			$(".image.first").addClass("twelve");
		});
	//second circle
	$( ".zoom-nav li.second" ).click(function () {
		$(".image.second").removeClass("hidden");
		$(".image.first").addClass("hidden");
		$(".image.third").addClass("hidden");
		$(".image.fourth").addClass("hidden");
		$(this).addClass("visible");
		//Toggle the related elements
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
	$( ".zoom-text.second li.six a" ).click(function () {
		$(".image.second").removeClass("twelve");
		$(".image.second").removeClass("six");
		$(".image.second").addClass("six");
	});
	$( ".zoom-text.second li.twelve a" ).click(function () {
		$(".image.second").removeClass("six");
		$(".image.second").removeClass("twelve");
		$(".image.second").addClass("twelve");
	});
	
	//third circle
	$( ".zoom-nav li.third" ).click(function () {
		$(".image.third").removeClass("hidden");
		$(".image.first").addClass("hidden");
		$(".image.second").addClass("hidden");
		$(".image.fourth").addClass("hidden");
		$(this).addClass("visible");
		//Toggle the related elements
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
	$( ".zoom-text.third li.six a" ).click(function () {
		$(".image.third").removeClass("twelve");
		$(".image.third").removeClass("six");
		$(".image.third").addClass("six");
	});
	$( ".zoom-text.third li.twelve a" ).click(function () {
		$(".image.third").removeClass("six");
		$(".image.third").removeClass("twelve");
		$(".image.third").addClass("twelve");
	});
	
	//fourth circle
	$( ".zoom-nav li.fourth" ).click(function () {
		$(".image.fourth").removeClass("hidden");
		$(".image.first").addClass("hidden");
		$(".image.second").addClass("hidden");
		$(".image.third").addClass("hidden");
		$(this).addClass("visible");
		//Toggle the related elements
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
	$( ".zoom-text.fourth li.six a" ).click(function () {
		$(".image.fourth").removeClass("twelve");
		$(".image.fourth").removeClass("six");
		$(".image.fourth").addClass("six");
	});
	$( ".zoom-text.fourth li.twelve a" ).click(function () {
		$(".image.fourth").removeClass("six");
		$(".image.fourth").removeClass("twelve");
		$(".image.fourth").addClass("twelve");
	});
});
$(document).ready(function() {
	var mainVideo = $('#putty-vid');
	var medQualVersionSrc = 'vid/putty-mobile.mp4';
	var highQualVersionSrc = 'vid/putty.mp4';
	if ($(window).width() < 800) {
		mainVideo.append("<source type='video/mp4' src='" + medQualVersionSrc + "' />");
	} else {
		mainVideo.append("<source type='video/mp4' src='" + highQualVersionSrc + "' />");
	}
});
$(document).ready(function() {
	var mainVideo2 = $('#injectable-vid');
	var medQualVersionSrc = 'vid/injectable-mobile.mp4';
	var highQualVersionSrc = 'vid/injectable.mp4';
	if ($(window).width() < 800) {
		mainVideo2.append("<source type='video/mp4' src='" + medQualVersionSrc + "' />");
	} else {
		mainVideo2.append("<source type='video/mp4' src='" + highQualVersionSrc + "' />");
	}
});