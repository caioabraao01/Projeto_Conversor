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
                    <form action="conversao.php" method="get">
                        <label for="valor">Entre com valor de Anos Luz</label>
                        <input type="number" name="valor" id="valor" step="1.0">
                        <input type="submit" name="converter" value="Converter">
                    </form>
                </main>
            </div>
        </div>
                
        <div id="KM"> 
            <div>
                <main>
                    <h1>Conversor KM</h1>
                    <form action="conversao.php" method="get">
                        <label for="valor2">Entre com valor de KM</label>
                        <input type="number" name="valor2" id="valor2" step="1.0">
                        <input type="submit" name="converter" value="Converter">
                    </form>
                </main>
            </div>        
        </div>
    </div>
</body>
</html>
