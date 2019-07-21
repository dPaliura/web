window.onscroll = function(){
	var scrollElem = document.getElementById("scrollToTop");
	if (document.body.scrollTop-500 > 0 || document.documentElement.scrollTop-500>0){
		scrollElem.style.opacity = "1";
	}
	else{
		scrollElem.style.opacity = "0";	
	}
}


function goUp() {
	var timeOut;
   	if(document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) {

      window.scrollBy(0,-100);

      timeOut = setTimeout('goUp()', 20);

   	} else clearTimeout(timeOut);
}