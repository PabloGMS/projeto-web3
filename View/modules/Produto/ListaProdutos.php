<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Produto</th>
            <th>Descriçao</th>
            <th>Data</th>
            <th>Valor</th>
        </tr>

        <?php

         

        ?>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td><?= $item['codigo'] ?></td>
            <td><?= $item['produto'] ?></td>
            <td><?= $item['descricao'] ?></td>
            <td><?= $item['data'] ?></td>
            <td><?= $item['valor'] ?></td>
        </tr>
        <?php endforeach ?>    

    </table>
</body>
</html>