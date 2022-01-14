<!DOCTYPE html>
<html>
<head>
	<title>Home | page</title>
		<link rel="shortcut icon" type="image/x-icon" href="images/log.png">
	  <link rel="stylesheet" type="text/css" href="fonts/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
		<link rel="stylesheet" type="text/css" href="w3schoools.com">
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style type="text/css">
	div.img {
    margin: 5px;
    border: 1px solid #ccc;
    float: left;
    width: 420px;
    margin-top:50px;
    margin-left:160px;
}
  #image{
  	background-image:url(images/course-1.jpg);
  	background-size:100% 100%;
  	height:400px;
  	animation-name:image;
  	animation-duration:10s;
  	-webkit-animation-name:image;
  	-webkit-animation-duration:10s;
  	animation-iteration-count:infinite;
  }
  -webkit-keyframes image{
  		0%{background-image:url(images/course-1.jpg);}
  		25%{background-image:url(images/course-2.jpg);}
  		75%{background-image:url(images/course-3.jpg);}
  		100%{background-image:url(images/course-5.jpg);}
  }
    @keyframes image{
  		0%{background-image:url(images/course-1.jpg);}
      25%{background-image:url(images/course-2.jpg);}
      75%{background-image:url(images/course-3.jpg);}
      100%{background-image:url(images/course-5.jpg);}
  }
    #image1{
  	background-image:url(images/S2.jpg);
  	background-size:100% 100%;
  	height:400px;
  	animation-name:image1;
  	animation-duration:10s;
  	-webkit-animation-name:image1;
  	-webkit-animation-duration:10s;
  	animation-iteration-count:infinite;
  }
  -webkit-keyframes image1{
  		0%{background-image:url(images/S2.jpg);}
  		25%{background-image:url(images/S3.jpg);}
  		75%{background-image:url(images/S4.jpg);}
  		100%{background-image:url(images/netball.jpg);}
  }
    @keyframes image1{
  	0%{background-image:url(images/S2.jpg);}
      25%{background-image:url(images/S3.jpg);}
      75%{background-image:url(images/S4.jpg);}
      100%{background-image:url(images/netball.jpg);}
  }
div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 100%;
    height: auto;
}

div.desc {
    padding:5px;
    text-align:center;
    font-weight:bold;
    margin-top:10px;
    font-size:20px;
}
</style>
<body>
<div class="divide">
	<div>
		<div style="display:inline-flex;">		
			<div class="img">				 
                   <img  id="image" width="300" height="200">                
				<div class="desc"> <p>Our projects</p> </div>
			 </div>
			 <div class="img">				 
                   <img  id="image1" width="300" height="200">
				<div class="desc"> <p>Talents</p> </div>
			 </div>
		</div>
		<footer>
			
		</footer>							
	</div>
</div>
</body>
</html>