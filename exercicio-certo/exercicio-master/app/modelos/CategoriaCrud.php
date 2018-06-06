 <?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 01/03/18
 * Time: 16:36
 */
require_once "Conexao.php";
require_once "Categoria.php";

class CategoriaCrud
{
    private $conexao;
    public function getCategorias(){
//lista
        $this->conexao = Conexao::getConexao();
        $sql = "select * from categoria order by nome_categoria";
        $resultado = $this->conexao->query($sql);

        $categorias = $resultado->fetchAll (PDO::FETCH_CLASS, 'categoria',['id_categoria', 'nome_categoria', 'desc_categoria']);


        return $categorias;
    }

    function getCategoria($id){
        $this->conexao = Conexao::getConexao();
        $sql = "select * from categoria WHERE id_categoria = ". $id;
        $resultado = $this->conexao->query($sql);

        $categoria = $resultado->fetch (PDO::FETCH_ASSOC);

        return $categoria;
    }

    function insertCategoria(Categoria $categoria){
        $this->conexao = Conexao::getConexao();
        $sql = "insert into categoria (nome_categoria, descricao_categoria) VALUES ('{$categoria->getNome()}', '{$categoria->getDescricao()}')";
        $this->conexao->exec($sql);

    }

    function UPDATE(Categoria $categoria){
        $sql = "UPDATE categoria SET nome_categoria =".$categoria->getNome()." , desc_categoria = " . $categoria->getDescricao()." WHERE  id_categoria =".$categoria->getId();
    }

}

//
//$crud = new CategoriaCrud();
//$categoria = $crud->getCategorias();
//
//var_dump($categoria);