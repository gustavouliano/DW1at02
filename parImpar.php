<!DOCTYPE html>
<?php
    $title = "Par ou Ímpar";
    $numeroUser = isset($_POST["numeros"]) ? $_POST["numeros"] : 0;
    $escolhaUser = isset($_POST["parImpar"]) ? $_POST["parImpar"] : "";

    $numeroPC = rand(0, 10);

    $soma = $numeroUser + $numeroPC;

    if ((($escolhaUser == "Par") && ($soma % 2 == 0)) || (($escolhaUser == "Impar") && ($soma % 2 == 1))){
        $resultadoText = "O usuário venceu!";
    }else{
        $resultadoText = "O computador venceu!";
    }

?>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Par ou ímpar</title>
</head>
<body>
    <?php include "menu.php"; ?>
    <h1><?php echo $title; ?></h1>
    <form action="" method="POST">
        
        <label>Número: </label>
        <select name="numeros">
            <option value=0>0</option>
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
            <option value=6>6</option>
            <option value=7>7</option>
            <option value=8>8</option>
            <option value=9>9</option>
            <option value=10>10</option>
        </select>
        <br/>
        <input type="radio" name="parImpar" id="parImpar" required="" value="Par">Par
        <input type="radio" name="parImpar" id="parImpar" required="" value="Impar">Impar
        <br/>
        <input type="submit" name="btnSubmit" id="btnSubmit" value="Jogar">
    </form>
    <?php
        if (($escolhaUser == "Par") || ($escolhaUser == "Impar")){
            echo "Usuário escolheu número $numeroUser e a opção $escolhaUser <br>";
            echo "<img src='img/dedo$numeroUser.jpg' width='10%'> <br>";
            echo "Computador escolheu número $numeroPC <br>";
            echo "<img src='img/dedo$numeroPC.jpg' width='10%'> <br>";
            echo "A soma é $soma <br>";
            echo $resultadoText;
        }
    ?>
</body>
</html>