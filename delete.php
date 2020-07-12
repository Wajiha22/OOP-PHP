<?php
include('db.php');
$db = new Database();
$db->connect();
$db->delete('CRUDClass','id=5');
$res = $db->getResult();
print_r($res);
