<?php
//config local
$server_mysql	= "localhost";
$username_mysql	= "um6p_esafe";
$password_mysql	= "yw7L4ww?~Q=p";
$db_mysql		= "um6p_esafe";
$urlroot		= "http://um6p.education/";


//config en ligne
/*$server_mysql	= "localhost";
$username_mysql	= "nouveautouareg_touareg";
$password_mysql	= "touareg123456";
$db_mysql		= "nouveautouareg_touareg";
$urlroot		= "http://127.0.0.1/";
*/

$cn = mysqli_connect($server_mysql, $username_mysql, $password_mysql, $db_mysql);
//mysqli_select_db($db_mysql, $cn);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


?>