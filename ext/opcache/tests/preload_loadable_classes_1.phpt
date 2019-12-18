--TEST--
Preloading: Loadable class checking (1)
--INI--
opcache.enable=1
opcache.enable_cli=1
opcache.optimization_level=-1
opcache.preload={PWD}/preload_loadable_classes_1.inc
--SKIPIF--
<?php require_once('skipif.inc'); ?>
--FILE--
<?php
var_dump(class_exists('Test'));
var_dump(class_exists('Bar'));
var_dump(class_exists('Foo'));
?>
--EXPECT--
bool(true)
bool(true)
bool(true)
