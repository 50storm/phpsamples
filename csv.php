<html>
<head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
<title> csv</title>
</head>
<body>
<?php

$arr = array('T'=>'Tokyo', 'Y'=>'Yokohama', 'K'=>'Kyoto');
//検索結果がarray('N'=>'Nagoya')だとしたら
array_splice($arr, 2, 0, array('N'=>'Nagoya'));
// echo '<pre>';
// var_dump($arr);
// echo '</pre>';
/*
//キーはなくなる
array(4) {
  ["T"]=>
  string(5) "Tokyo"
  ["Y"]=>
  string(8) "Yokohama"
  [0]=>
  string(6) "Nagoya"
  ["K"]=>
  string(5) "Kyoto"
}


*/

$arr = array('T'=>'Tokyo', 'Y'=>'Yokohama', 'K'=>'Kyoto');
//検索結果がarray('N'=>'Nagoya')だとしたら
$arr += array('N'=>'Nagoya');
echo '<pre>';
var_dump($arr);
echo '</pre>';
$arr2 = array('N','K','Y','T');//連組配列を並び替える
// $arr2 = array('N','N');
$ret=array();
foreach ($arr2 as $key => $value) {
	// echo '<pre>';
	// var_dump($key);//1
	// var_dump($value);//'Y'
	// echo '</pre>';
	foreach ($arr as $k => $v) {
	// echo '<pre>';
	// var_dump($k);//'Y'
	// var_dump($v);//'YOKOHAMA'
	// var_dump($value);//'YOKOHAMA'
	// echo '</pre>';
	if($value===$k){
		switch ($k) {
			case 'N':
				$ret=array_merge($ret,array($k => 'なごや'));
				break;
			
			default:
				$ret=array_merge($ret,array($k => $v));
				echo '<pre>';
				var_dump($ret);
				echo '</pre>';

				break;
		}
		
	}

	}
}

echo '<pre>';
var_dump($ret);
echo '</pre>';
exit;

$list = array (
	'ABC'=> array('k0'=>100, 'k1'=>200, 'k2'=>300, 'k3'=>400),
	'DEF'=> array('k00'=>1000, 'k11'=>2000, 'k22'=>3000, 'k33'=>4000),
);

echo '<pre>';
var_dump($list);
echo '</pre>';

$fp = fopen('file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);


?>
</body>
</html>
