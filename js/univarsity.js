// JavaScript Document

/********middleTop轮播图的js*******/
  $(function(){
	$(".content1") .hover(function(){
			$(this) .children(".txt").stop() .animate({height:"535px"},200);
            $(this) .parent(".teacherPic") .css({"background":"url(../../images/" +($(this).attr('id'))+            ".jpg) no-repeat","-webkit-transition":"all 0.8s ease 0.2s","transition":"all 0.8s ease             0.2s"});

			$(this) .find(".txt h3").stop() .animate({paddingTop:"130"},550);
			$(this) .find(".txt p").stop() .show();
	},function(){
			$(this) .children(".txt").stop() .animate({height:"100px"},200);
			$(this) .find(".txt h3").stop().animate({paddingTop:"0px"},550);
			$(this) .find(".txt p").stop() .hide();
		})
  })
  