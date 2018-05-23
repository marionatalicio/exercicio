<html>
<head>

        <meta charset="utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/css/principal.css">

    <script>

        $(document).ready(function () {

            $("#abas ul li").click(function(){

                $(this).toggleClass("selecionado");


                // conteudo aparecendo ou n

                var id = $(this).attr("id");
                $("."+id).toggle();


            });

        });

    </script>


</head>


<body>

<section id="center">

    <div id="abas">

        <ul>
            <?php foreach ($categorias as $categoria):?>
            <li id="aba<?= $categoria->getId()?>" class="selecionado"> <?= $categoria->getNome()?> </li>
            <?php endforeach;?>
        </ul>


    </div>



    <?php foreach ($produtos as $produto):?>
    <div  class="conteudo aba<?= $produto->getIdCategoria()?>">
        <?= $produto->getNome()?>
        <!-- conteudo da categoria-->
    </div>

    <?php endforeach;?>



</section>



</body>

</html>