<?php

ini_set('display_errors', 1);

$db =  new mysqli('localhost', 'root', '');
$db->select_db('erp-impy');