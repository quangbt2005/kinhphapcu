<?php
require_once( "includes/init.inc" );
$pham_id = $_GET['id'];
$Pham = LoadCategoriesOfPham();
if($pham_id != ''){
	$Cau = LoadCauInPham($pham_id);
}
$smarty->assign('Pham', $Pham);
$smarty->assign('Cau', $Cau);

$smarty->display('index.tpl');
?>
