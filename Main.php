<?php
/** После загрузки файла:
 * - распарсить файл
 * - перезаписать распарсенные данные в бд или сохранить новые
 * - вернуть ответ об успешном выполнении или ошибку
 */
// composer require podlove/webvtt-parser
require_once "vendor/podlove/webvtt-parser/src/Podlove/Webvtt/parser.php";

$parser = new Podlove\Webvtt\Parser();
$content = file_get_contents("file/web.vtt");
$result = $parser->parse($content);
print_r($result);