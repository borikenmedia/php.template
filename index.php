<?php
session_start();
error_reporting(E_ALL);
date_default_timezone_set("America/Puerto_Rico");
header("Content-type: text/html; Charset: utf-8; Pragma: no-cache;");
/* Micro CMS v2 Release Under GPL3 By dyewilliam */
include("config.php");

$tpl = new template();

$tpl->parse_tpl($tags)->output();

?>
