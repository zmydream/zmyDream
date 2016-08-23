<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>我的家乡</title>

<link rel="shortcut icon" href="favicon1.ico" />
<style>		
#div1 {
		background-color:#690;
		position:relative;
		margin:auto;
		border:0px solid #06C;
		height:500px;
		width:750px;
		top:25px;	
		-moz-border-radius: 20px;
		-webkit-border-radius: 20px;
		border-radius:20px;
		overflow:hidden;
}

.contentTop{
	width:100%; 
	overflow:hidden;
	margin:0 auto 20px;
	}

.contentTop .teacher{
	width:100%;
	height:500px;
	position:relative;
	margin:0 auto; 
	overflow:hidden;
	}
.contentTop .teacher .teacherPic{
	width:100%;
	height:500px;
	position:absolute;
		background:url(../../images/beijj231.jpg) no-repeat;
	}
.contentTop .teacher .teacherPic .content1{
	width:187.5px;
	height:500px;
	float:left;
	position:relative;
	overflow:hidden;
	}
	a {
   text-decoration:none;

		}
.contentTop .teacher .teacherPic .content1 .txt{
	width:239px;
	height:100px;
	background:rgba(18,21,44,0.5); 
	position:absolute;
	left:0px;
	bottom:0px;
	padding:0 12px 0 5px;
	border-top:2px solid #FFE000;
	font-family: 微软雅黑;
	font-size: 12px;
	}
.contentTop .teacher .teacherPic .content1 .txt h3{
	color:#FFC200;
	font-size:24px;
	font-weight:100;
	margin:10px 0 6px 0;
	}
.contentTop .teacher .teacherPic h4{
	color:#fff;
	font-size:14px;
	font-weight:100;
	height: 40px;
	}
.contentTop .teacher .teacherPic .content1 .txt p{
	color:#fff;
	margin-top:15px;
	padding-top:5px;
	border-top:1px solid #FFC200;
	font-family: 微软雅黑;
	}
</style>
</head>
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<script src="../../scripts/jquery-2.2.3.min.js"></script>
<script src="../../js/univarsity.js"></script>
<body>
 <div class="example">
    <ul id="nav">
      <li><a href="../../index.html" >首页</a></li>
      <li id="now"><a href="#">我的家乡</a></li>
      <li><a href="../../index.html" >返回上一级</a></li>
    </ul>
 
   <div id = "div1">
      <div class = "contentTop">
         <!--利用jq实现图片轮流滚动 -->
        <div class="teacher">
          <div class="teacherPic">
          
            <div class="content1" id="beijj231">
              <div class="txt"><a href="location.html">
                <h3>上饶概况</h3>
                <h4>上饶市,古称饶州、信州</h4>
                <p>上饶名山胜迹众多<br />
                  更有丰富的红色革命<br />
                 遗址和古色文化遗存。</p></a>
              </div>
            </div>
            
            <div class="content1" id="beij11">
              <div class="txt"><a href="Food.html">
                <h3>上饶美食</h3>
                <h4>上饶有许多美味,独具特色的美食</h4>
                <p>婺源的荷包鱼<br />
                 清明时节各家各户包的清明团<br />
                 独具特色的灯盏粿......</p></a>
              </div>
            </div>
            
            <div class="content1" id="beij33">
              <div class="txt"><a href="local products.html">
                <h3>上饶特产</h3>
                <h4>在上饶,也有值得购买的特产</h4>
                <p>婺源歙砚与绿茶<br />
                 小吃货必备的上饶豆豉果<br />
                 好吃营养的贡米......</p></a>
              </div>
            </div>
            
            
            <div class="content1" id="beij43">
              <div class="txt">
                <h3>上饶......</h3>
                <h4>一个静谧祥和的小城！</h4>
                <p>空气清新<br />
                 有着属于它自己的美好<br />
                 </p>
              </div>
            </div>
          </div>
      
   </div>
</body>
</html>