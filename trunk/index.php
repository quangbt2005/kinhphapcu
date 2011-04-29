<?php
require_once( "includes/init.inc" );
$Pham = '';
$Cau = '';
$GhiChu = '';

$pham_id = $_GET['id'];
$Pham = LoadCategoriesOfPham();
if($pham_id != ''){
	$Cau = LoadCauInPham($pham_id);
  $GhiChu = LoadGhiChuInPham($pham_id);
}

$smarty->assign('Pham', $Pham);
$smarty->assign('Cau', $Cau);
$smarty->assign('GhiChu', $GhiChu);

$smarty->display('index.tpl');
?>
