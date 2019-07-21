d3.selectAll('img').attr('onclick', 'scale(this)')

function scale(THIS){
	var source = THIS.getAttribute('src');
	var selection = d3.select('body').append('div').attr('id', 'ImageHolder');
	selection.append('div').attr('onclick', 'unscale()').attr('class', 'AlphaBG');
	selection.append('img').attr('src', source).attr('class', 'Image');
}
function unscale(){
	d3.select('#ImageHolder').remove();
}