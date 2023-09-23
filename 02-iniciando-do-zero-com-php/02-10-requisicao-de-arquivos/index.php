<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("02.10 - Requisição de arquivos");

/*
 * [ include ] https://php.net/manual/pt_BR/function.include.php
 * [ include_once ] https://php.net/manual/pt_BR/function.include-once.php
 */
fullStackPHPClassSession("include, include_once", __LINE__);

// include pode ser solicitado mas não tem obrigatoriedade de uso
// vai gerar erro porem o codigo da frente vai executar normal
// include_once vai rodar o include apenas se ele já não foi solicitado, mesma situação com o require

include __DIR__ . "/header.php";

$profile = new StdClass();
$profile->name = "Djonatan";
$profile->company = "Magazord";
$profile->email = "djonatan.rodrigues@magazord.com.br";
include __DIR__ . "/profile.php";


$profile = new StdClass();
$profile->name = "Jonnas";
$profile->company = "Magazord";
$profile->email = "jonas@magazord.com.br";
include __DIR__ . "/profile.php";

/*
 * [ require ] https://php.net/manual/pt_BR/function.require.php
 * [ require_once ] https://php.net/manual/pt_BR/function.require-once.php
 */
fullStackPHPClassSession("require, require_once", __LINE__);


require __DIR__ . "/config.php";
require_once __DIR__ . "/config.php";

echo "<h1>" . COURSE . "</h1>";

