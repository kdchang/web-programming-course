var result = 100;
function add() {
	var x = parseFloat(document.getElementById('x').value);
	var y = parseFloat(document.getElementById('y').value);	
	document.getElementById('result').innerHTML = parseFloat(x + y);
}


