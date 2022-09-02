@extends('template')
@section('content')
    <h1>Tela de cadastro de novo usuário</h1>
    <form action="#" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label" for="name">Nome</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>

        <div class="mb-3">
            <label class="form-label" for="email">E-mail</label>
            <input class="form-control" type="email" name="email" id="email">
        </div>
        <div class="mb-3">
            <label class="form-label" for="password">Senha</label>
            <input class="form-control" type="password" name="password" id="password">
        </div>
        <input class="btn btn-primary" type="submit" value="Enviar">
        
    </form>
@endsection