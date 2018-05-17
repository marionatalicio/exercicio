<?php
require_once 'app/modelos/CrudProdutos.php';
require_once 'app/modelos/CategoriaCrud.php';


$crud = new CategoriaCrud();
$categorias = $crud->getCategorias();

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){
    case 'index';
    include 'app/views/principal/index.php';
    break;
}