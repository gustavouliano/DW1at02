<!DOCTYPE html>
<?php
    $title = "Lançamento de Dados";
    $userDado1 = rand(1, 6);
    $userDado2 = rand(1, 6);
    $pcDado1 = rand(1, 6);
    $pcDado2 = rand(1, 6);

    $jogar = isset($_POST["btnSubmit"]) ? $_POST["btnSubmit"] : "";

    $somaUser = $userDado1 + $userDado2;
    $somaPc = $pcDado1 + $pcDado2;

    if ($somaUser > $somaPc){
        $vencedor = "O usuário venceu!";
    }elseif ($somaPc > $somaUser){
        $vencedor = "O computador venceu!";
    }else{
        $vencedor = "Empate!";
    }
?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Jogo de dados</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <h1><?php echo $title; ?></h1>
    <form action="" method="POST">
        <input type="submit" name="btnSubmit" value="Jogar">
    </form>
    <br>

    <?php
        if($jogar == "Jogar"){
            echo "<h4>Dados usuário:</h4>";
            echo "<img src='img/dado$userDado1.png' alt='' width='10%'>";
            echo "<img src='img/dado$userDado2.png' alt='' width='10%'>";
            echo "Soma: $somaUser <br>";
            echo "<h4>Dados computador:</h4>";
            echo "<img src='img/dado$pcDado1.png' alt='' width='10%'>";
            echo "<img src='img/dado$pcDado2.png' alt='' width='10%'>";
            echo "Soma: $somaPc <br>";
            echo "<h3>$vencedor</h3>";       
        }
    ?>
    
</body>
</html>