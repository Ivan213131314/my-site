<?php
define('DB_HOST','localhost');
define('DB_USER','Viktor');
define('DB_PASSWORD','1234');
define('DB_NAME','my_db');

$site_name='Изучаем шаблонизатор Smarty';
$arr=array(1,2,3,4);
$arr2=array('one'=>1,'two'=>2);
header("Content-Type:text/html;charset='cp1251'");
/*
$db=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);

if(!$db)
{
    exit('No connection with database');
}
if(!mysql_select_db(DB_NAME,$db))
{
    exit('Wrong database');
}
mysql_query("SET NAMES cp1251");*/
?>
