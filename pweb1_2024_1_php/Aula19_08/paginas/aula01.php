<?php

        $nome = "Jackson";
        $ano_atual = date('Y');
        $ano_nascimento = 2007;
        $idade = $ano_atual - $ano_nascimento;
        echo "Olá mundo! ". $nome ."<br> Idade: ". $idade."<br>";

        if($idade >=18){
            echo $nome. " é de maior<br>";
        }else{
            echo $nome . " é de menor<br>";
        }
        $num = 0;
        while($num <=10){
            echo $num."<br>";
            $num++;
        }
        echo "------------<br>";
        for($num =0; $num<=10;$num++){
            echo $num."<br>";
        }
        echo "------------<br>";
        for($num =10; $num>=0;$num--){
            echo $num."<br>";
        }

        echo date("d F Y");
        echo "<br>";
        echo date("d/m/Y");

    ?>