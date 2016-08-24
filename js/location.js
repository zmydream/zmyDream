// JavaScript Document
	function Location_one() {
			var oUl= document.getElementById("ta1");
			var Oa = oUl.getElementsByTagName("li");
			var Oli = document.getElementById("ri1");
			var Li =Oli.getElementsByTagName("li");
			for( var i = 0; i < Oa.length; i++) {
				Oa[i].index = i;
				Oa[i].onclick=function() {
					for(var j = 0; j < Li.length; j++) {
						Oa[j].className="";
						Li[j].style.display="none";
					}
					Oa[this.index].className="cur";
					Li[this.index].style.display="inline-block";
				}
			}
		}
		