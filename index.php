<?php
include 'config.php';
include_once 'lib/Smarty.class.php';

$smarty = new Smarty();
$smarty->template_dir='templates';
$smarty->compile_dir='templates_c';
$smarty->config_dir='configs';
$smarty->cache_dir='cache';


$array=array
(
    'one'=>1,
    'two'=>2,
    'three'=>array
    (
           array
           (
             'one'=>1,
             'two'=>2
           ),
           array
           (
             'one'=>1,
             'two'=>2
           ),
           array
           (
             'one'=>1,
             'two'=>2
           )
    )
);
$smarty->assign('array', $array);
$smarty->display('index.tpl');
?>