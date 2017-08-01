var pvideo = document.getElementById('putty-vid');
var pBar = document.getElementById('p');
pvideo.addEventListener('timeupdate', function() {
  var percent = Math.floor((100 / pvideo.duration) * pvideo.currentTime);
  pBar.value = percent;
}, false);
puttynav1 = document.getElementById('vid1-1');
puttynav2 = document.getElementById('vid1-2');
puttynav3 = document.getElementById('vid1-3');
puttynav4 = document.getElementById('vid1-4');
puttynav5 = document.getElementById('vid1-5');
puttynav6 = document.getElementById('vid1-6');
puttynav1.addEventListener("click", function (event) {
    event.preventDefault();
    pvideo.currentTime = 2;
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

/******************************************************************************/

var ivideo = document.getElementById('injectable-vid');
var iBar = document.getElementById('i');
ivideo.addEventListener('timeupdate', function() {
  var percent = Math.floor((100 / ivideo.duration) * ivideo.currentTime);
  iBar.value = percent;
}, false);
injectnav1 = document.getElementById('vid2-1');
injectnav2 = document.getElementById('vid2-2');
injectnav3 = document.getElementById('vid2-3');
injectnav4 = document.getElementById('vid2-4');

injectnav1.addEventListener("click", function (event) {
    event.preventDefault();
    ivideo.currentTime = 4;
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


