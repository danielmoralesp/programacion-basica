function getXMLHTTPRequest(){
		var req = false;
	try{
		req = new XMLHTTPRequest();
	}catch(err1){
		try {
			req = new ActiveXObjetc("Msxml2.XMLHTTP");
		}catch(err2){
			try{
				req = new ActiveXObjetc("Microsoft.XMLHTTP");
			}catch(err3){
				req = false;
			}
		}
	}
	return req;
}

var miPeticion = getXMLHTTPRequest();
