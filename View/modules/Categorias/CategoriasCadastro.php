<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Categorias</title>
    <style>
        label, input { display: block;}
    </style>
</head>
<body>
    <form action="/categorias/save" method="post">
        <fieldset>
            <legend>Cadastro de Categorias</legend>
            <label for="alimentos">Alimentos:</label>
            <input name="alimentos" id="alimentos" type="text" />

            <label for="bebidas">Bebidas:</label>
            <input name="bebidas" id="bebidas" type="text" />

            
           
            <button type="submit">Enviar</button>

        </fieldset>
    </form>    
</body>
</html>