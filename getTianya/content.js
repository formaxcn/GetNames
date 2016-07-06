$( document ).ready(function() {
	var localUrl="http://localhost/Tianya.php?";
    var name=$('div.portrait h2 a').eq(0).text();
	var postUrl=localUrl+"name="+$.trim(name);
	
	
	if(name.length>0)
	{
		$.get(postUrl);
	}
	
	
	var uidStr= window.location.href.substr(21,7);
	var uid=parseInt(uidStr);
	uid++;
	var nexturl=window.location.href.substr(0,21)+uid.toString();
	setTimeout(function(){
		location.href = nexturl;
	},500)
});