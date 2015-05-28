	<?php
	$y= 86;$p=263;$g=5;//<=======Менять ТУТ
	$p_1=(($p-1));
	$k_test=(sqrt($p_1));
	$k=round($k_test);
	echo "k=";
	echo $k."\r\n";
	$arr_1 = array(); $arr_2=array();
	echo "___________Calculate values for g^ix___________"."\r\n";
	for ($i=0; $i < $k+1; $i++) { 
		$gim=bcpowmod($g, $i*$k, $p);
		array_push($arr_1, $gim);
		}
		print_r($arr_1);
		echo "___________Find entry___________"."\n";
		for ($j=0; $j <$i+1 ; $j++) { 
		$h=$y*(pow($g, $j));
		$deg=$h%$p;
		array_push($arr_2, $deg);
		$result=array_intersect($arr_1, $arr_2);
			if (!empty($result)) {
				print_r($arr_2);
				echo "Value is find"."\n";
				print_r($arr_2[$j]."\r\n");
				break;
				}
		}

	?>