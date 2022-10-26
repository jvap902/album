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
                <div class="row row-cols-1 row-cols-md-6 g-4">
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://3.bp.blogspot.com/-NVioUWGvVtc/XJK6qs_p1AI/AAAAAAAAAI0/Sc8UzAT-iuM91qVd5EfqLFp5hjagDLD0ACLcBGAs/s640/download.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="nome" class="card-text">Michel Temer</p>
                                <p class="naturalidade" class="card-text">Pensilvânia</p>
                                <p class="dtnasc" class="card-text">01/12/1760</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://3.bp.blogspot.com/-NVioUWGvVtc/XJK6qs_p1AI/AAAAAAAAAI0/Sc8UzAT-iuM91qVd5EfqLFp5hjagDLD0ACLcBGAs/s640/download.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="nome" class="card-text">Michel Temer</p>
                                <p class="naturalidade" class="card-text">Pensilvânia</p>
                                <p class="dtnasc" class="card-text">01/12/1760</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <img class="card-img-top"
                                src="https://3.bp.blogspot.com/-NVioUWGvVtc/XJK6qs_p1AI/AAAAAAAAAI0/Sc8UzAT-iuM91qVd5EfqLFp5hjagDLD0ACLcBGAs/s640/download.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <p class="nome" class="card-text">Michel Temer</p>
                                <p class="naturalidade" class="card-text">Pensilvânia</p>
                                <p class="dtnasc" class="card-text">01/12/1760</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div name="figurinhas">
                <form action='{{ route('login') }}' method='POST'>
                    @csrf

                    <a href="{{ route('createFigurinha') }}" class="btn">Ganhar Figurinha</a>
                </form>
            </div>

        </div>
