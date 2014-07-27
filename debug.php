<?php

	function debug(){		
		$debug = uniqid();
		echo '<meta charset="utf8">';
		echo '<pre id="'. $debug .'" style="display: none;">';		
		var_dump(func_get_args());
		echo '</pre>';
		echo "<script >var de = document.getElementById('$debug');</script>";
		echo "<script src='debugmode.js'></script>";
		die();
	}

	// for notype output
	function debugNT(){		
		$debug = uniqid();
		echo '<meta charset="utf8">';
		// set `notype` attribute to <pre>
		echo '<pre id="'. $debug .'" style="display: none;" notype>';		
		var_dump(func_get_args());
		echo '</pre>';
		echo "<script >var de = document.getElementById('$debug');</script>";
		echo "<script src='debugmode.js'></script>";
		die();
	}

?>