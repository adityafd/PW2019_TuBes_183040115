// Take the required elements
var keyword 		= document.getElementById('keyword');
var searchButton 	= document.getElementById('search-button');
var boxHead			= document.getElementById('boxhead');

// Add an event when the keyword is written
keyword.addEventListener('keyup', function() {

	// Create an Ajax
	var ajax = new XMLHttpRequest();

	// Check Ajax readiness
	ajax.onreadystatechange = function() {
		if(ajax.readyState == 4 && ajax.status == 200) {
			boxHead.innerHTML = ajax.responseText;
		}
	}

	// Ajax Execution
	ajax.open('GET', '../ajax/peralatan2.php?keyword=' + keyword.value, true);
	ajax.send();

});