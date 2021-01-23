<?php
ini_set('display_errors',1);
define('FOLDER_ROOT',__DIR__);
define('FOLDER_CONFIG',FOLDER_ROOT.'/config');
define('FOLDER_DOWNLOAD',FOLDER_ROOT.'/download');
define('FOLDER_MODULE',FOLDER_ROOT.'/module');
define('FOLDER_UPLOAD',FOLDER_ROOT.'/upload');
$mid=isset($_REQUEST['mid'])?$_REQUEST['mid']:'';
$controller=isset($_REQUEST['controller'])? $_REQUEST['controller']:'';
$action=isset($_REQUEST['action'])?$_REQUEST['action']:'';
$submit=isset($_REQUEST['submit'])?$_REQUEST['submit']:'';
include('db.php');
include('fungsi.php');
