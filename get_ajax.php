<?php 
header("Content-type: text/plain; charset=utf-8");
header("Cache-Control: no-store, no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
sleep(1);
error_reporting(0);
$result = $_POST['area'];
$result = str_replace(',', '.', $result);
$result = str_replace('ctg', '1/tan', $result);
$result = str_replace('tg', 'tan', $result);
$result = str_replace('^', '**', $result);
$result = str_replace(' ', '+', $result);		
eval('$computed = '.$result.';');
if (is_numeric($computed)) {
	echo "<pre>".stripslashes($computed)."</pre>";
} else {
	if ($result == '') {
		echo "<pre>".stripslashes('0')."</pre>";
	} else{
		echo "<pre>".stripslashes('Error! Invalid expression!')."</pre>";
	}
}

?>