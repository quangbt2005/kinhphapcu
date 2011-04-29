<?php
/**************************************************************************************************/
/* Created on Nov 29, 2008                                                                        */
/**************************************************************************************************/
require_once( "data/configs/application.inc" );
require_once( "data/configs/db.inc" );
require_once( "data/configs/smarty.inc" );
// ---------------------------------------------------------------------------------------------- //
// Common functions
// ---------------------------------------------------------------------------------------------- //
require_once( FUNCTIONS_PATH  . "dbfunctions.inc" );
require_once( FUNCTIONS_PATH  . "debugfunctions.inc" );

// session_cache_limiter('private');
session_cache_expire(30);
session_start();
?>
