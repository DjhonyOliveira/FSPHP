<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.02 - Funções para strings");

/*
 * [ strings e multibyte ] https://php.net/manual/en/ref.mbstring.php
 */
fullStackPHPClassSession("strings e multibyte", __LINE__);

$string = "O último show do AC/DC foi incrível!";

var_dump([
    "string" => $string,
    "strlen" => strlen($string),
    "mb_strlen" => mb_strlen($string),
    "substr" => substr($string, 9),
    "mb_substr" => mb_substr($string, 9),
    "strtoupper" => strtoupper($string),
    "mb_strtoupper" => mb_strtoupper($string)
]);

/**
 * [ conversão de caixa ] https://php.net/manual/en/function.mb-convert-case.php
 */
fullStackPHPClassSession("conversão de caixa", __LINE__);

$mbString = $string;

var_dump([
    "mb_strtoupper" => mb_strtoupper($mbString),
    "mb_strtolower" => mb_strtolower($mbString),
    "mb_convert_case UPPER" => mb_convert_case($mbString, MB_CASE_UPPER),
    "mb_convert_case LOWER" => mb_convert_case($mbString, MB_CASE_LOWER),
    "mb_convert_case TITLE" => mb_convert_case($mbString, MB_CASE_TITLE)
]);

/**
 * [ substituição ] multibyte and replace
 */
fullStackPHPClassSession("substituição", __LINE__);

$mbReplace = $mbString . " Fui, iria novamente, e foi épico!";

var_dump([
    "mb_strlen" => mb_strlen($mbReplace),
    "mb_strpos" => mb_strpos($mbReplace, ", "),
    "mb_strrpos" => mb_strrpos($mbReplace, ", "),
    "mb_substr" => mb_substr($mbReplace, 40 + 2, 14),
    "mb_strstr" => mb_strstr($mbReplace, ", ", true),
    "mb_strrchr" => mb_strrchr($mbReplace, ", ", true)
]);

$mbStrReplace = $string;

echo "<p>", $mbStrReplace, "</p>";
echo "<p>", str_replace("AC/DC", "Nirvana", $mbStrReplace), "</p>";
echo "<p>", str_replace(["AC/DC", "eu fui", "último"], "Nirvana", $mbStrReplace), "</p>";
echo "<p>", str_replace(["AC/DC", "incrivel"], ["Nirvana", "ÉPICOOOO!!!!"], $mbStrReplace), "</p>";

$article = <<<TESTE
    <article>
        <h3>event</h3>
        <p>desc</p>
    </article>
TESTE;

$articleData = [
    "event" => "Rock in Rio",
    "desc" => $mbReplace
];

echo str_replace(array_keys($articleData), array_values($articleData), $article);


/**
 * [ parse string ] parse_str | mb_parse_str
 */
fullStackPHPClassSession("parse string", __LINE__);

$endpoint = "name=Djonatan&email=djonatandeolivera@hotmail.com";
mb_parse_str($endpoint, $parseEndpoint);

var_dump([
    $endpoint,
    $parseEndpoint,
    (object)$parseEndpoint
]);