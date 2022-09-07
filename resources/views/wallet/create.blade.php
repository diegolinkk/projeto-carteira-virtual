@extends('template')
@section('content')
    <h1>Criação de nova carteira</h1>
    <form action="#" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        <input type="submit" value="Enviar" class="btn btn-primary">
    </form>
@endsection