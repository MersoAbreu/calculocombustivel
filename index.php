<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Instruções</h1>
<p>Esta aplicação tem como funcionalidade demonstrar os valores que
serão gastos com combustivel durante uma viagem com base 
no consumo do seu veiculo e com a distancia determinada por você!</p>

<h2>Os combustiveis!</h2>
<ul>
<li>Gasolina</li>
<li>Alcool</li>
<li>Diesel</li>
</ul>

<h3>Calculo do valor(R$) do consumo</h3>
    <form action="calculo.php" method="POST">
    <label for="distancia">Distancia em quilometros a ser percorrida</label>
    <input type="text" name="distancia">

    <label for="autonomia">Consumo do veiculo (KM/l)</label>
    <input type="text" name="autonomia"/>

    <button class="botao" type="submit">Calcular</button>

    
    </form>
</body>
</html>