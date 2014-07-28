<?php

include 'debug.php';
	
	debug($a, '1', pow(9999, 1000), '3', 5, true, false, array(
		'name' => 'Nguyễn Hữu Đại',
		'age' => 45,
		'level' => array(
			'lv1' => 'Cấp 1',
			'lv2' => 'Cấp 2',
			'lv3' => 'Cấp 3'
		),
		'other' => array(
			array(1,2,3),
			array(1,2,3.56),
			array(1,2,3)
		)
	));

?>