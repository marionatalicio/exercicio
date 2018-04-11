<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 11/04/18
 * Time: 13:23
 * ação do usuário e faz alguma coisa
 */


require_once '../modelos/CategoriaCrud.php';


if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

    switch ($acao){

        case 'index';

            $crud = new CategoriaCrud();
            $categorias = $crud->getCategorias();
            var_dump($categorias);
            include '../visoes/categoria/index.php';;
            //include '../visoes/categoria/cabecalho.php';
            //include '../visoes/categoria/rodape.php';;

            break;



        case'show':
            $id = $_GET['id'];
            $crud = new CategoriaCrud();
            $categorias = $crud->getCategorias($id);
            include '../visoes/categoria/show.php';
            break;



    }




