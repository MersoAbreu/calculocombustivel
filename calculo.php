<?php
if($_POST){
    $distancia = $_POST['distancia'];
    $autonomia = $_POST['autonomia'];
    if(is_numeric($distancia) && is_numeric($autonomia)){
        if($distancia>0 && $autonomia>0){
        $preco_alcool = 2.90;
        $preco_diesel = 3.20;
        $preco_gasolina = 4.35;
        
        $calculo_gasolina = ($distancia / $autonomia) * $preco_gasolina;
        $calculo_gasolina = number_format($calculo_gasolina, 2, ',','.');

        $calculo_alcool = ($distancia / $autonomia) * $preco_alcool;
        $calculo_alcool = number_format($calculo_alcool, 2, ',','.');

        $calculo_diesel = ($distancia / $autonomia) * $preco_diesel;
        $calculo_diesel = number_format($calculo_diesel, 2, ',','.');

        echo "O custo da gasolina R$ ".$calculo_gasolina."\n";
        echo "<br>O custo do alcool R$".$calculo_alcool."\n";
        echo "<br>O custo diesel R$".$calculo_diesel."\n";
         }else{
            echo "<p>Os valores da distancia e autonomia, necessitam ser maiores que 0!</p>";

         }
        
    }else{
        echo "<p> O valor informado não é numerico </p>";
    }
   

}else{
    echo "<p> Não foi passado nenhum valor plo formulario! </p>";
}
