<?php 
	SESSION_START();
	$_SESSION['filename']="filename";
	?>
<?php

//1.接收添加页面提交过来的数据
extract($_POST);

//2.接收文件上传使用的是一个全局数组 $_FILES，查看文件信息 var_dump(); 
//var_dump($_FILES);

/*每个上传文件都有5个上传信息组成数组
 * 1、name 上传文件名
 * 2、type 文件类型
 * 3、tmp_name 上传成功后的临时文件名
 * 4、error 文件上传的相关错误代码
 * 5、size 文件的大小
 * array(1) { ["pic"]=> array(5) {
 * 	 ["name"]=> string(12) "timg (1).jpg" 
 *   ["type"]=> string(10) "image/jpeg"
 *   ["tmp_name"]=> string(43) "C:\Users\hui\AppData\Local\Temp\phpF7BB.tmp" 
 *   ["error"]=> int(0) 
 *   ["size"]=> int(23889) } }*/
//文件目录  图片的存放目录在当前的upload文件夹下
$uploads_dir="./upload"; 
//临时文件存放目录
@$tmp_name=$_FILES['pic']['tmp_name'];
//给文件命名一个随机的名字
 $filename=@date("YmdHis").rand(1,1000).("image/jpg" || "image/jpeg" || "image/png" || "image/gif");

//把文件从临时存放位置转到真正存放位置
move_uploaded_file($tmp_name,"$uploads_dir/$filename");

//连接数据库
$conn=mysql_connect("localhost","root","root");
mysql_select_db("pic");
$sql="insert into pic(pic) values('$uploads_dir/$filename')";
mysql_query("set names utf8");
mysql_query($sql);

//页面跳转
//header('Location:index.php');
?>
