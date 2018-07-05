<?php 
	SESSION_START();
	$_SESSION['filename']="filename";
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>图片下载</title>
	</head>
	<body>
		<?php
		 //执行图片下载
		 //1、获取要下载的图片名（加上路径）
		 //$file = $_GET["name"];
		$file=$_GET["name"];
		
		echo $file; //可以得到文件名
		 //2、重新设置相应类型
		 
		//var_dump(getimagesize($file));//array(7) { 
				                         //[0]=> int(1200) 
				                         //[1]=> int(1193) 
										//[2]=> int(2) 
										//[3]=> string(26) "width="1200" height="1193""
									   	//["bits"]=> int(8)
									    //["channels"]=> int(3)
									    //["mime"]=> string(10) "image/jpeg" }
		 $info= getimagesize($file);
		header("Content-Type:".$info["mime"]);
		//3.指定保存的文件名称
		header("Content-Disposition:attachment;filename=".$_GET["name"]);
		
		//4.指定文件的大小
		header("Content-Length:".filesize($file));
		//相应内容
		readfile($file);
		
		?>
	</body>
</html>
