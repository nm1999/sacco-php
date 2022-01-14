<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script type="text/javascript" src="jquery.js"></script>
	<script type="text/javascript">
		function Hint(str){
			if (str.length==0) {
				document.getElementById("show").innerHTML=="";
			}else{
			var xmlhttp = new  XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if (xmlhttp.readyState==4 && xmlhttp.status==200) {
					document.getElementById("show").innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.open("GET","data.php? q="+str,true);
			xmlhttp.send();
		}
	}
	</script>
</head>
<body>
<form>
	<input type="text" onkeyup="Hint(this.value)" placeholder="search......">
</form>
<span id="show">
	
</span>
</body>
</html>