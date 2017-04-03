function ajax_post(url, data, callback) {
	var ajax = new XMLHttpRequest();
	ajax.open('POST', url, 1);
	ajax.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	ajax.onreadystatechange = function () {
        if(ajax.readyState === XMLHttpRequest.DONE && ajax.status === 200) {
			callback(ajax.responseText);
        }
    };
	ajax.send(data);
}

function getUrl(place) {
	var url = window.location.pathname;
	var urlArray = url.split('/');
	return urlArray[place];
}


function response(responseText) {
	if(responseText != '') {
		var json = JSON.parse(responseText);
	}
	for(var key in json) {
		if (json.hasOwnProperty(key)) {
			switch(key) {
				case 'url':
					window.location.href = json[key];
				break;
				case 'message':
					document.getElementById('message').innerHTML = json[key];
				break;
			}
		}	
	}
}

function addEvent(ID, eventType, callback){
	var element = document.getElementById(ID);
	element.addEventListener(eventType, callback);
}

function controler(buttonType) {
	switch(buttonType) {
		case 'saveNewFile':
			saveNewFile();
		break;
		case 'newFile':
			newFile();
		break;
		case 'save':
			saveFile();
		break;
		default:
		console.log('not a type of button..');
	}
}

function saveNewFile() {
	var newFileName = document.getElementsByClassName('longSelect');
	var array = []; 
		for(var i = 0; i < newFileName.length; i++) {
			array.push(newFileName[i].value);
		}
	var urlArray = getUrl(2);
	var content = document.getElementById('content').value;
	ajax_post('/ajax/ass011_files_newfile.php', "content=" + content + "&newFile=" + array + "&url=" + urlArray, response);
}

function newFile(){	
	var id = document.getElementById('inputDiv');
	var element = document.createElement('div');
	element.innerHTML = '<input name="fileTitle" id="fileName" class="longSelect" type="text">';
	id.appendChild(element);
}

function saveFile() {
	var newFileName = document.getElementById('fileName').value;
	var content = document.getElementById('content').value;
	var realUrl = getUrl(2);
	var oldFileName = getUrl(3);
	console.log(realUrl + oldFileName);
	ajax_post('/ajax/ass011_files_save.php', "realurl=" + realUrl + "&content=" + content + "&newFileName=" + newFileName + "&oldFileName=" + oldFileName , response);
}