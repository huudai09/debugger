A simple view for a output data
Installation
============
- Define a function called <code>debug</code> like this or whatever you want:
```php
	function debug(){		
		$debug = uniqid();
		echo '<meta charset="utf8">';
		echo '<pre id="'. $debug .'" style="display: none;">';		
		var_dump(func_get_args());
		echo '</pre>';
		echo "<script >var de = document.getElementById('$debug');</script>";
		echo "<script src='path/to/debugmode.js'></script>";
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
		echo "<script src='path/to/debugmode.js'></script>";
		die();
	}  
```
- Include <code>debugmode.js</code> file to your project

Screenshoot
===========
This is my non-style data output :

![alt text](http://i.imgur.com/Z8enpqj.png "None-style")

After :

![alt text](http://i.imgur.com/vKykF3t.png "Styled")

More :

![alt text](http://i.imgur.com/JThu0kg.png "More")
