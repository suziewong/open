<?php
	$API_KEY="1WKtFGFhGcEzGYPCungEBrU9";
	$url="http://openapi.baidu.com/public/2.0/bmt/translate";
	//unset($_POST['sub']);
	$from="";
	$to="";
	if(isset($_POST['sub'])){
		//echo "hrere";
		$yl=$_POST["from"];
		$from=trim($_POST["from"]);
		//$from = preg_replace("/[\n\r\t]/","", $from);
		//$from = preg_replace("/\s(?=\s)/","\s", $from);
		
		$from = preg_replace("/\s?/","", $from);
		//$from = preg_replace("/[\n\t]/"," ", $from);
		//$from=urlencode($from);
		echo $from;
		$url=$url."?client_id=".$API_KEY."&q=".$from."&from=auto&to=auto";
		//echo $url;
		//echo $from;
		$file_contents = file_get_contents($url);
     	//echo "head";
     	//echo $file_contents;
     	//echo "head";
     	$jsond = json_decode($file_contents,true);
     	//var_dump($jsond);
     	$to=$jsond['trans_result']['0']['dst'];
     	$to = preg_replace("/\s__\s/","\n", $to);
     	//echo $to;
     	unset($_POST['sub']);
	}
	


?>

<html>
	<head>
		<title>百度翻译API</title>
		<meta  http-equiv="Content-Type" content="text/html; charset=urf8">
	</head>
	<body>
		<center>
			<h1>百度翻译API的调用</h1>
			<form action="translate.php" method="post">
				<table border="0">
					<tr>
						<td>要翻译的中文</td>
						<td><textarea rows="5" name="from"><?php echo $yl; ?></textarea><br/></td>
					</tr>
					<tr>
						<td>翻译后：</td>
						<td><textarea rows="5" name="to"><?php echo $to; ?></textarea><br/></td>
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