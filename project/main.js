function viewProfile(){
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    	document.getElementById("main").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","profile.php",true);
xmlhttp.send();
}



function viewNews(){
	var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  	xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  	xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    	document.getElementById("main").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","posts/view_post/view_post.php",true);
xmlhttp.send();
}