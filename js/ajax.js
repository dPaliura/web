'use strict'







function goAjax(){
	var xhr = new XMLHttpRequest();
	xhr.onreadystatechange = function(){
		if (xhr.readyState == 1){
			d3.select('#AjaxButton')
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
				d3.select('#myGraphic').html('<div id="AjaxButton" onclick="hideGraph()">Свернуть</div>');
				var data = JSON.parse(xhr.responseText), names = [], values = [];
				for (var i = 0; i < data.length; i++){
					names.push(data[i]['fiscal_year'].slice(3, 9));
					values.push(data[i]['persons_visiting_parks_annually']);
				}
				build_graph(names, values, "#myGraphic", {_axis_text_font_size: '8', _X_name: 'Фискальный год', _Y_name: 'Количество посетителей за год'});
				}
			else{
				d3.select('#myGraphic')
				.html('<p class="notice">Извините, но что-то сломалось<br>' + (xhr.status?'Error ' + xhr.status + ": " + xhr.statusText + "</p>": "<p class='notice'>A technical error</p>") + '<br><div id="AjaxButton" onclick="goAjax()">Еще раз</div>')
			}
		}
	}
	xhr.timeout = 49000;
	xhr.onloadstart = function(){

	}
	xhr.ontimeout = function(){alert("timeout")}
	
	d3.select('#myGraphic').selectAll('.notice').remove();
	xhr.open("GET", "https://data.smcgov.org/resource/vtr9-sdhq.json", true);

	xhr.send();
}


function hideGraph(){

	d3.select('#myGraphic').style('height', 'auto').html('<div id="AjaxButton" onclick="goAjax()">График</div>');
}


