
@extends("base.index")
@section('container')
<div>
    <div class="div_album">
        <div calss="figurinha">
            <a>brgeiubrgeourgtbeorgueboerguibgeioueb</a>
        </div>
    </div>
    <div name="figurinhas">
        <form action='{{route("login")}}' method='POST'>
            @csrf

            <a href="{{ route('createFigurinha') }}" class="btn">Ganhar Figurinha</a>
        </form>
    </div>
</div>
