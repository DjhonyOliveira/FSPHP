<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.06 - Arrays, vetores e pilhas");

/**
 * [ arrays ] https://php.net/manual/pt_BR/language.types.array.php
 */
fullStackPHPClassSession("index array", __LINE__);

$arrA = array(1,2,3);
$arrA = [0,1,2,3];
var_dump($arrA);

$arrayIndex = [
    "Brian",
    "Angus",
    "Malcom"
];
$arrayIndex[] = "Cliff";
$arrayIndex[] = "Phil";

var_dump($arrayIndex);

/**
 * [ associative array ] "key" => "value"
 */
fullStackPHPClassSession("associative array", __LINE__);

$arrayAssoc = [
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff",
];
$arrayAssoc["drums"] = "Phil";
$arrayAssoc["rock_band"] = "AC/DC";
var_dump($arrayAssoc);

/**
 * [ multidimensional array ] "key" => ["key" => "value"]
 */
fullStackPHPClassSession("multidimensional array", __LINE__);

$brian = ["Brian", "Mic"];
$angus = ["name" => "Angus", "Instrument" => "Guitar"];
$instruments = [
    $brian,
    $angus
];
var_dump($instruments);

var_dump([
    "Brian" => $brian,
    "Angus" => $angus
]);

/**
 * [ array access ] foreach(array as item) || foreach(array as key => value)
 */
fullStackPHPClassSession("array access", __LINE__);

$acdc = [
    "band" => "AC/DC",
    "vocal" => "Brian",
    "solo_guitar" => "Angus",
    "base_guitar" => "Malcolm",
    "bass_guitar" => "Cliff",
    "drums" => "Phil"
];

$pearl = [
    "band" => "Pearl Jam",
    "vocal" => "Eddie",
    "solo_guitar" => "Mike",
    "base_guitar" => "Stone",
    "bass_guitar" => "Jeff",
    "drums" => "Jack"
];

$rockBands = [
    "acdec" => $acdc,
    "pearl_jam" => $pearl
];

var_dump($rockBands);

echo "<p>{$rockBands['pearl_jam']['vocal']}";

foreach ($acdc as $item) {
    echo "<p>{$item}</p>";
}

foreach ($acdc as $key => $value) {
    echo "<p>{$value} is a  {$key} of band!!</p>";
}

foreach ($rockBands as $rockBand) {
    var_dump($rockBand);
    $art = "<article><h1>%s</h1><p>%s</p><p>%s</p><p>%s</p><p>%s</p><p>%s</p></article>";
    vprintf($art, $rockBand);
}

//echo "<p>O vocal da banda AC/DC é {$acdc["vocal"]}, e junto com {$acdc["solo_guitar"]} fazem um ótimo show de rock!";