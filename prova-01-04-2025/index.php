<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    
    <h1>Cadastro de Aparelhos Eletronicos</h1>

    <h2>Cadastro de Dados</h2>

    <form action="cadastro.php" method="post">

<p>
    <label for="nome">Nome:</label><br>
    <input type="text" name="nome" id="nome">
</p> 

<p>
    <label for="consumomax">Consumo max em watts</label><br>
    <input type="number" name="consumomax" id="consumomax">
</p>

<p>
    <label for="horasligado">Numero de horas ligado por dia:</label><br>
    <input type="number" name="horasligado" id="horasligado">
</p>

<p>
    <label for="diasligado">Numero de dias ligado por mes:</label><br>
    <input type="number" name="diasligado" id="diasligado">
</p>

<p>
    <label for="valorkw">Valor killowatt-hora:</label><br>
    <input type="number" name="valorkw" id="valorkw" step="0.01" min="0">
</p>

<button type="submit">Cadastrar</button> 

</form>



</body>
</html>