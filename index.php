<?php 
	SESSION_START();
	
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>图片的浏览</title>
	</head>
	<body>
			
	 <center>
		<table border="1" width="800">
		
			<tr>
				<th>图片id号</th>
				<th>图片信息</th>
				<th>操作</th>				
			</tr>
			<?php
				
			  $con=mysql_connect("localhost","root","root");
              mysql_select_db("pic");
              $sql="select * from pic";
              mysql_query("set names utf8");
              $res=mysql_query($sql);             
              	
             
            while($row=mysql_fetch_array($res)){
              	//$pic1=$row['pic'];
              	//echo $pic1;
              	//$str1 = substr($pic1,(strlen($str)-18));
              	//echo $str1;
              	
              	echo "<tr>";
              		echo "<td>{$row['id']}</td>";
              		//echo "<td>{$row['pic']}</td>";
              		echo "<td><img src='{$row['pic']}' width='80'></td>";
              		echo "<td>修改 删除 
              			<a href='{$row['pic']}'>查看</a>
              			<a href='download.php?name={$row['pic']}'>下载</a></td>";
              	echo "</tr>";
              }	
			?>
		</table>
	</center>		
	</body>
</html>
