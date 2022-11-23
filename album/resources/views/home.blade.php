@extends('base.index')
@section('container')
    <div>
        <div class="div">
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
            <div class="figurinhas_sweep">
                <div class="card">

                </div>
            </div>
            <div name="figurinhas">
                <form action="{{ route('login') }}" method='POST'>
                    @csrf

                    <a href="{{ route('createFigurinha') }}" class="btn">Ganhar Figurinha</a>
                </form>
            </div>
        </div>
