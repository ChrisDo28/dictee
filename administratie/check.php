<?php
session_start();
if (!isset($_SERVER["HTTP_REFERER"])) exit();
$json = get_object_vars(json_decode(file_get_contents("../" . $_SERVER["REGISTERfilename"])));

foreach ($json["players"] as $i => $n) echo "<li>$n <a href=\"?remove=$i\">Verwijderen</a></li>\n";
if (count($json["players"]) == 0) echo "<li><i>Er zijn momenteel geen deelnemers.</i></li>\n";
?>