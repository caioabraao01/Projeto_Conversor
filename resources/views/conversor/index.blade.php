<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
    <link rel="stylesheet" href="{{ asset('estilo_personalizado.css') }}">

</head>
<body>
    <form action="/converter" method="post">
        @csrf
        <label for="valor">Valor:</label>
        <input type="number" name="valor" id="valor" required>

        <label for="conversao">Converter para:</label>
        <select name="conversao" id="conversao" required>
            <option value="anos_luz">Anos Luz</option>
            <option value="km">Kilômetros</option>
        </select>

        <button type="submit">Converter</button>
    </form>
</body>
</html>
