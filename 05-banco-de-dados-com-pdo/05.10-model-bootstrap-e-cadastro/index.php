<?php
require __DIR__ . '/../../fullstackphp/fsphp.php';
fullStackPHPClassName("05.10 - Model bootstrap e cadastro");

require __DIR__ . "/../source/autoload.php";
use Source\Database\Connect;
use Source\Models\Model;

/*
 * [ bootstrap ] Inicialização de dados
 */
fullStackPHPClassSession("bootstrap", __LINE__);

$model = new \Source\Models\UserModel();

$user = $model->load(55);
//$user = $model->bootstrap("diego", "Oliveira", "diego_2@gmail.com");



var_dump($user);

/*
 * [ save create ] Salvar o usuário ativo (Active Record)
 */
fullStackPHPClassSession("save create", __LINE__);

//if (!$model->find($user->email)) {
//    echo "<p class='trigger warning'>Cadastro</p>";
//    $user->save();
//} else {
//    echo "<p class='trigger accept'>Read</p>";
//    $user = $model->find($user->email);
//}

if ($user){
    $user->destroy();
//    $model->save();
}

var_dump($user);

