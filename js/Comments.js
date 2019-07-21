var LOGIN;
function goajax1(login){
	var xhr = new XMLHttpRequest();
	LOGIN = login
	xhr.onreadystatechange = function(){
		if (xhr.readyState == 1){
			d3.select('#comments')
			.style("background", 'url(loadIcon.png)')
			.style('background-size', "100% 100%")
			.text("")
			.style("width", "150px")
			.style("height", "150px")
			.style("transition", "transform 49s linear")
			.style("transform", "rotate(-7200deg)");
		}
		else if (xhr.readyState == 4){
			if (xhr.status == 200){
				var HTMLcode = xhr.responseText;
				HTMLcode = HTMLcode.replace(/<<_!_>>/g, "<div class='commentar'>");
				HTMLcode = HTMLcode.replace(/<<_\?_>>/g, "</div>");

				HTMLcode = HTMLcode.replace(/<<_!A_>>/g, "<h3>");
				HTMLcode = HTMLcode.replace(/<<_\?A_>>/g, "</h3>");

				HTMLcode = HTMLcode.replace(/<<_!T_>>/g, "<blockquote>");
				HTMLcode = HTMLcode.replace(/<<_\?T_>>/g, "</blockquote>");
				HTMLcode = HTMLcode.replace(/\n/g, "<br>");

				d3.select('#commentaries').html('\
					<div id="comments" class="AjaxButton" onclick="hideComments()">Свернуть</div>' + HTMLcode);
			}
			else{
				d3.select('#commentaries')
				.html('<p class="notice">Извините, но что-то сломалось<br>' + (xhr.status?'Error ' + xhr.status + ": " + xhr.statusText + "</p>": "<p class='notice'>A technical error</p>") + '<br><div id="comments" class="AjaxButton" onclick="goajax1(' + login + ')">Еще раз</div>')
			}
		}
	}
	xhr.timeout = 70000;
	xhr.ontimeout = function(){alert("timeout")}
	
	xhr.open("GET", "/php/commentsGET.php", true);

	xhr.send();
}



function send_comment(login){
	var Area = document.forms[0].elements['comment'];
	var data = {
		author: login,
		text: Area.value
	};
	if (!Area.value || Area.value.search(/[^\s]/) == -1) return;
	Area.setAttribute('disabled', '');
	var boundary = String(Math.random()).slice(2);
	var boundaryMiddle = '--' + boundary + '\r\n';
	var boundaryLast = '--' + boundary + '--\r\n'

	var body = ['\r\n'];
	for (var key in data) {
		// добавление поля
		body.push('Content-Disposition: form-data; name="' + key + '"\r\n\r\n' + data[key] + '\r\n');
	}

	body = body.join(boundaryMiddle) + boundaryLast;

	// Тело запроса готово, отправляем

	var xhr = new XMLHttpRequest();
	xhr.open('POST', 'php/commentsPOST.php', true);

	xhr.setRequestHeader('Content-Type', 'multipart/form-data; boundary=' + boundary);

	xhr.onreadystatechange = function() {
	  	if (this.readyState != 4) return;
	  	Area.value = '';
	  	Area.removeAttribute('disabled');
	}
	d3.select('#commentsWindow').html('<div class="commentar"><h3>' + login + '</h3><blockquote>' + data.text.replace(/\n/g, '<br>') + '</blockquote></div>' + d3.select('#commentsWindow').html())
	xhr.send(body);
}

function hideComments(){
	d3.select('#rolling').attr('class', 'hidden');
	d3.select('#comments').attr('onclick', 'showComments()').text("Развернуть");
}

function showComments(){
	d3.select('#rolling').attr('class', '');
	d3.select('#comments').attr('onclick', 'hideComments()').text("Свернуть");
}

