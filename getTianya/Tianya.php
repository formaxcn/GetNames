<?php  
	$name = $_GET['name'];
	$line = $name." ".$intro."\n";
	
	if($name!=null&&$name!="手机匿名用户"&&name!="dongxi_user")
	{
		$seed=rand(0,10);
		if($seed==0)
		{
			$file = fopen("userinfoTianya.txt","a");
		}
		else if($seed==1)
		{
			$file = fopen("userinfoTianya1.txt","a");
		}
		else if($seed==2)
		{
			$file = fopen("userinfoTianya2.txt","a");
		}
		else if($seed==3)
		{
			$file = fopen("userinfoTianya3.txt","a");
		}
		else if($seed==4)
		{
			$file = fopen("userinfoTianya4.txt","a");
		}
		else if($seed==5)
		{
			$file = fopen("userinfoTianya5.txt","a");
		}
		else if($seed==6)
		{
			$file = fopen("userinfoTianya6.txt","a");
		}
		else if($seed==7)
		{
			$file = fopen("userinfoTianya7.txt","a");
		}
		else if($seed==8)
		{
			$file = fopen("userinfoTianya8.txt","a");
		}
		else if($seed==9)
		{
			$file = fopen("userinfoTianya9.txt","a");
		}
		else
		{
			$file = fopen("userinfoTianya10.txt","a");
		}
		
		fwrite($file,$line);
		fclose($file);
	}
	
?> 