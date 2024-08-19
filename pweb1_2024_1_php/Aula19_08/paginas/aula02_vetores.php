<?php

$notas = [5,7,8,4,10];

for($i =0; $i<=count($notas);$i++){
    echo $notas[$i]."<br>";
}

$nomes = ["Jackson"=>37,"Chaves"=>16,"Chiquinha"=>17];

foreach($nomes as $key=>$valor){
    echo "Nome: ".$key . " Idade: ".$valor."<br>";
}


?>