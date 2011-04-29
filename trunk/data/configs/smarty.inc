<?php
/**************************************************************************************************/
/* Created on Nov 29, 2008                                                                        */
/**************************************************************************************************/
require_once( LIB_PATH . "smarty/Smarty.class.php" );
$smarty = new Smarty();

$smarty->template_dir = TEMPLATES_PATH;
$smarty->compile_dir  = TEMPLATES_C_PATH;
$smarty->cache_dir    = SMARTY_CACHE;
$smarty->config_dir   = SMARTY_CONFIG;

$smarty->register_function('textpad', 'textpad');
$smarty->register_function('nl2br', 'breakline2br');
$smarty->register_function('utf8_decode', 'showInVietnamese');

function textpad($params)
{
	return str_pad($params['text'], $params['length'], '0', STR_PAD_LEFT);
}

function breakline2br($params)
{
	return nl2br($params['value']);
}

function showInVietnamese($params)
{
	return utf8_decode($params['value']);
}
?>
