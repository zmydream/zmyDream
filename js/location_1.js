// JavaScript Document
function l3(a,b,c){
	var oUl= document.getElementById("l3-l3");
	var Oa = oUl.getElementsByTagName("div");
	
	var Oli = document.getElementById("p3");
	var Li =Oli.getElementsByTagName("div");
	
	var oIm = document.getElementById("nav2");
	var oNav = oIm.getElementsByTagName("div");
	
	for( var i = 0; i < oNav.length; i++) {
		oNav[i].index = i;
		oNav[i].onclick=function() {
			for(var j = 0; j < Li.length; j++) {
				oNav[j].className="";
				Li[j].style.display="none";
				Oa[j].style.display="none";
			}
			oNav[this.index].className="cur";
			Li[this.index].style.display="inline-block";
			Oa[this.index].style.display="inline-block";
		}
	}
function l4() {
	var oIm =document.getElementById("l44");
	var oImgs=oIm.getElementsByTagName("div");
	var oNav = document.getElementById("nav3");
	var oNav3 = oNav.getElementsByTagName("div");
		for( var i = 0; i < oNav3.length; i++) {
				oNav3[i].index = i;
				oNav3[i].onclick = function() {
				//	alert(this.index);
					for(var j = 0; j < oImgs.length; j++) {
						oNav3[j].className = '';
						oImgs[j].style.display="none";
					}
					oNav3[this.index].className = 'cur';
					oImgs[this.index].style.display="inline-block";
	  }
  }
}
			
}
	