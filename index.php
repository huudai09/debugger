<?php

include 'debug.php';

	// debug('SELECT ag.name AS agent, `d.date`, d.first_payment_date, d.account_number, d.id as disbursement_id, d.amount as loan_amount, d.late_fee, b.id as bid, b.name as borrower, tf.name as payment_frequency, ap.id as application_id');
	
	debug($b, '1', pow(9999, 1000), '3', 5, true, false, array(
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