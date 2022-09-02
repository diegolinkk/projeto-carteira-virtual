@extends('template')
@section('content')
    <h1>Tela de login</h1>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="#" method="post">
        @csrf
        <div class="mb-3">

            <label for="email" class="form-label">E-mail</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>  
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <input class="btn btn-primary" type="submit" value="Enviar">
    </form>
    <a href="{{route('login.create')}}">Adicionar usuário</a>
@endsection