--TEST--
Simple init
--SKIPIF--
<?php
if (!extension_loaded("sdl2")) die("skip: SDL2 extension not loaded");
?>
--FILE--
<?php 
var_dump(SDL_Init());
var_dump(SDL_WasInit());
var_dump(SDL_Quit());
?>
Done
--EXPECTF--
int(0)
int(29233)
NULL
Done