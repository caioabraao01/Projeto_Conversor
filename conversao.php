<div id="teste">
    <div id="ANL">
        <div>
            <main>
                <h1>Conversor Anos Luz</h1>
                <form action="conversao.php" method="get">
                    <label for="valor">Entre com valor de Anos Luz</label>
                    <input type="number" name="valor" id="valor" step="1.0" required>
                    <input type="submit" name="converter_anos_luz" value="Converter">
                    <?php
                    if (isset($_GET["converter_anos_luz"])) {
                        $anos_luz = $_GET["valor"];
                        $km = 9460730472580.8;
                        $conversao = $anos_luz * $km;

                        if ($anos_luz >= 1) {
                            echo "<p>A conversão para KM é: " . number_format($conversao, 2, ",", ".") . "</p>";
                        } else {
                            echo '<p class="erro">Erro: Insira um valor válido para Anos Luz.</p>';
                        }
                    }
                    ?>
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
                    <input type="number" name="valor2" id="valor2" step="1.0" required>
                    <input type="submit" name="converter_km" value="Converter">
                    <?php
                    if (isset($_GET["converter_km"])) {
                        $km1 = $_GET["valor2"];
                        $anos_luz1 = 1.0570;
                        $conversao1 = $km1 * $anos_luz1;

                        if ($km1 >= 1) {
                            echo "<p>A conversão para Anos Luz é: " . number_format($conversao1, 3, ",", ".") . "</p>";
                        } else {
                            echo '<p class="erro">Erro: Insira um valor válido para KM.</p>';
                        }
                    }
                    ?>
                </form>
            </main>
        </div>
    </div>
</div>
