<?php
session_start();
error_reporting(E_ALL);
date_default_timezone_set("America/Puerto_Rico");
header("Content-type: text/html; Charset: utf-8; Pragma: no-cache;");
/* Micro CMS v2 Release Under GPL3 By dyewilliam */
include("config.php");

$tpl = new template($conf["tpl_file_path"]);

$tpl->parse_tpl($conf["tpl_file_tags"])->display_tpl();

?>
