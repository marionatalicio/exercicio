<!-- visoes/categoria/index-->
<html>
    <head>

    </head>
    <body>
    <h2>Listagem de categorias</h2>


    <table>

        <thead>

            <th>#</th>
            <th>Nome categoria</th>

        </thead>

        <tbody>

        <?php foreach ($categorias as $categoria): ?>

        <tr>


            <td><?= $categoria->getId() ?></td>
            <td><a href="?acao=show&id=<?= $categoria->getId()?>">
                    <?= $categoria->getNome() ?>

                </a>
            </td>


        </tr>
        <?php endforeach; ?>
        </tbody>


    </table>

    </body>
</html>