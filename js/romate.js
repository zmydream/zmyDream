// JavaScript Document<script>
function romate(obj){
	var element = document.getElementById(obj);
	var timer;
		var r = 0;
		var i = 1;
		function rotate(){
			r += i;
			if( Math.abs(r) >= 20 ) i*=-1;
			element.style.MozTransform = "rotate(" + r + "deg)";
			element.style.webkitTransform ="rotate(" + r + "deg)";
			element.style.msTransform = "rotate(" + r + "deg)";
			element.style.OTransform = "rotate(" + r + "deg)";
			element.style.transform = "rotate(" + r + "deg)";
		}
		timer = setInterval(rotate,50);
		element.onmouseover = function(){
			clearInterval(timer);
			timer = null;
		};
		element.onmouseout = function(){
			if(timer)return;
			timer = setInterval(rotate,50);
		};
	
}

