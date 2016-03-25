function add_member() {
	// initialisation
	var url = 'add_member.php';
	var method = 'POST';
	var params = 'name='+document.getElementById('name').value;
	params += '&mail='+document.getElementById('mail').value;
	params += '&pass='+document.getElementById('pass').value;
	var container_id = 'list_container' ;
	// call ajax function
	ajax (url, method, params, container_id) ;
}

function ajax (url, method, params, container_id) {
    try { // For: chrome, firefox, safari, opera, yandex, ...
    	xhr = new XMLHttpRequest();
    } catch(e) {
	    try{ // for: IE6+
	    	xhr = new ActiveXObject("Microsoft.XMLHTTP");
	    } catch(e1) { // if not supported or disabled
		    alert("Not supported!");
		}
	}
	xhr.onreadystatechange = function() {
						       if(xhr.readyState == 4) { // when result is ready
							       document.getElementById(container_id).innerHTML = xhr.responseText;
							   } else { // waiting for result
							   }
						   	}
	xhr.open(method, url, true);
	xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
	xhr.send(params);
}