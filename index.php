<?php

include 'debug.php';
	
	class A
	{
		public $var1;
		public $var2;

		public static function __set_state($an_array)
		{
			$obj = new A;
			$obj->var1 = $an_array['var1'];
			$obj->var2 = $an_array['var2'];
			return $obj;
		}
		
		public function doExecute(){
			return $this->$var1;
		}
	}

	$a = new A;
	$a->var1 = 5;
	$a->var2 = 'foo';
	
	debug($b, $a, '1', pow(9999, 1000), '3', 5, true, false, array(
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