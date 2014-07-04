--TEST--
Test for bug 0001047
--INI--
xdebug.enable=1
xdebug.auto_trace=1
xdebug.collect_params=1
xdebug.collect_return=1
xdebug.collect_assignments=0
xdebug.auto_profile=0
xdebug.profiler_enable=0
xdebug.show_mem_delta=0
xdebug.trace_format=0
--FILE--
<?php
	function autoload($class_name)
	{
		include __DIR__ . DIRECTORY_SEPARATOR . "$class_name.inc";
	}
	spl_autoload_register('autoload');
	var_dump(class_exists('ServiceProvider'));
?>
--EXPECTF--

bool(true)
