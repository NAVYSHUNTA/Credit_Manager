<?php
session_start();

$action = '\sys_login'; //ホームページ (eps_home)をデフォルト機能とする
if (isset($_GET['do'])) {//index.php?do=に続くパラメータで実行する機能を指定
  $action = $_GET['do'];
}
include('C:\xampp82\htdocs\sharedule\src' . $action . '.php'); //指定されたファイルを読み込む

?>