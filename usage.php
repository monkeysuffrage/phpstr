<?php
require 'phpstr.php';
echo str('There are 23 people reading this blog')->match('/\d+/') . "\n";
echo str('all of the es')->gsub('/e/', 'y') . "\n";
echo str('just the first e')->sub('/e/', 'y') . "\n";
var_dump(str('010 202 312 332')->scan('/\d+/'));
var_dump(str('010 202-312 332')->split('/\s/'));
?>