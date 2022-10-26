@extends('base.index')
@section('container')
    <div>
        <div class="div">
            <div class="figurinhas_sweep">
                <div class="figurinha">
                    <a>a</a>
                </div>
            </div>
        </div>

        <div class="div">
            <div class="div_album">
                <div class="card">
                    <img class="card-img-top"
                        src="https://3.bp.blogspot.com/-NVioUWGvVtc/XJK6qs_p1AI/AAAAAAAAAI0/Sc8UzAT-iuM91qVd5EfqLFp5hjagDLD0ACLcBGAs/s640/download.jpg"
                        alt="Card image cap">
                    <div class="card-body">
                        <p class="nome" class="card-text">Michel Temer</p>
                        <p class="naturalidade" class="card-text">Naturalidade: brasileiro</p>
                        <p class="dtnasc" class="card-text">Data de nascimento: 01/12/1760</p>
                    </div>
                </div>
            </div>
            <div name="figurinhas">
                <form action="{{ route('login') }}" method='POST'>
                    @csrf

                    <a href="{{ route('createFigurinha') }}" class="btn">Ganhar Figurinha</a>
                </form>
            </div>

        </div>
