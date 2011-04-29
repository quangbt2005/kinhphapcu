<?php
function MySQLSelect($query, $result_type=MYSQL_ASSOC){
  $result = array();

  if (!$link = mysql_connect(DB_HOST, DB_USER, DB_PASS)) {
      echo 'Could not connect to mysql';
      return $result;
  }

  if (!mysql_select_db(DB_NAME, $link)) {
      echo 'Could not select database';
      return $result;
  }
  mysql_query('SET CHARACTER SET utf8');

  $result_handle = mysql_query($query, $link);

  while ($row = mysql_fetch_array($result_handle, $result_type)) {
      $result[] = $row;
  }

  mysql_free_result($result_handle);

  return $result;
}

function LoadCategoriesOfPham(){
  $query = "SELECT * FROM pham";
  return MySQLSelect($query);
}

function LoadCauInPham($pham_id){
  $query = "SELECT c.*,p.ten_pham FROM content c INNER JOIN pham p ON(c.pham=p.id) WHERE p.id=" . $pham_id;
  return MySQLSelect($query);
}

function LoadGhiChuInPham($pham_id){
  $query = "SELECT g.*,p.ten_pham FROM ghichu g INNER JOIN pham p ON(g.pham=p.id) WHERE p.id=" . $pham_id;
  return MySQLSelect($query);
}
?>
