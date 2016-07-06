<?php  
	$name = $_GET['name'];
	$intro = $_GET['intro'];
	$line = $name." ".$intro."\n";
	
	if($name!=null&&$name!="手机匿名用户"&&name!="dongxi_user")
	{
		$seed=rand(0,10);
		if($seed==0)
		{
			$file = fopen("userinfo.txt","a");
		}
		else if($seed==1)
		{
			$file = fopen("userinfo1.txt","a");
		}
		else if($seed==2)
		{
			$file = fopen("userinfo2.txt","a");
		}
		else if($seed==3)
		{
			$file = fopen("userinfo3.txt","a");
		}
		else if($seed==4)
		{
			$file = fopen("userinfo4.txt","a");
		}
		else if($seed==5)
		{
			$file = fopen("userinfo5.txt","a");
		}
		else if($seed==6)
		{
			$file = fopen("userinfo6.txt","a");
		}
		else if($seed==7)
		{
			$file = fopen("userinfo7.txt","a");
		}
		else if($seed==8)
		{
			$file = fopen("userinfo8.txt","a");
		}
		else if($seed==9)
		{
			$file = fopen("userinfo9.txt","a");
		}
		else
		{
			$file = fopen("userinfo10.txt","a");
		}
		fwrite($file,$line);
		fclose($file);
	}
	
?> 