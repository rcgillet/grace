<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/smarty/libs/Smarty.class.php');

$smarty = new Smarty();

$smarty->setTemplateDir($_SERVER['DOCUMENT_ROOT'] . '/grace/templates/');
$smarty->setCompileDir($_SERVER['DOCUMENT_ROOT'] . '/grace/templates_c/');

$smarty->display('hero.tpl');

?>