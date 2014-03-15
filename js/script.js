// Open street maps redraw for fullwidth content

var maps = document.querySelectorAll('.OSM_Map');

for (var i = 0; i < maps.length; i++) {
	maps[i].style.width = '100%';
}

window.dispatchEvent(new Event('resize'));
