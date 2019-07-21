function Max(array){
	var max;
	if (array.length<1) return;
	max = array[0];
	for (var i = 1; i < array.length; i++){
		max = array[i]>max? array[i] : max;
	}
	return max;
}



function build_graph(names, values, insertion_block, options){
	var defaults = {//Deafault options
		
		_axis_color: '#444',
		_axis_opacity: '1',
		_axis_width: '3',

		_axis_text_color: 'black',
		_axis_text_font: 'sans-serif',
		_axis_names_font_size: '16',
		_axis_text_font_size: '13',
		_axis_text_opacity: '1',

		_background: 'rgb(255, 166, 166)',
		_background_opacity: '0.3',

		_block_fill:'grey',
		_block_opacity: '1',
		_block_stroke_color: 'brown',
		_block_stroke_width: '2',

		_graph_width: '700',
		_graph_height: '450',

		_hover_block_fill: '#bbb',
		_hover_block_opacity: '1',
		_hover_block_stroke_color: 'navy',
		_hover_block_stroke_width: '3',

		_hover_values_text_color: 'black',
		_hover_values_text_opacity: '1',
		_hover_values_font: 'sans-serif',

		_label_color: 'crimson',
		_label_opacity: '.3',

		_names_text_color: 'black',
		_names_font: 'sans-serif',
		_names_font_opacity: '1',

		_values_text_color: 'white',
		_values_text_opacity: '.7',
		_values_font: 'sans-serif',

		_transition: 'all .15s linear',

		_X_name: 'X',
		_Y_name: 'Y',
	};

	{//Some kinda of code
		var opt = {};
		if (!options){ opt = defaults}
		else{
			for (var key in defaults){
				opt[key] = options[key] ? options[key] : defaults[key];
			}
		}
		insertion_block = insertion_block?d3.select(insertion_block):d3.select("body").append("div");}

	opt._background = opt._background == 'none' ? (opt._background_opacity = '0' || true) && "white" : opt._background;
	opt._graph_height = (+opt._graph_height < 200)? '200' : opt._graph_height;
	opt._graph_width = (+opt._graph_width < 330)? '330' : opt._graph_width;
	opt._axis_width = +opt._axis_width>10? '10': opt._axis_width;

	{//Variables 
		var x_right = 40 + +opt._graph_width, y_bottom = +opt._graph_height;
		var blockWidth = ((opt._graph_width-50)*2)/(3*values.length), label;
		var Marg = blockWidth/2, maxValue = Max(values), Height, svg, font_size, block;}



	svg = insertion_block.style("width", (x_right + 110) + "px")//SVG create
		.style("height", (y_bottom + 300) + 'px')
		.append("svg")
		.style("width", (x_right + 110) + "px")
		.style("height", (y_bottom + 300) + 'px');
	
	svg//Фон всего графика
		.append('rect')
		.attr('width', (+opt._graph_width - 5) + '')
		.attr('height', (+opt._graph_height - 25) + '')
		.attr('x', 40)
		.attr('y', 25)
		.attr('class', 'bground')
		.attr('opacity', opt._background_opacity)
		.attr('fill', opt._background);


	svg//X-axis
		.append('text')
		.attr('transform', 'translate(' + (x_right - 10) + ', ' + (y_bottom + 20) + ')')
		.attr('font-size', opt._axis_names_font_size)
		.attr('fill', opt._axis_text_color)
		.attr('font-family', opt._axis_text_font)
		.attr('opacity', opt._axis_text_opacity)
		.text(opt._X_name);

	svg//Y-axis
		.append('text')
		.attr('transform', 'translate(60, 40)')
		.attr('font-size', opt._axis_names_font_size)
		.attr('fill', opt._axis_text_color)
		.attr('font-family', opt._axis_text_font)
		.attr('opacity', opt._axis_text_opacity)
		.text(opt._Y_name);
	
	font_size = (blockWidth>20 ? 16 : (blockWidth>5 ? Math.floor(blockWidth): 0));

	for (var i = 0; i < values.length; i++){
		Height = (values[i]*(+opt._graph_height-50)/maxValue);

		block = svg.append('symbol').attr('id', 'Num' + i).attr('class', 'pillar');

		block.append('line')
		.attr('opacity', 0)
		.attr('x1', 37 - Marg - +opt._graph_width - x_right)//37 - Marg - +opt._graph_height
		.attr('x2', -45)//*-1
		.attr('y1', y_bottom - Height)
		.attr('y2', y_bottom - Height)
		.attr('width', 3)
		.attr('stroke', opt._label_color)
		.attr('class', 'red_label');


		block.append('rect')
		.attr('height', String(Height))
		.attr('x', Marg)
		.attr('y', String(+opt._graph_height - Height));

		block.append('text')
		.attr('transform', 'translate(' + (Marg + (blockWidth - font_size)/2) + ', ' + (+opt._graph_height+10 - Math.floor(Height - font_size)) + ')' + ' rotate(90)')
		.attr('class', 'ValueText')
		.text(String(values[i]));

		block.append('text')
		.attr('transform', 'translate(' + (Marg + (blockWidth - font_size)/2) + ', ' + (y_bottom + 10) + ')' + ' rotate(90)')
		.attr('class', 'NameText')
		.text(String(names[i]));
		Marg += blockWidth * (3/2);
		
	}

	d3.selectAll('.pillar rect')
		.attr('width', blockWidth)
		.attr('fill', opt._block_fill)
		.attr('opacity', opt._block_opacity)
		.attr('stroke', opt._block_stroke_color)
		.style('transition', opt._transition)
		.attr('stroke-width', opt._block_stroke_width);

	d3.selectAll('.pillar .ValueText')
		.attr('font-family', opt._values_font)
		.attr('font-size', font_size)
		.attr('opacity', opt._values_text_opacity)
		.style('transition', opt._transition)
		.attr('fill', opt._values_text_color);

	d3.selectAll('.pillar .NameText')
		.attr('fill', opt._names_text_color)
		.attr('font-size', font_size)
		.attr('opacity', opt._names_font_opacity)
		.attr('font-family', opt._names_font);

	///////////////////////////////
	svg.append('defs')
		.append('line')
		.attr('x1', String(-3 - Math.ceil(+opt._axis_width)))
		.attr('x2', String(3 + Math.ceil(+opt._axis_width)))
		.attr('stroke-width', opt._axis_width)
		.attr('stroke', opt._axis_color)
		.attr('id', 'graph_serif');

	var serifs = Math.floor((opt._graph_height - 50)/50), diviser;;
	var price_division = maxValue/(opt._graph_height-50)*50
	for (i = 1; i<=serifs; i++){
		diviser = price_division*i;
		diviser = diviser > 40 ? (diviser>10000? Math.round(diviser/1000)*1000 : Math.round(diviser)) : diviser > 5? diviser.toFixed(1) : diviser > 1 ?  diviser.toFixed(2) : diviser>0.1 ?  diviser.toFixed(5) : diviser.toFixed(8);

		svg.append('use')
		.attr('href', '#graph_serif')
		.attr('x', 40)
		.attr('y', opt._graph_height - i*50)

		svg.append('text')
		.attr('fill', opt._axis_text_opacity)
		.attr('font-family', opt._axis_text_font)
		.attr('font-size', opt._axis_text_font_size)
		.attr('text-anchor', 'end')
		.attr('dominant-baseline', 'central')
		.attr('opacity', opt._axis_text_opacity)
		.attr('x', 33 - (+opt._axis_width)/2)
		.attr('y', y_bottom - i*50)
		.text(diviser)
	}



	d3.selectAll('.pillar')
	.on('mouseover', function(){
		var selection1 = d3.select(this);
		selection1.select('rect')
		.attr('fill', opt._hover_block_fill)
		.attr('opacity', opt._hover_block_opacity)
		.attr('stroke', opt._hover_block_stroke_color)
		.attr('stroke-width', opt._hover_block_stroke_width);

		selection1.select('.ValueText')
		.attr('font-family', opt._hover_values_font)
		.attr('opacity', opt._hover_values_text_opacity)
		.attr('fill', opt._hover_values_text_color);
		
		selection1.select('.red_label')
		.attr('opacity', opt._label_opacity)
		.attr('transform', 'translate(' + x_right + ', 0)')
		});


	
	

	
	for (var i = 0; i < values.length; i++){
		svg.append('use').attr('href', '#Num' + i).attr('x', 40);
		}


	svg//Axis' create
		.append("polyline")
		.attr('points', '35,35,40,20,45,35,40,20,40,' + 
			y_bottom + ',' + x_right + ',' + y_bottom + ',' + 
			(x_right - 15) + ',' + (y_bottom + 5) + ',' + x_right + ',' + y_bottom + 
			',' + (x_right - 15) + ',' + (y_bottom - 5))
		.attr('fill', 'none')
		.style("stroke", opt._axis_color)
		.style("stroke-width", opt._axis_width);

	svg//Блок-заглушка
		.append('rect')
		.attr('opacity', '0')
		.attr('width', +String(opt._graph_width+40))
		.attr('height', '500')
		.attr('class', 'bground')
		.attr('y', String(y_bottom));

	insertion_block.selectAll('svg .bground')
		.on('mouseover', function(){
			var selection2 = insertion_block.selectAll('.pillar');
			selection2.select('rect')
			.attr('fill', opt._block_fill)
			.attr('opacity', opt._block_opacity)
			.attr('stroke', opt._block_stroke_color)
			.attr('stroke-width', opt._block_stroke_width);
			
			selection2.select('.ValueText')
			.attr('font-family', opt._values_font)
			.attr('opacity', opt._values_text_opacity)
			.attr('fill', opt._values_text_color);

			selection2.select('.red_label')
			.attr('opacity', '0')
			.attr('transform', 'translate(' + (-x_right) + ', 0)')
			})
}