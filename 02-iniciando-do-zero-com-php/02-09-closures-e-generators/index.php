<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.09 - Closures e generators");

/*
 * [ closures ] https://php.net/manual/pt_BR/functions.anonymous.php
 */
fullStackPHPClassSession("closures", __LINE__);

$myAge = function ($year) {
    $age = date("y") - $year;
    return "<h5>Você tem {$age} anos!</h5>";
};

echo $myAge(2000);

$priceBrl = function ($price) {
  return number_format($price, 2, ",", ".");
};

echo "<p>O projeto custa R$ {$priceBrl(3600)}. Vamos fechar?";
$myCart = [];
$myCart["totalPrice"] = 0;
$cartAdd = function ($item, $qtd, $price) use (&$myCart) {
    $myCart[$item] = $qtd * $price;
    $myCart["totalPrice"] += $myCart[$item];
};

$cartAdd("HTML5", 1, 497);
$cartAdd("JQUERY", 2, 497);

var_dump($myCart, $cartAdd);

/*
 * [ generators ] https://php.net/manual/pt_BR/language.generators.overview.php
 */
fullStackPHPClassSession("generators", __LINE__);

// forma incorreta, é errado pois como ele grava em um vetor e depois iterra
// é usado muita memória no server onde pode dar gargalo e derubar o server
$iterator = 40000000;

function showDates($days)
{
    $saveDate = [];
    for ($day = 1;$day < $days; $day++) {
        $saveDate[] = date("d/m/y", strtotime("+{$day}days"));
    }
    return $saveDate;
}

echo "<div style='text-align: center'>";
foreach (showDates(0) as $date) {
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";


// forma correta
// executa e já retorna, sem necessidade de salvar a informação em alguma variavel
function generatorDate($days)
{
    for ($day = 1; $day < $days; $day++) {
        yield date("d/m/y", strtotime("+{$day}days"));
    }
}

echo "<div style='text-align: center'>";
foreach (generatorDate($iterator) as $date) {
    echo "<small class='tag'>{$date}</small>" . PHP_EOL;
}
echo "</div>";