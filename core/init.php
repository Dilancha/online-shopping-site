<?php
$db =mysqli_connect('localhost','root','','ecommercesite');

if(mysqli_connect_errno()){

echo 'Database Connection Failed With Following Errors:'.mysql_connect_error();
die();

}

require_once $_SERVER['DOCUMENT_ROOT'].'/Ecommercesite/config.php';
require_once BASEURL.'helpers/helpers.php';

?>
