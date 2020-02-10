<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-09 19:19:51
  from 'F:\OSPanel\OSPanel\domains\smarty\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e40312739c149_20354921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fb169a29457b44ad0b3f7892a89eb0247c88fbd' => 
    array (
      0 => 'F:\\OSPanel\\OSPanel\\domains\\smarty\\templates\\index.tpl',
      1 => 1581265188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e40312739c149_20354921 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
</head>
<body>
    <h1><?php echo $_smarty_tpl->tpl_vars['array']->value[1]['one'];?>
</h1>
	<h2><?php echo $_smarty_tpl->tpl_vars['site_name']->value;?>
</h2>
    <?php echo $_smarty_tpl->tpl_vars['author']->value;?>
<br>
    <?php echo $_smarty_tpl->tpl_vars['text']->value;?>
<br>

</body>
</html><?php }
}
