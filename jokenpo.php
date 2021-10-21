<?php
    $title = "Pedra, papel e tesoura";
    $escolhaUser = isset($_POST["jokenpo"]) ? $_POST["jokenpo"] : "";
    $opcoesPC = array("pedra", "papel", "tesoura");
    $escolhaPC = $opcoesPC[rand(0, 2)];

    if ((($escolhaUser == "pedra") && ($escolhaPC == "tesoura")) || (($escolhaUser == "papel") && ($escolhaPC == "pedra")) || (($escolhaUser == "tesoura") && ($escolhaPC == "papel"))){
        $vencedor = "Usuário venceu!";
    }elseif ($escolhaUser == $escolhaPC){
        $vencedor = "Empate";
    }else{
        $vencedor = "Computador venceu!";
    }


?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Pedra, papel e tesoura</title>    
</head>
<body>
    <?php include "menu.php"; ?>
    <h1><?php echo $title; ?></h1>
    <form action="" method="POST">
        <label>Sua escolha: </label><br/>
        <input type="radio" name="jokenpo" value="pedra" required="">Pedra
        <input type="radio" name="jokenpo" value="papel" required="">Papel
        <input type="radio" name="jokenpo" value="tesoura" required="">Tesoura 
        <br/>
        <input type="submit" name="btnSubmit" value="Jogar">
    </form>
    <?php
        if ($escolhaUser != ""){
            echo "Usuário escolheu: <br>";
            echo "<img src='img/$escolhaUser.jpg' width='6%'> <br>";
            echo "Computador escolheu: <br>";
            echo "<img src='img/$escolhaPC.jpg' width='6%'> <br>";
            echo "<h3>$vencedor</h3>";
        }
    ?>

</body>
</html>