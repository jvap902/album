@extends ('base.index')


<div class="div_listagem">
<table class="table table-striped my-5">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Data de nascimento</th>
            <th>Naturalidade</th>
            <th>Número</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($figurinhas as $figurinha)

            <tr>
                <td>{{$figurinha->nome}}</td>
                <td>{{$figurinha->dtnasc}}</td>
                <td>{{$figurinha->naturalidade}}</td>
                <td>{{$figurinha->numero}}</td>
                <td>
                   teste
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
</div>
