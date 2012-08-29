<?php
		
		if(isset($_POST['sub'])){
		$username=trim($_POST['username']);
		$password=$_POST['password'];
     	


     	$s="http://user.zjut.com/api.php?app=member&action=login&username=".$username."&password=".$password;

     	echo "你使用的API地址是:".$s."<br/>";
     	

     	$file_contents = file_get_contents($s);
     	//echo "head";
     	//echo $file_contents;
     	//echo "head";
     	$jsond = json_decode($file_contents,true);
     	//echo "head";
     	//echo $jsond;
     	//var_dump($jsond);

     	if($jsond['state']=="error"){

     		echo $jsond['info'];
     	}else{
     	//echo $jsond;
     		echo $jsond['info']."<br/>";
         $uid = $jsond['data']['uid'];
        
       $name = $jsond['data']['username'];
       $email = $jsond['data']['email'];
       $avator = $jsond['data']['avator'];

        
        echo "<img src=\"$avator\"><br/><br/>";
        echo "你好,$name<br/>你的UID是$uid<br/>你的Email是$email<br/>";

        echo "login_cookie_key:   ".$jsond['data']['login_cookie_key']."<br/>";
        echo "login_cookie_value: ".$jsond['data']['login_cookie_value']."<br/>";
        echo "login_cookie_domain:".$jsond['data']['login_cookie_domain']."<br/>";
        echo "login_cookie_path:   ".$jsond['data']['login_cookie_path']."<br/>";

    	}

    }
?>
<html>
	<head>
		<title>用户中心API</title>
	</head>
	<body>
		<center>
			<h1>用户中心API的调用</h1>
			<form action="user.php" method="post">
				<table border="0">
					<tr>
						<td>用户名:</td>
						<td><input type="text" name="username" ><br/></td>
					</tr>
					<tr>
						<td>密码：</td>
						<td><input type="password" name="password" ><br/></td>
					</tr>
				    <tr >   
						<td >
							<input name="sub" type="submit" value="提交">
							<input type="reset" value="重置">
						</td>
					</tr>
				</table>
			</form>
		</center>
	</body>
</html>