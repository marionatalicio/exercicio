<?php

require_once '../modelos/CrudProdutos.php';


$crud = new CrudProdutos();
$produto = $crud->getProdutos();

if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){

    case 'index':

        $crud = new CrudProdutos();
        $produtos = $crud->getProdutos();

        include '../views/templates/cabecalho.php';
        include '../views/produtos/index.php';
        include '../views/templates/rodape.php';
        break;

    case 'show';
        $id = $_GET['id'];
        $crud = new CrudProdutos();
        $produto = $crud->getProdutos($id);
        include '../views/templates/cabecalho.php';
        include '../views/produtos/show.php';
        include '../views/templates/rodape.php';
        break;

    case 'inserir';
        if (!isset($_POST['gravar'])){ // se ainda nao tiver preenchido o form
            include '../views/templates/cabecalho.php';
            include '../views/produtos/inserir.php';
            include '../views/templates/rodape.php';
            break;
        }else{
            $nome = $_POST['nome'];
            $descricao= $_POST['descricao'];
            $novaCategoria = new Categoria(null,$nome,$descricao);

            $crud = new CrudProdutos();
            $crud->insertCategoria($novaCategoria);

            header('Location: categoria.php');
        }

    case 'alterar';
        $id = $_GET['id'];
        $crud = new CategoriaCrud();

        $categoria = $crud->getCategoria($id);

    //receber id
    //instanciar o objeto -preciso deo getcategoria($id)
    //
}