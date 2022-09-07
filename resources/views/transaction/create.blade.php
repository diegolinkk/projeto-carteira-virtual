@extends('template')
@section('content')
    <h1>Cadastro de Transação:</h1>
    <form action="#" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome:</label>
            <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="mb-3">
            <label for="value" class="form-label">Valor:</label>
            <input class="form-control" type="number"  step=".01" min="0" max="10000.00" name="value" id="value">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Data:</label>
            <input class="form-control" type="date" name="date" id="date">
        </div>

        <div class="mb-3">
            <select name="wallet" id="wallet" class="form-select">
                <option value="1">Carteira</option>
                <option value="2">Conta Itau</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="observation" class="form-label">Observação:</label>
            <textarea class="form-control" name="observation" id="observation" rows="3"> </textarea>
        </div>
        <input type="submit" value="Enviar">
    </form>
@endsection