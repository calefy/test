<!DOCTYPE html>
<html>
<head>
<meta charset="utf8" />
<title>帮助测试文档</title>
<style type="text/css">
body{padding:10px 20px;}
table{border-collapse:collapse;}
td{padding:3px 5px;border:1px solid #999;}
caption{font-weight:bold;text-align:left;padding:10px;background-color:#ccc;border:1px solid #999;border-bottom:none;}
tr:nth-child(2n){background-color:#eee;}

</style>
</head>
<body>

<table>	
	<caption>$_SERVER 对象内容</caption>
	<?php
	//查看所有SERVER对象
	$html = '';
	foreach( $_SERVER as $key=>$val ){
		$html .= "<tr><td>{$key}</td><td>{$val}</td></tr>";
	}
	echo $html;
	?>
</table>
<br/>

<table>	
	<caption>$_ENV 对象内容</caption>
	<?php
	//查看所有ENV对象
	$html2 = '';
	foreach( $_ENV as $key=>$val ){
		$html2 .= "<tr><td>{$key}</td><td>{$val}</td></tr>";
	}
	echo $html2;
	?>
</table>

</body>
</html>

