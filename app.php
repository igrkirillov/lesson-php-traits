<?php

require_once (__DIR__ . '/autoload.php');
spl_autoload_register("autoload");

$auth = new Authentication();

echo var_export($auth->authenticate("mob", "mob"), true) . PHP_EOL;
echo var_export($auth->authenticate("app", "app"), true) . PHP_EOL;
echo var_export($auth->authenticate("login", "password"), true) . PHP_EOL;