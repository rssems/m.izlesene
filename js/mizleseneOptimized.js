var searchbox ='closed';
function toggleSearch() {
	if(searchbox == 'closed') {
		document.getElementById("search_barID").style.display="block";
		searchbox = 'open';
	} else {
		document.getElementById("search_barID").style.display="none";
		searchbox = 'closed';
	}
}

var pull ='closed';
function togglePull() {
	if(pull == 'closed') {
		document.getElementById("m_topID").style.display="block";
		pull = 'open';
	} else {
		document.getElementById("m_topID").style.display="none";
		pull = 'closed';
	}
}
