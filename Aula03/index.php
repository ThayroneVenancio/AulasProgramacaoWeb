<?php

$preco = -1;

if($preco >=0){
    echo "Não posso comprar";
}else{
    echo "posso comprar!!!";
}
echo "</br>";
$nota = 9.5;

if($nota >= 7 and $nota <= 10){
    echo "Aprovado";
}else if($nota >=4){
    echo "Recuperação";
}else{
    echo "Reprovado";
}

echo "</br>";

$contador = 0;
while($contador <=10){
    echo $contador++;
    echo "</br>";
}

echo "</br>";

for($i = 10; $i <= 50; $i++){
    echo $i;
    echo "</br>";
}

?>