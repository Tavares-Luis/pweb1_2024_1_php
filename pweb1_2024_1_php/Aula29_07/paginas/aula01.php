<?php
        $nome = "Tavares";
        $idade = 20;
        echo "Informe nickname: " . $nome ."<br>". "Idade: " . $idade. "<br>";

         if($idade >= 18){
                echo $nome. " é  maior<br>";
         }else{
             echo $nome. " é de menor";
         }
         echo "<br>";
         $meses = ["Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro"];
         $dia = date('d');
         $mes = date('m');
         $ano = date('Y');
         echo $dia . " de " . $meses[$mes-1] . " de " . $ano . "<br>";
         echo date("d F Y")."<br>";
         echo date("d/m/Y")."<br>";
        
         $AnoAt = "2024";
         $AnoNas = "2004";
         $ContIdade = 0;

        $ContIdade = $AnoAt- $AnoNas;
         echo "Idade calculo: " .$ContIdade;

         $Cont1 = 0;
         echo "<br>";
         echo "<br>Laço de repetição While<br>";
         while($Cont1<=20){
            echo "Número: ". $Cont1 . "<br>";
            $Cont1++;
         }
         echo "<br>";
         echo "<br>Laço de repetição FOR+<br>";
         for($Cont1=0;$Cont1<=20;$Cont1++){
            echo "Número: ". $Cont1 . "<br>";
         }
         echo "<br>";
         echo "<br>Laço de repetição FOR-<br>";
         for($Cont1=20;$Cont1>=0;$Cont1--){
            echo "Número: ". $Cont1 . "<br>";
         }


     ?>