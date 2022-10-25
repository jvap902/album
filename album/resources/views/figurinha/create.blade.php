<!DOCTYPE html>

<head>]
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Criar figurinha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="{{ route('storeFigurinha') }}" method="post">

            @csrf

            <label>Nome</label>
            <input type="text" class="form-control" name="nome" required>
            <label>Data de nascimento</label>
            <input type="date" class="form-control" name="dtnasc" required>
            <label>Naturalidade</label>
            <input type="text" class="form-control" name="naturalidade" required>
            <label>Foto</label>
            <input type="file" name="file" required>

            <br><button type="submit">Criar figurinha</button>
        </form>
    </div>

</body>

</html>