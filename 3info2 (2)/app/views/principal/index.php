<html>
<head>

        <meta charset="utf-8">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/css/principal.css">

    <script>

        $(document).ready(function () {

            $("#abas ul li").click(function(){
                $("#abas ul li").removeClass("selecionado");
                $(this).toggleClass("selecionado");


                // conteudo aparecendo ou n
                $(".conteudo").hide();
                var id = $(this).attr("id");
                $("."+id).show();


            });

        });

    </script>


</head>


<body>

<section id="center">

    <div id="abas">

        <ul>
            <li id="aba1"> Tab 1 </li>

        </ul>


        <ul>
            <li id="aba2"> Tab 2 </li>
                </ul>


        <ul>


            <li id="aba3"> Tab 3 </li>

            </ul>

    </div>


    <div id="conteudo1" class="conteudo aba1">
        conteudo da div 1
    </div>


    <div id="conteudo2" class="conteudo aba2"  >
        conteudo da div 2

    </div>

    <div id="conteudo3" class="conteudo aba3">
        conteudo da div 3

    </div>


</section>

</body>

</html>