$( document ).ready(function() {
	var localUrl="https://localhost/Douban.php?";
    var name=$('div.info h1').text();
	var intro=$('span#intro_display').text();
	
	var postUrl=localUrl+"name="+$.trim(name)+"&intro="+$.trim(intro);
	if($.trim(name)!="手机匿名用户"&&name.length!=11&&$.trim(name)!="dongxi_user")
	{
		$.get(postUrl);
		var uidStr= window.location.href.substr(30,9);
	var uid=parseInt(uidStr);
	uid++;
	var nexturl=window.location.href.substr(0,30)+uid.toString();
	setTimeout(function(){
		location.href = nexturl;
	},500)
	}
	else{
		var uidStr= window.location.href.substr(30,9);
	var uid=parseInt(uidStr);
	uid++;
	var nexturl=window.location.href.substr(0,30)+uid.toString();
		location.href = nexturl;
	}
	
	
});