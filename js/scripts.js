var video = document.getElementById('putty-vid');
var pBar = document.getElementById('p');


video.addEventListener('timeupdate', function() {
  var percent = Math.floor((100 / video.duration) * video.currentTime);
  pBar.value = percent;
  /*pBar.getElementsByTagName('span')[0].innerHTML = percent;*/
}, false);


jumplink1 = document.getElementById('vid1-1');
jumplink2 = document.getElementById('vid1-2');
jumplink3 = document.getElementById('vid1-3');
jumplink4 = document.getElementById('vid1-4');
jumplink5 = document.getElementById('vid1-5');
jumplink6 = document.getElementById('vid1-6');


jumplink1.addEventListener("click", function (event) {
    event.preventDefault();
    video.currentTime = 2;
    video.play();
	return false;
}, false);

jumplink2.addEventListener("click", function (event) {
    event.preventDefault();
    video.currentTime = 32;
    video.play();
	return false;
}, false);

jumplink3.addEventListener("click", function (event) {
    event.preventDefault();
    video.currentTime = 43;
    video.play();
	return false;
}, false);

jumplink4.addEventListener("click", function (event) {
    event.preventDefault();
    video.currentTime = 54;
    video.play();
	return false;
}, false);

jumplink5.addEventListener("click", function (event) {
    event.preventDefault();
    video.currentTime = 72;
    video.play();
	return false;
}, false);
jumplink6.addEventListener("click", function (event) {
    event.preventDefault();
    video.currentTime = 83;
    video.play();
	return false;
}, false);
