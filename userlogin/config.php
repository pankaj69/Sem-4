<?php
$db_user='root';
$db_password='Pankaj123@';
$db_name='college';

$db = new PDO('mysql:host=localhost;dbname='.$db_name .';charset=utf8',$db_user,$db_password);
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
?>