<?php
require_once( "includes/init.inc" );
$Pham = '';
$Cau = '';
$GhiChu = '';

@$pham_id = $_GET['id'];

if(empty($pham_id)) $pham_id = 1;
$phamtieptruoc = $pham_id - 1;
$phamtiepsau = $pham_id + 1;
if($phamtieptruoc<1) $phamtieptruoc = '';
if($phamtiepsau>26) $phamtiepsau = '';

$Pham = LoadCategoriesOfPham();
if($pham_id != ''){
	$Cau = LoadCauInPham($pham_id);
  $GhiChu = LoadGhiChuInPham($pham_id);
}

$smarty->assign('Pham', $Pham);
$smarty->assign('Cau', $Cau);
$smarty->assign('GhiChu', $GhiChu);
$smarty->assign('phamtieptruoc', $phamtieptruoc);
$smarty->assign('phamtiepsau', $phamtiepsau);

$smarty->display('index.tpl');
?>
