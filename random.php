<?php
require_once( "includes/init.inc" );

@$id = $_GET['id'];
if(empty($id)){
  $id = rand(1, 423);
} else {
  $id = explode('_', $id);
}

if(!is_array($id)) $id = array($id);

foreach($id as $i){
  if(!Positive_Int_Check($i)) $i = rand(1, 423);
  $cau = LoadCauByID($i);
  $ghichu = LoadGhiChuInCau($i);

  $Cau[] = $cau[0];
  $GhiChu[$i] = $ghichu;
}

for($i=1;$i<count($Cau); $i++){
  if($Cau[$i]['pham'] == $Cau[$i-1]['pham']){
    $Cau[$i]['pham'] = '';
  }
}

$Pham = LoadCategoriesOfPham();

$smarty->assign('Cau', $Cau);
$smarty->assign('GhiChu', $GhiChu);
$smarty->assign('Pham', $Pham);

$smarty->display('random.tpl');
?>
