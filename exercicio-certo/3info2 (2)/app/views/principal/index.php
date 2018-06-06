<html>
<head>

        <meta charset="utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/css/principal.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    <script>

        $(document).ready(function () {

            $("#abas ul li").click(function(){

                $(this).toggleClass("selecionado");


                // conteudo aparecendo ou n

                var id = $(this).attr("id");
                $("."+id).toggle();


            });

        });
        $(document).ready(function () {

            $("#aba").click(function(){

                $(this).toggleClass("selecionado");


                // conteudo aparecendo ou n

                var id = $(this).attr("id");
                $("."+id).toggle();


            });

        });

    </script>


</head>


<body>
<nav class="light-blue lighten-1" role="navigation">

    <div class="nav-wrapper container">    <img class="responsive-img" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYF8gKk557N_nkIdod9mBGlHCuaP1QWVV4XxsTeXG_UtIuEBPYWg" ><a id="logo-container" href="#" class="brand-logo">VilleAraqua</a>

        <ul class="right hide-on-med-and-down">
            <li><a href="#">Navbar Link</a></li>
        </ul>

        <ul id="nav-mobile" class="sidenav">
            <li><a href="#">Navbar Link</a></li>
        </ul>
        <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
</nav>
<section id="center">

    <div id="abas">

        <ul>
            <?php foreach ($categorias as $categoria):?>
            <li id="aba<?= $categoria->getId()?>" class="selecionado"> <?= $categoria->getNome()?> </li>
            <?php endforeach;?>
        </ul>


    </div>



    <?php foreach ($produtos as $produto):?>
    <div id="aba" class="conteudo aba<?= $produto->getIdCategoria()?>">
        <?= $produto->getNome()?>
        <div id="tab">
        <?= $produto->getDescricao()?>
        </div>
        <!-- conteudo da categoria-->
    </div>
    <?php endforeach;?>



</section>
<footer class="page-footer light-blue lighten-1">
    <div class="container">
        <div class="row">
            <div class="col l6 s12">
                <h5 class="white-text">Araqua</h5>
                <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>


            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Settings</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
            <div class="col l3 s12">
                <h5 class="white-text">Connect</h5>
                <ul>
                    <li><a class="white-text" href="#!">Link 1</a></li>
                    <li><a class="white-text" href="#!">Link 2</a></li>
                    <li><a class="white-text" href="#!">Link 3</a></li>
                    <li><a class="white-text" href="#!">Link 4</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            Made by <a class="orange-text text-lighten-3" href="http://materializecss.com">Materialize</a>
        </div>
    </div>
</footer>


</body>

</html>