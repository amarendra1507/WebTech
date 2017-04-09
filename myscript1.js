var inputbox=document.getElementById('fname');
inputbox.onkeyup=function(){
	var http=null;
	http=new XMLHttpRequest();
	http.onreadystatechange=function(){
		if(http.readyState == 4 && http.status==200){
			document.getElementById('result').innerHTML = http.responseText;
		}
	};
	http.open('GET','ajax.php?p='+inputbox.value,true);
	http.send(null);
};