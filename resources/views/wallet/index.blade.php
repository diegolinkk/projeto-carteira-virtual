@extends('template')
@section('content')
    <div>
        <div> <h2 class="text-secondary"> Seja bem vindo: {{Auth::user()->name}} </h2></div>
        <div>
    </div>
        <div> <h1>Seu saldo: </h1></div>
        <div> <h2 class="text-primary">R$ 100,00 </h2></div>
        <a href="{{route('transaction.create')}}" class="btn btn-primary">Adicionar transação</a>
    </div>
    <div>
        <h2>Suas transações recentes:</h2>
        <ul class="list-group">
            <li class="list-group-item">Nome da transação - 02/09/2022 - R$ 150,00</li>
            <li class="list-group-item">Nome da transação - 02/09/2022 - R$ 150,00</li>
            <li class="list-group-item">Nome da transação - 02/09/2022 - R$ 150,00</li>
            <li class="list-group-item">Nome da transação - 02/09/2022 - R$ 150,00</li>
            <li class="list-group-item">Nome da transação - 02/09/2022 - R$ 150,00</li>
            <li class="list-group-item">Nome da transação - 02/09/2022 - R$ 150,00</li>
        </ul>
    </div>
@endsection