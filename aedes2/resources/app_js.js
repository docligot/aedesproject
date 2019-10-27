function toggle(element) {
    var x = document.getElementById(element);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

function toggleClose(element) {
    var x = document.getElementById(element);
	x.className = x.className.replace(" w3-show", "");
}

function reloadIndicators() {
	var ind1 = Math.floor(Math.random() * 1000);
	var ind2 = Math.floor(Math.random() * 1000);
	var ind3 = Math.floor(Math.random() * 1000);
	var ind4 = Math.floor(Math.random() * 1000);
	var ind4 = Math.floor(Math.random() * 1000);
	var ind4 = Math.floor(Math.random() * 1000);
	var ind4 = Math.floor(Math.random() * 1000);
	document.getElementById('indicator1').innerHTML = ind1;
	document.getElementById('indicator2').innerHTML = ind2;
	document.getElementById('indicator3').innerHTML = ind3;
	document.getElementById('indicator4').innerHTML = ind4;
	document.getElementById('indicator5').innerHTML = ind1;
	document.getElementById('indicator6').innerHTML = ind2;
	document.getElementById('indicator7').innerHTML = ind3;
	document.getElementById('indicator8').innerHTML = ind4;
}


function reloadProgress() {
	var ind1 = Math.floor(Math.random() * 75) / 100;
	var ind2 = Math.floor(Math.random() * 75) / 100;
	var ind3 = Math.floor(Math.random() * 75) / 100;
	var ind4 = Math.floor(Math.random() * 75) / 100;
	document.getElementById('progress1').innerHTML = Math.round(ind1 * 100) + '%';
	document.getElementById('progress2').innerHTML = Math.round(ind2 * 100) + '%';
	document.getElementById('progress3').innerHTML = Math.round(ind3 * 100) + '%';
	document.getElementById('progress4').innerHTML = Math.round(ind4 * 100) + '%';
	document.getElementById('progress1').style.width = Math.round(ind1 * 100) + '%';
	document.getElementById('progress2').style.width = Math.round(ind2 * 100) + '%';
	document.getElementById('progress3').style.width = Math.round(ind3 * 100) + '%';
	document.getElementById('progress4').style.width = Math.round(ind4 * 100) + '%';
}