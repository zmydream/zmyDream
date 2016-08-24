// JavaScript Document

function history_lb() {
	
	var oDi=document.getElementById("l2-l2");
	var oPi=document.getElementById("p2");
	var oNa = document.getElementById("nav1");
	var timer = null, t = 0;
	var n = n||0;
	
	fnAutoPlay(n);
	//自动播放每一组播放完回调自已切换下一组
	function fnAutoPlay(n){
		var oNav = oNa.getElementsByTagName("div");//123
		var oDiv = oDi.getElementsByTagName("div");	//图片
		var oP = oPi.getElementsByTagName("div");  //字
		
		fnActive(oNav,oDiv,oP,n%oDiv.length);
		timer = setInterval(function(){
			n++;
			fnActive(oNav,oDiv,oP,n%oDiv.length);
			if(n%oNav.length === 0){
        n = 0;
				clearInterval(timer);
				fnActive(oNav,oDiv,oP,n%oDiv.length);
				fnAutoPlay(n%oNav.length);
			}
		},2000)
	}	
	
	rolling();

	function rolling() {
		var oNav = oNa.getElementsByTagName("div");
		var oDiv = oDi.getElementsByTagName("div");
		var oP = oPi.getElementsByTagName("div");
	
		for( var i = 0; i < oNav.length; i++) {
			oNav[i].index = i;
			oNav[i].onclick=function() {
				for(var j = 0; j < oP.length; j++) {
					oDiv[j].style.display="none";
					oP[j].style.display="none";
					oNav[j].className = '';
				}
				oNav[this.index].className="cur"
				oDiv[this.index].style.display="inline-block";
				oP[this.index].style.display="inline-block";
			}
		}
	}
	
	
	function fnActive(ele, ele2, ele3, n){
		for(var i = 0 ; i < ele.length; i++) {
			ele[i].className = '';
			ele2[i].style.display = 'none';
			ele3[i].style.display = 'none';
		}
		ele[n].className = 'cur';
		ele2[n].style.display = 'block';
		ele3[n].style.display = 'block';
	}
	
		fnMouse();

	//鼠标移入停止播放
	function fnMouse(){
		var oNav = oNa.getElementsByTagName("div");
		var oDiv = oDi.getElementsByTagName("div");
		var oP = oPi.getElementsByTagName("div");
    //alert(aLi.length+"*****"+aP.length+"*****"+aZ.length);
		for(var i = 0; i < oNav.length; i++){
			(function(index){
        oDiv[index].onmouseover = oP[index].onmouseover = oNav[index].onmouseover = function(){	
          clearInterval(timer);
          fnActive(oNav,oDiv,oP,index);
			  }
        oDiv[index].onmouseout = oP[index].onmouseout = oNav[index].onmouseout = function(){
          fnAutoPlay(index);
        }
			})(i);
		}
	}
}
