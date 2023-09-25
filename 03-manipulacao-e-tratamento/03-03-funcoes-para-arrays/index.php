<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("03.03 - Funções para arrays");

/*
 * [ criação ] https://php.net/manual/pt_BR/ref.array.php
 */
fullStackPHPClassSession("manipulação", __LINE__);

$index = [
    "AC/DC",
    "Nirvana",
    "Alter Bridge",
];

$assoc = [
    "band_1" => "AC/DC",
    "band_2" => "Nirvana",
    "band_3" => "Alter Bridge",
];

array_unshift($index, ""); // adiciona valores no inicio do array
$index = [" "] + $index; // faz a mesma coisa que a função a cima, adiciona no incio do  array,

array_push($index," "); // adiciona valor no final do array
$index = $index + [" "]; // mesma coisa da função a cima

array_shift($index); // remove o primeiro item do array
array_pop($index); // remove o ultimo item do array

array_filter($index); // remove qualquer indice do array que não possua valor


/*
 * [ ordenação ] reverse | asort | ksort | sort
 */
fullStackPHPClassSession("ordenação", __LINE__);

$index = array_reverse($index);
$assoc = array_reverse($assoc);

asort($index);
asort($assoc);

ksort($index);
ksort($assoc);

sort($index);
ksort($index);

var_dump([
    $index,
    $assoc
]);
/*
 * [ verificação ]  keys | values | in | explode
 */
fullStackPHPClassSession("verificação", __LINE__);

var_dump(
    [
        array_keys($assoc),
        array_values($assoc)
    ]
);

if (in_array("AC/DC", $assoc)) {
    echo "<p>Cause I'm back!</p>";
}

$arrToString = implode(", ", $assoc); // transforma o array em string, com base no seletor usado
echo "<p>Eu curto {$arrToString} e muitas outras!</p>";
echo "<p>{$arrToString}</p>";

var_dump(explode(", ", $arrToString)); // transforma a string em array com base no seletor usado


/**
 * [ exemplo prático ] um template view | implode
 */
fullStackPHPClassSession("exemplo prático", __LINE__);

$profile = [
    "name" => "Djonatan",
    "company" => "Magazord",
    "mail" => "djonatan.rodrigues@magazord.com.br"
];

$template = <<<prf
    <article>
        <h1>{{name}}</h1>
        <p>{{company}}<br>
        <p href="mailto:{{mail}}" title="Enviar e-mail para {{name}}">Enviar E-mail</a></p>
    </article>
prf;

echo str_replace(
    array_keys($profile), array_values($profile), $template
);

$replaces = "{{" . implode("}}&{{", array_keys($profile)) . "}}";

echo str_replace(
    explode("&", $replaces),
    array_values($profile),
    $template
);
