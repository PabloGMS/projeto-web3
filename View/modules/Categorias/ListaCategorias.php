<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Lista de Categorias</h1>
    <table>
        <tr>
            <th>Alimentos</th>
            <th>Bebidas</th>
            
            
            
        </tr>

        <?php

         

        ?>

        <?php foreach($model->rows as $item): ?>
        <tr>
            <td><?= $item['alimentos'] ?></td>
            <td><?= $item['bebidas'] ?></td>
            
        </tr>
        <?php endforeach ?>    

    </table>
</body>
</html>