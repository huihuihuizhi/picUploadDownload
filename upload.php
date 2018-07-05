<?php 
	SESSION_START();
	?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<title>图片的上传</title>
	</head>
	<body>
	  <center>
		<form action= "doupload.php"  method="post" enctype="multipart/form-data">
			
			<table border="0" width="300">
				<tr>
					<td align="right">图片：</td>
					<td><input type="file" name="pic"></td>
				</tr>
				<tr  align="center">
					<td colspan="2"><input type="submit" name="submit" value="添加">
						<input type="reset" name="reset" value="重置">
					</td>
					
				</tr>
			</table>
		</form>
	  </center>	

	</body>
</html>
