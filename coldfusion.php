<?php
	/* directory of functions */
	$dir = 'lib/';
    $handler = opendir($dir);
    while ($file = readdir($handler)) {
      if ($file != "." && $file != "..") {
	  require($dir . $file);
      }
	}
?>