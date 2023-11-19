<?php
$resultado = "";

if (isset($_GET["valor"])) {
    $anos_luz = $_GET["valor"];
    $km = 9460730472580.8;
    $conversao = $anos_luz * $km;

    if ($anos_luz >= 1) {
        $resultado = "A conversão para KM é: " . number_format($conversao, 2, ",", ".");
    } else {
        $resultado = 'Erro: Insira um valor válido para Anos Luz.';
    }
} elseif (isset($_GET["valor2"])) {
    $km1 = $_GET["valor2"];
    $anos_luz1 = 1.0570;
    $conversao1 = $km1 * $anos_luz1;

    if ($km1 >= 1) {
        $resultado = "A conversão para Anos Luz é: " . number_format($conversao1, 3, ",", ".");
    } else {
        $resultado = 'Erro: Insira um valor válido para KM.';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilo.css">
    <title>Conversão</title>
</head>
<body>

    <div id="teste">
        <div id="ANL">
            <div>
                <main>
                    <h1>Conversor Anos Luz</h1>
                    <form action="" method="get">
                        <label for="valor">Entre com valor de Anos Luz</label>
                        <input type="number" name="valor" id="valor" step="1.0">
                        <input type="submit" name="converter" value="Converter">
                    </form>
                    <?php if (!empty($resultado)) echo $resultado; ?>
                </main>
            </div>
        </div>
                
        <div id="KM"> 
            <div>
                <main>
                    <h1>Conversor KM</h1>
                    <form action="" method="get">
                        <label for="valor2">Entre com valor de KM</label>
                        <input type="number" name="valor2" id="valor2" step="1.0">
                        <input type="submit" name="converter" value="Converter">
                    </form>
                    <?php if (!empty($resultado)) echo $resultado; ?>
                </main>
            </div>        
        </div>
    </div>
</body>
</html>
