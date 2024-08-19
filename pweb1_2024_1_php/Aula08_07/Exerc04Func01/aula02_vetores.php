<?php

    $notas = [5,7,8,9,10];

    for($i=0; $i<=count($notas);$i++){
        echo $notas[$i]."<br>";
    }

    $nomes = ["Jackson"=>37, "Chaves"=> 16, "Chuiquinha"=>17];

    foreach($nomes as $key => $value){
        echo "Nome: ". $key . " , idade: " . $valor . "<br>";
    }


?>