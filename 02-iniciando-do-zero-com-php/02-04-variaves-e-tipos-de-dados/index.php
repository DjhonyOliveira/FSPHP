<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.04 - Variáveis e tipos de dados");

/**
 * [tipos de dados] https://php.net/manual/pt_BR/language.types.php
 * [ variáveis ] https://php.net/manual/pt_BR/language.variables.php
 */
fullStackPHPClassSession("variáveis", __LINE__);

$userFirstName = "Djonatan";
$userLastName = " Oliveira";
$userAge = "23";
$userEmail = "djonatandeoliveira@hotmail.com";

echo "<h3>{$userFirstName} {$userLastName}</h3>";
echo "<p>{$userFirstName} {$userLastName} <span class='tag'>tem {$userAge} anos</span></p>";
echo "<p>$userEmail</p>";

// variavel variavel
$company = "merda";
$$company = "grande";
echo "<h3>{$company} {$merda}</h3>";

$calcA = 10;
$calcB = 20;

$calcB = &$calcA;
$calcB = 50;

var_dump([
    "a" => $calcA,
    "b" => $calcB
]);

/**
 * [ tipo boleano ] true | false
 */
fullStackPHPClassSession("tipo boleano", __LINE__);

$true = true;
$false = false;

var_dump([
    "t" => $true,
    "f" => $false
]);


/**
 * [ tipo callback ] call | closure
 */
fullStackPHPClassSession("tipo callback", __LINE__);

$code = "<article><h1>Um Call User Functions!</h1></article>";
$codeClear = call_user_func("strip_tags", $code);
var_dump($codeClear);

/**
 * [ outros tipos ] string | array | objeto | numérico | null
 */
fullStackPHPClassSession("outros tipos", __LINE__);

$string = "Olá Mundo!";
$array = [$string];
$object = new StdClass();
$object->hello = $string;
$null = null;
$int = 123;
$float = 1.123;

var_dump([
    $string,
    $array,
    $object,
    $null,
    $int,
    $float
]);