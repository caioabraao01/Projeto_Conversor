<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="{{ asset('estilo_personalizado.css') }}">

</head>
<body>
    <p>Valor original: {{ $valor }}</p>
    <p>Convertido para {{ $unidade_resultado }}: {{ $resultado }}</p>
    <a href="/">Voltar</a>
</body>
</html>
