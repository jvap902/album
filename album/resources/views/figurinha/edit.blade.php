@extends ('base.index')

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar figurinha</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <form action="{{ route('updateFigurinha') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div id="div_criarfig">
            @if(isset($erro))
            <div class="alert alert-danger">
                {{$erro}}
            </div>
            @endif

            <div class="form-floating mb-3 my-5">
                <input type="hidden" name="id" class="form-control" id="id" placeholder="id" value="$figurinha->id" required>
                <label for="floatingInput">Nome do jogador</label>
            </div>

            <div class="form-floating mb-3 my-5">
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome" value="$figurinha->nome" required>
                <label for="floatingInput">Nome do jogador</label>
            </div>

            <div class="form-floating mb-3 my-5">
                <input type="date" name="dtnasc" class="form-control" id="dtnasc" placeholder="dtnasc" value="$figurinha->dtnasc" required>
                <label for="floatingInput">Data de nascimento</label>
            </div>

            <div class="form-floating mb-3 my-5">
                <input type="text" name="naturalidade" class="form-control" id="naturalidade" placeholder="naturalidade" value="$figurinha->naturalidade" required>
                <label for="floatingInput">Naturalidade</label>
            </div>

            <div class="form-floating mb-3 my-5">
                <input type="number" name="numero" class="form-control" id="numero" placeholder="numero" value="$figurinha->numero" required>
                <label for="floatingInput">Número</label>
            </div>

            <div>
                <input class="form-control form-control-lg my-5" id="formFileLg" type="file" value="$figurinha->file_path" >
              </div>

            <div class="d-grid gap-2 col-8 mx-auto">
                <button type="submit" id="criarfig" class="btn btn8 my-4" style="background-color: #01497C; color:aliceblue">Criar figurinha</button>
                <a href="../listagem" id="criarfig" class="btn btn8 my-1" style="background-color: #01497C; color:aliceblue">Voltar</a>
            </div>
        </form>
    </div>
</div>

</body>

</html>
