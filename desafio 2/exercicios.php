<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados dos Exercícios de PHP</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            line-height: 1.6;
            background-color: #f8f9fa;
            color: #212529;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            overflow: hidden;
        }
        h1 {
            background-color: #007bff;
            color: white;
            padding: 20px;
            margin: 0;
            text-align: center;
        }
        .exercicio {
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }
        .exercicio:last-child {
            border-bottom: none;
        }
        .exercicio h3 {
            margin-top: 0;
            color: #0056b3;
            border-bottom: 2px solid #007bff;
            padding-bottom: 5px;
        }
        .resultado {
            background-color: #e9f5ff;
            border: 1px solid #b3d7ff;
            padding: 10px 15px;
            border-radius: 4px;
            margin-top: 10px;
        }
        code {
            background-color: #e8e8e8;
            padding: 2px 5px;
            border-radius: 3px;
        }
    </style>
</head>
<body>

<div class="container">
<h1>Resultados dos Exercícios de PHP</h1>

<?php

// 1. Soma
echo "<div class='exercicio'><h3>1. Soma</h3>";
$a = 10; $b = 20;
echo "<div class='resultado'>Soma: <strong>".($a+$b)."</strong></div></div>";

// 2. Média
echo "<div class='exercicio'><h3>2. Média</h3>";
$n1=7; $n2=8; $n3=9;
echo "<div class='resultado'>Média: <strong>".(($n1+$n2+$n3)/3)."</strong></div></div>";

// 3. Metros para Centímetros
echo "<div class='exercicio'><h3>3. Metros para Centímetros</h3>";
$metros=5;
echo "<div class='resultado'>$metros m = <strong>".($metros*100)." cm</strong></div></div>";

// 4. Área do Retângulo
echo "<div class='exercicio'><h3>4. Área do Retângulo</h3>";
$base=10; $altura=5;
echo "<div class='resultado'>Área: <strong>".($base*$altura)."</strong></div></div>";

// 5. Positivo ou Negativo
echo "<div class='exercicio'><h3>5. Positivo ou Negativo</h3>";
$num=-3;
if($num>0) $res="Positivo";
elseif($num<0) $res="Negativo";
else $res="Zero";
echo "<div class='resultado'>$res</div></div>";

// 6. Maioridade
echo "<div class='exercicio'><h3>6. Maioridade</h3>";
$idade=20;
echo "<div class='resultado'>".($idade>=18?"Maior de idade":"Menor de idade")."</div></div>";

// 7. Aprovação
echo "<div class='exercicio'><h3>7. Aprovação</h3>";
$mediaFinal=5.5;
echo "<div class='resultado'>".($mediaFinal>=6?"Aprovado":"Reprovado")."</div></div>";

// 8. Maior de Dois
echo "<div class='exercicio'><h3>8. Maior de Dois</h3>";
$x=15; $y=9;
echo "<div class='resultado'>Maior: <strong>".($x>$y?$x:$y)."</strong></div></div>";

// 9. Dia da Semana
echo "<div class='exercicio'><h3>9. Dia da Semana</h3>";
$dia=3;
switch($dia){
case 1:$d="Domingo";break;
case 2:$d="Segunda";break;
case 3:$d="Terça";break;
case 4:$d="Quarta";break;
case 5:$d="Quinta";break;
case 6:$d="Sexta";break;
case 7:$d="Sábado";break;
default:$d="Inválido";
}
echo "<div class='resultado'>$d</div></div>";

// 10. Vogal ou Consoante
echo "<div class='exercicio'><h3>10. Vogal ou Consoante</h3>";
$letra=strtolower("A");
switch($letra){
case 'a':case 'e':case 'i':case 'o':case 'u':$tipo="Vogal";break;
default:$tipo="Consoante";
}
echo "<div class='resultado'>$tipo</div></div>";

// 11. Status do Pedido
echo "<div class='exercicio'><h3>11. Status do Pedido</h3>";
$status="enviado";
switch($status){
case "aguardando":$msg="Aguardando confirmação";break;
case "em_preparacao":$msg="Em preparação";break;
case "enviado":$msg="Pedido enviado";break;
case "concluido":$msg="Pedido concluído";break;
default:$msg="Status desconhecido";
}
echo "<div class='resultado'>$msg</div></div>";

// 12. Contagem 1-10
echo "<div class='exercicio'><h3>12. Contagem 1-10</h3><div class='resultado'>";
for($i=1;$i<=10;$i++) echo "$i ";
echo "</div></div>";

// 13. Pares 1-20
echo "<div class='exercicio'><h3>13. Pares 1-20</h3><div class='resultado'>";
for($i=2;$i<=20;$i+=2) echo "$i ";
echo "</div></div>";

// 14. Tabuada
echo "<div class='exercicio'><h3>14. Tabuada do 7</h3><div class='resultado'>";
for($i=1;$i<=10;$i++) echo "7 x $i = ".(7*$i)."<br>";
echo "</div></div>";

// 15. Contagem Regressiva
echo "<div class='exercicio'><h3>15. Contagem Regressiva</h3><div class='resultado'>";
$i=10;
while($i>=1){echo "$i ";$i--;}
echo "</div></div>";

// 16. Soma até 100
echo "<div class='exercicio'><h3>16. Soma até 100</h3>";
$soma=0;$i=1;
while($i<=100){$soma+=$i;$i++;}
echo "<div class='resultado'>Soma: <strong>$soma</strong></div></div>";

// 17. Sorteio até sair 5
echo "<div class='exercicio'><h3>17. Sorteio até sair 5</h3>";
$tent=0;
do{$num=rand(1,10);$tent++;}while($num!=5);
echo "<div class='resultado'>Tentativas: <strong>$tent</strong></div></div>";

// 18. Lista de Frutas
echo "<div class='exercicio'><h3>18. Lista de Frutas</h3>";
$frutas=["Maçã","Banana","Uva","Laranja","Manga"];
echo "<ul class='resultado'>";
foreach($frutas as $f) echo "<li>$f</li>";
echo "</ul></div>";

// 19. Soma de Array
echo "<div class='exercicio'><h3>19. Soma de Array</h3>";
$nums=[2,4,6,8,10];
echo "<div class='resultado'>Soma: <strong>".array_sum($nums)."</strong></div></div>";

// 20. Array Associativo
echo "<div class='exercicio'><h3>20. Array Associativo - Aluno</h3>";
$aluno=["nome"=>"Pedro","idade"=>18,"curso"=>"Informática"];
echo "<div class='resultado'>";
echo "Nome: {$aluno['nome']}<br>";
echo "Idade: {$aluno['idade']}<br>";
echo "Curso: {$aluno['curso']}";
echo "</div></div>";

?>

</div>
</body>
</html>