<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 16/11/2017
 * Time: 10:56
 */

require_once "BDConection.php";
require_once "Produto.php";

class CrudProdutos
{

    private $conexao;
    private $produto;

    public function __construct()
    {
        $this->conexao = Conexao::getConexao();
    }

    public function salvar(Produto $produto)
    {
        $sql = "INSERT INTO tb_produtos (nome, preco, categoria, estoque, imagem) VALUES ('$produto->getNome()', $produto->getPreco(), '$produto->categoria',$produto->estoque,'$produto->imagem')";

        $this->conexao->exec($sql);
    }

    public function getProduto($id )
    {
        $consulta = $this->conexao->query("SELECT * FROM produtos WHERE id = getId()");
        $produto = $consulta->fetch(PDO::FETCH_ASSOC);

        return new Produto ($produto['nome'], $produto['preco'], $produto['categoria'], $produto['estoque'],  $produto['imagem']);

    }

    public function getProdutos()
    {
        $sql = "select * from produto order by nome_produto";
        $resultado = $this->conexao->query($sql);
        $listaProdutos = [];

        $produtos = $resultado->fetchAll(PDO::FETCH_ASSOC);
        foreach ($produtos as $produto){
            $objeto = new Categoria(produto['id_produto'], $produto['nome_produto'], $produto['descricao_produto']);
            $listaProdutos[] = $objeto;
        }
        return $listaProdutos;
    }

    public function excluirProduto(int $codigo)
    {

        //DELETE FROM table_name WHERE condition;
        $this->conexao->query("DELETE FROM tb_produtos WHERE codigo = $codigo");
    }

    public function editar(Produto $produto){

        $this->conexao->exec("UPDATE tb_produtos SET nome ='$produto->getNome()', preco = $produto->getPreco(), categoria = '$produto->categoria', estoque = $produto->estoque, imagem= '$produto->imagem' WHERE codigo = $produto->codigo ");
    }

//    public function comprar(int $codigo, int $qtdDesejada){
//
//        $p = $this->getProduto($codigo);
//
//        $estoqueAtual = $p->estoque;
//
//        if ($qtdDesejada > $estoqueAtual){
//            return "hje nao querido";
//        }else {
//
//            $novoEstoque = $estoqueAtual - $qtdDesejada;
//
//            $this->conexao->exec("UPDATE `tb_produtos` SET `estoque` = $novoEstoque WHERE `codigo` = $codigo");
//
//            return "hoje sim";
//        }
//    }

}

