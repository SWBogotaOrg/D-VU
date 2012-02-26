/*
 * --------------------------------------------------------------------
 * Simple Scroller
 * by Siddharth S, www.ssiddharth.com, hello@ssiddharth.com
 * Version: 1.0, 05.10.2009 	
 * --------------------------------------------------------------------
 */

$(document).ready(function() 
{	 
	$(window).bind('resize', function() {
		remode();
	})
	remode();

	var img_number =1;
	function remode(){
		var p=$('#img-slider').position();
		var fh1={
			'left': p.left+ $('#img-slider').width() - $('#next').width(),
			'top': p.top + $('#img-slider').height() - $('#next').height()
		}
		$('#next').css(fh1);
	}
	function changeImg(){
		img_number++;
		$('#img-slider').attr('src','/img/slider'+img_number+'.jpg')
		if(img_number==5)img_number=0;
	}
	$('#next').click(function(){changeImg()});
	setInterval(changeImg, 8000);
});