@extends ('base.index')
@section('container')
<form action='{{route("login")}}' method='POST'>
    @csrf

    @include('components.button', ['type' => 'submit', 'id' => 'btn', 'class' => 'btn btn-outline-dark', 'text' => 'Ganhar Pacote hehe'])

</form>

@endsection
