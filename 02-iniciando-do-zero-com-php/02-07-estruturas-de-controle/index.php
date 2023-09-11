<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.07 - Estruturas de controle");

/*
 * [ if ] https://php.net/manual/pt_BR/control-structures.if.php
 * [ elseif ] https://php.net/manual/pt_BR/control-structures.elseif.php
 * [ else ] https://php.net/manual/pt_BR/control-structures.else.php
 */
fullStackPHPClassSession("if, elseif, else", __LINE__);

$test = true;
$age = 51;
$hour = 23;

if ($test) {
    var_dump(true);
} else {
    var_dump(false);
}

if ($age) {
    var_dump("Bandas Coloridas");
} elseif ($age > 20 && $age < 50 ) {
    var_dump("Ótimas bandas!");
} else {
    var_dump("Rock and Roll raiz");
}

if ($hour >= 5 && $hour < 23) {
    if ($hour < 7) {
        var_dump("Bob Marley");
    } else {
        var_dump("After Bridge");
    }
} else {
    var_dump("ZZZzzzzzzzZZ");
}

/*
 * [ isset ] https://php.net/manual/pt_BR/function.isset.php
 * [ empty] https://php.net/manual/pt_BR/function.empty.php
 */
fullStackPHPClassSession("isset, empty, !", __LINE__);

$rock = "";
$rockAndRoll = "Nirvana";

if (isset($rock)) { // valida se a variavel em questão existe
    var_dump("Rock And Roll!");
} else {
    var_dump("Die");
}

if (!empty($rockAndRoll)) { // empty = vazio, neste exemplo valida se não é vazio pois o ! é operador de negação
    var_dump("Rock existe e toca {$rockAndRoll}");
} else {
    var_dump("Não existe ou não esta tocando");
}


/*
 * [ switch ] https://secure.php.net/manual/pt_BR/control-structures.switch.php
 */
fullStackPHPClassSession("switch", __LINE__);

$payment = "credit_card";

switch ($payment) {
    case "billet_printed":
        var_dump("Boleto");
        break;
    case "canceled":
        var_dump("Pagamento cancelado");
        break;
    case "past_due":
    case "pending":
        var_dump("Aguardando pagamento");
        break;
    case "approved":
    case "complete":
        var_dump("Pagamento aprovado");
        break;
    default:
        var_dump("Erro ao processar o pagamento");
        break;
};
