<?php

function testfun()
{
   echo "Your test function on button click is working";
}

if(array_key_exists('test',$_POST)){
   testfun();
}




?>
<!DOCTYPE html>
<html>
<head>
<style>
pre {
	display: block;
	padding: 9.5px;
	font-size: 13px;
	line-height: 1.42857143;
	word-break: break-all;
	word-wrap: break-word;
	background-color: #f5f5f5;
	border: 1px solid #ccc;
	border-radius: 4px;
}
</style>
</head>
<body>
<form method="post">
    <input type="submit" name="test" id="test" value="Submit" /><br/>
</form>

<pre></pre>
</body>
</html>

