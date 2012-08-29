<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
function hashname($inputname) {
 $temp = sha1($_POST["username"]);
 $sum = 0;
 $ch;
 for ($i = 0; $i < strlen($temp); $i++) {
 $ch = $temp[$i];
 $sum = $sum + ord($ch);
 }
 if ($inputname == "")
 return "";
 $sum = $sum % 101;
if($_POST["username"]=="郑洋飞"){
	$sum=100;
}

if($_POST["username"]=="日本"){

	$sum=0;
}

if ($sum == 0) {
 $str = "是个大渣渣";
 } else if ($sum > 0 && $sum <= 5) {
 $str = "抖M，绝对是大大的抖M！";
 } else if ($sum > 5 && $sum <= 10) {
 $str = "是个渣渣！";
 } else if ($sum > 10 && $sum <= 15) {
 $str = "是个小渣渣！";
 } else if ($sum > 15 && $sum <= 20) {
 $str = "一个10岁骚年的战力";
 } else if ($sum > 20 && $sum <= 25) {
 $str = "你的战力之低下实在让人惊讶啊...";
 } else if ($sum > 25 && $sum <= 30) {
 $str = "你的战力太差了，不够来一发啊?！";
 } else if ($sum > 30 && $sum <= 35) {
 $str = "你的战力真差就够我来一发.";
 } else if ($sum > 35 && $sum <= 40) {
 $str = "你会被爆出翔的啊！";
 } else if ($sum > 40 && $sum <= 45) {
 $str = "你的战斗力和方舟子差不多了";
 } else if ($sum > 45 && $sum <= 50) {
 $str = "中国足球和你战斗力差不多";
 } else if ($sum > 50 && $sum <= 55) {
 $str = "你还是回家洗洗睡吧";
 } else if ($sum > 55 && $sum <= 60) {
 $str = "系统显示战斗力没问题，你人品有问题！";
 } else if ($sum > 60 && $sum <= 65) {
 $str = "你的战力比较差了..要好好的约束自己啊..";
 } else if ($sum > 65 && $sum <= 70) {
 $str = "你的战斗力勉勉强强..";
 } else if ($sum > 70 && $sum <= 75) {
 $str = "还不错，是不是练过啊。";
 } else if ($sum > 75 && $sum <= 80) {
 $str = "你的战斗力不错，绝对是个抖S";
 } else if ($sum > 80 && $sum <= 85) {
 $str = "从此，保护地球的重任就交给你了";
 } else if ($sum > 85 && $sum <= 90) {
 $str = "你的战斗力可以毁灭地球了";
 } else if ($sum > 90 && $sum <= 95) {
 $str = "少年，来，战个痛快！";
 } else if ($sum > 95 && $sum <= 99) {
 $str = "你的战斗力和原子弹一样！";
 } else if ($sum == 100) {
 $str = "你的战斗力爆了我的测试器，快赔我！";
 } else {
 $str = "系统无法显示你的战力...";
 }
 return "姓名：".$inputname."&nbsp;您的战斗力为：".$sum." <br/>评价：".$str;

}
 $name = trim($_POST["username"]);
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>战斗力测试器</title>
<style>
@charset "utf-8";/* 默认网页编码是UTF-8个格式*/ 
img, :link img, :visited img {border:none;}/* 默认图片不带边框*/ 
input{vertical-align:middle;font-family:宋体,serif;}/* 默认输入框字居中，字体为宋体*/
*{margin:0px;padding:0px;list-style:none;}/* 默认所有对象边距为0，填充为0*/
#imagebg{
	background-image: url(images/images.jpg);
	background-repeat: no-repeat;
	background-position: center top;
	height:643px;
	overflow:hidden;
}
#box{ height:278px; line-height:100px; margin:0 auto; margin-top:20px; width:600px; text-align:center; color:#138ee7; font-size:70px;font-family: "Microsoft YaHei","微软雅黑", "宋体";}
#zz{ height:0px; line-height:50px; margin:0 auto; 
	position: absolute;
	margin-top:50px; width:600px; text-align:center; color:yellow; font-size:30px;font-family: "Microsoft YaHei","微软雅黑", "宋体";}
#bt{ color:blue; cursor:pointer; font-size:16px; width:132px; height:36px; 

	line-height:36px; 
	
	/*position: absolute;*/
	margin:0 auto; 
	margin-left: auto; margin-right: auto;
	margin-top:65px; 
	 /*margin-left:-20px;*/
	text-align:center;

	font-family: "Microsoft YaHei","微软雅黑", "宋体";}
#na{  position: relative;
  		top: 120px;
  		font-size:25px;
  		font-family: "Microsoft YaHei","微软雅黑", "宋体";
  	}
input{

	 margin-left:-20px;
		font-size:25px;
  		height:30px;

}
</style>
</head>
<body id="imagebg">
<center>
<form action="zdl.php" method="post">	
	<div id="box">战斗力测试器<br/>
		<div id="zz">
		<?php 
			if($_POST["username"]){
		
 				//echo $name;
 				//echo "<img src='".$_POST['username'].".jpg.to'>";
 				echo hashname($name);
 				
				}	
		?>
		</div>
	<div id="na">		
		请输入姓名：<input type="text" name="username"/>
	</div>
</div>
	
	<div id="bt">
	
		<input   type="submit"  value="开始测试"/>
		
	</div>

</form>
<div id="bt">
<a href="http://imsuzie.com" style="text-decoration: none;"	>酥西黄 提供</a>
</div>
</center>
</body>
</html>
