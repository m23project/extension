<?php
$br = (php_sapi_name() == "cli")? "":"<br>";

if(!extension_loaded('sdl_ttf')) {
	dl('sdl_ttf.' . PHP_SHLIB_SUFFIX);
}
$module = 'sdl_ttf';
$functions = get_extension_funcs($module);
echo "Functions available in the test extension:$br\n";
foreach($functions as $func) {
    echo $func."$br\n";
}
echo "$br\n";
if (!extension_loaded($module)) {
	$str = "Module $module is not compiled into PHP";
}
echo "$str\n";
?>
