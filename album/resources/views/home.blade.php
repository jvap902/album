@extends('base.index')
@section('container')
    <div class="div">
        <div>
            <div class="div_album">
                <div class="row">
                    @foreach($figurinhas as $f)
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top"
                                src="{{ asset('imagens/'.$f->file_path)}}"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="nome" class="card-text">{{$f->nome}}</p>
                                <p class="naturalidade" class="card-text">{{$f->naturalidade}}</p>
                                <p class="dtnasc" class="card-text">{{$f->dtnasc}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <p>NUMERO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="outros">
                <div class="nav">
                    <nav class="nav justify-content-end">
                        <a class="navbar-brand" href="#"></a>
                        <div class="btn-group dropstart">
                            <a class="btn btn-outline-dark dropdown-toggle" class="btnmostrar" href="#"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25"
                                    fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                    <path fill-rule="evenodd"
                                        d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
                                </svg>
                            </a>

                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{ route('listagem') }}">Gerenciar figurinhas</a></li>
                                <li><a class="dropdown-item" href="#">Sair</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="pacotes_figurinhas">
                    <div name="figurinhas" class="pacote">
                        <form action="{{ route('login') }}" method='POST'>
                            @csrf

                            <a href="{{ route('createPacoteFigurinha') }}" class="btn">Gerar Pacote</a>
                        </form>
                    </div>
                    <div class="figurinhas_sweep">
                        <div class="card">

                        </div>
                    </div>
                    <div class="repetidas">
                        <div class="card">

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="//unpkg.com/office-ui-fabric-react@7/dist/office-ui-fabric-react.js"></script>
    <script src="//unpkg.com/@uifabric/react-hooks@7/dist/react-hooks.js"></script>