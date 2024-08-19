
<html>
<head>
    <title>Ódio</title>
</head>
    <body>
    <?php
        $nome = "Tavares";
        $idade = 20;
        echo "Informe nickname: " . $nome ."<br>". "Idade: " . $idade. "<br>";

         if($idade >= 18){
                echo $nome. " é  maior<br>";
         }else{
             echo $nome. " é de menor";
         }
        
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
    </body>
</html>