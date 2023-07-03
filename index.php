<?php 
require 'Smarty/libs/Smarty.class.php';

$smarty = new Smarty;

$smarty->assign('title','Hello World');

$smarty->assign('hello','Hello World, this is my first Smarty!');

$smarty->display('template.tpl');
?>
