@extends ('base.index')

<div class="mx-auto" style="width: 90%;" id="divforms">

@section('container')
@if(session('erro'))

<div class="alert alert-danger" role="alert">{{session('erro')}}</div>
@endif
    <form action='{{route("login")}}' method='POST'>
        @csrf

        <img src="img/imglogin.png" class="imgforms" class="rounded float-start" width="700" height="700" alt="Computador">

        <div id="divlogin">
            <div class="forms_log">
                <div class="form-group row">
            <div class="d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column my-5">
                    <div class="my-5">
                    <h1>Álbum de figurihas</h1>
                    <h4>3º info 2022</h4>

            <div class="my-3">
                    <div class="form-floating mb-3 my-5">
                <input type="email" name="password" class="form-control" id="email" placeholder="nome@exemplo.com" value="">
                <label for="floatingInput">E-mail</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" id="password" placeholder="Senha" value="">
                <label for="password">Senha</label>
            </div>

            <div class="d-grid gap-2 col-8 mx-auto">
                <button type="button" id="btnlogin" class="btn btn my-3" style="background-color: #01497C; color:aliceblue">Conectar-se</button>
            </div>

        </form>
        </div>
    </div>

