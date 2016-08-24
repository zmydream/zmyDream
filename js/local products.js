// JavaScript Document
function local_products(a,b,c){
	var Spn = document.getElementById(a);
	var P1 =document.getElementById(b);
	var Img1 =document.getElementById(c);
	Spn.onclick=function() {
		if(P1.style.display=="inline-block") {
			Spn.style.background="url('../../images/location_span1.gif')";
			P1.style.display="none";
			Img1.style.width="500px";
		}
		else {
			Spn.style.background="url('../../images/location_span0.gif')";
			P1.style.display="inline-block";
			Img1.style.width="330px";
		}
	};
}