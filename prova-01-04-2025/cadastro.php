<?php 
    
    // verificar se a página recebeu dados enviados
    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        // receber dados enviados via post e mostrar na tela
        $dados = $_POST;

        if(!empty($dados['nome']) &&
           !empty($dados['consumomax']) &&
           !empty($dados['horasligado']) &&
           !empty($dados['diasligado']) &&
           !empty($dados['diasligado']) &&
           !empty($dados['valorkw']) ) {

            echo "Nome: " . $dados['nome'] . "<br>";
            echo "Consumo maximo: " . $dados['consumomax'] . "<br>";
            echo "Horas ligadas por dia: " . $dados['horasligado'] . "<br>";
            echo "Dias ligado por mes: " . $dados['diasligado'] . "<br>";
            echo "Valor killowatt por hora: " . $dados['valorkw'] . "<br>";


        $consumomax = $dados['consumomax'];
        $horasligadodia = $dados['horasligado'];    
        $horasligadomes = $dados['diasligado'];
        $valorkwhora = $dados['valorkw'];    
          

        $x = $consumomax/1000;     
        $consumodo_aparelho_diario = $x * $horasligadodia;
        echo "Consumo diario do aparelho: " . $consumodo_aparelho_diario . " kWh por dia<br>";   

        $consumodo_aparelho_mensal = $consumodo_aparelho_diario * $horasligadomes;
        echo "Consumo mensal do aparelho: " . $consumodo_aparelho_mensal . " kWh por mes<br>";   

        $consumoemreais = $consumodo_aparelho_mensal * $valorkwhora;  
        echo "Consumo aparelo em reais: R$" . $consumoemreais . "<br>";  

        if($consumoemreais < 0){
            echo "Valor menor que 0! <br>";
            echo "<br><a href='index.php'>HOME</a>";
        }

        else if($consumoemreais <= 5)
        {
            echo "Categoria do consumo: Baixa <br>";
            echo "<br><a href='index.php'>HOME</a>";
        }  
        else if($consumoemreais > 5 && $consumoemreais <= 10)
        {
            echo "Categoria de consumo: Moderada <br>";
            echo "<br><a href='index.php'>HOME</a>";
        }
        else if($consumoemreais > 10)
        {
            echo "Categoria de consumo: Elevada <br>";
            echo "<br><a href='index.php'>HOME</a>";
        }


        } else {  // em branco

            echo "<h3>Preencha todos os campos no form da Home</h3>";
            echo "<br><a href='index.php'>HOME</a>";
        }

    } else {
        // mostrar uma mensagem de erro
        echo "<h3>ATENÇÃO:Nenhum dado de cliente foi enviado!</h3>";
        echo "<br><a href='index.php'>HOME</a>";
    }
    
    ?>