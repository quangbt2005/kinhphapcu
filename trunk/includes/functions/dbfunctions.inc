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

function P_SQL_Quote_Escape_String( $SQL, $Reg_Array, $Cnv_Array )
{
 $Pattern = "/[\\x00-\\x08]|[\\x0B-\\x0C]|[\\x0E-\\x1F]/";
 $SQL     = preg_replace( $Pattern, "", $SQL );

 $XX = 0;

 $Count = count( $Reg_Array );

 while( $XX < $Count )
 {
  $SQL = mb_ereg_replace( $Reg_Array[$XX], $Cnv_Array[$XX], $SQL );
  ++$XX;
 }

 return $SQL;
}

function MySQLQuote($SQL, $DBMS=''){
  $Reg_Array = array( "\\\\", "'",   "\"" );
  $Cnv_Array = array( "\\\\", "\\'", "\\\"" );

  if( mb_strtoupper( $DBMS ) == "ORACLE" )
  {
    $Reg_Array = array( "'" );
    $Cnv_Array = array( "''" );
  }

  return P_SQL_Quote_Escape_String( $SQL, $Reg_Array, $Cnv_Array );
}

function LoadCategoriesOfPham(){
  $query = "SELECT * FROM pham";
  return MySQLSelect($query);
}

function LoadCauInPham($pham_id){
  $query = "SELECT c.*,p.ten_pham FROM content c INNER JOIN pham p ON(c.pham=p.id) WHERE p.id=" . MySQLQuote($pham_id);
  return MySQLSelect($query);
}

function LoadGhiChuInPham($pham_id){
  $query = "SELECT g.*,p.ten_pham FROM ghichu g INNER JOIN pham p ON(g.pham=p.id) WHERE p.id=" . MySQLQuote($pham_id);
  return MySQLSelect($query);
}

function LoadGhiChuInCau($cau_id){
  $query = "SELECT g.* FROM ghichu g WHERE cau=" . MySQLQuote($cau_id);
  return MySQLSelect($query);
}

function LoadCauByID($cau_id){
  $query = "SELECT c.*,p.ten_pham FROM content c LEFT JOIN pham p ON(c.pham=p.id) WHERE c.id=" . MySQLQuote($cau_id);
  return MySQLSelect($query);
}
function Positive_Int_Check( $value )
{
  if( isset( $value ) == FALSE ) return FALSE;
  if( is_numeric( $value ) == FALSE ) return FALSE;
  if( is_int( $value + 0 ) == FALSE ) return FALSE;
  return $value >= 0;
}
?>
