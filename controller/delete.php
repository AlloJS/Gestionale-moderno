<?php
require_once($_SERVER['DOCUMENT_ROOT'] .'/GESTIONALE_MODERNO/require/require.php'); 
$query = "DELETE FROM users WHERE id = '$_GET[delete]'";
DB::querySelect($query);
DB::redirect('/GESTIONALE_MODERNO/index.php');
