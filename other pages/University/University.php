<!doctype html>
<html>
<head><!-- -->
<meta charset="utf-8">

<link rel="shortcut icon" href="favicon1.ico" />
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<title>我的大学</title>
<link rel="stylesheet" type="text/css" href="../../css/Home_css.css">
<link rel="stylesheet" type="text/css" href="../../css/style.css">
<script src="../../js/romate.js"></script>
</head>

<body>
 <div class="example">
    <ul id="nav">
      <li><a href="../../index.html" >首页</a></li>
      <li><a href="#"> 我的大学</a></li>
      <li><a href="../../index.html" >返回上一级</a></li>
    </ul> 
	</div>
  
  <div id="div1">
     <div id="rotate" style=" cursor:pointer; position: absolute;">
      <ul>
        <li id="r1"><a href="university.html"><img src="../../images/University/Un_01.jpg" /></a></li>
        <li id="r2"><a href="University_environment.html"><img src="../../images/University/Un_02.jpg" /></a> </li>
        <li id="r3"><a href="#"><img src="../../images/University/Un_04.jpg"</a> </li>
        <li id="r4"><a href="university_dormitory.html"><img src="../../images/University/Un_03.jpg" /></a></li>
       </ul>
     </div>
   </div>
 
<script>
window.onload = (function(){
	romate("r1");
	romate("r2");
	romate("r3");
	romate("r4");
	
}());
</script>
</body>
</html>
