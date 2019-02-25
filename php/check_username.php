<?php
//載入資料庫與處理的方法
require_once 'db.php';
require_once 'functions.php';

//執行檢查有無使用者的方法。
$check = check_has_username($_POST['account_name']);

if($check)
