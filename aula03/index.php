<?php
$preco = 20;

if($preco >= 20){
    echo"Não posso comprar!";
}else{
    echo"Posso comprar!";
}

echo"</br>";
$nota = 9.5;
echo"$nota";
echo"</br>";
if($nota >= 7){
    echo"Aprovado";
}else if($nota >= 4){
    echo"Recuperação";
}else{
    echo"Reprovado";
}
echo"</br>";
$contador = 0;
while($contador <= 10){
    echo $contador++;
}
echo"</br>";

for($i = 10; $i <= 50; $i++){
    echo $i;
    echo"</br>";
}



?>