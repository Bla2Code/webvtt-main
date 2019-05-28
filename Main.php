<?php
// composer require podlove/webvtt-parser
require_once "vendor/podlove/webvtt-parser/src/Podlove/Webvtt/parser.php";

$parser = new Podlove\Webvtt\Parser();
//$content = "WEBVTT\n\n00:00:00.000 --> 01:22:33.440\nHello world\n\n01:22:33.440 --> 01:22:34.440\n<v Eric>Hi again\n";
$content = file_get_contents("file/web.vtt");
//print_r($content);
$result = $parser->parse($content);
print_r($result);