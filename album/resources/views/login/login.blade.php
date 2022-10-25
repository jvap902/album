@extends ('base.index')

<div class="mx-auto" style="width: 90%;" id="divforms">

@section('container')
@if(session('erro'))

<div class="alert alert-danger" role="alert">{{session('erro')}}</div>
@endif
    <form action='{{route("login")}}' method='POST'>
        @csrf

        @include('components.field', [
            'type' => 'hidden',
            'id' => 'id',
            'name' => 'id',
            'label' => '',
            'class' => '',
            'placeholder' => '',
            'value' => '',
        ])

        @include('components.field', [
            'type' => 'email',
            'id' => 'email',
            'name' => 'email',
            'label' => '',
            'class' => 'form-control',
            'placeholder' => 'E-mail',
            'value' => '',
        ])

        @include('components.field', [
            'type' => 'password',
            'id' => 'password',
            'name' => 'password',
            'label' => '',
            'class' => 'form-control',
            'placeholder' => 'Senha',
            'value' => '',
        ])

        @include('components.button', ['type' => 'submit', 'id' => 'btn', 'class' => 'btn btn-outline-dark', 'text' => 'Conectar-se'])

    </form>
@endsection
</div>
