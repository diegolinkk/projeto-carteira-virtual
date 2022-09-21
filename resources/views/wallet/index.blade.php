@extends('template')
@section('content')
    <div>
        <div> <h2 class="text-secondary"> Seja bem vindo: {{Auth::user()->name}} </h2></div>
        <h3>Suas carteiras</h3>
        <ul>
            @foreach($wallets as $wallet)
            <li>{{$wallet->name}} - saldo R$: {{$wallet->balance_in_reais}}</li>
            @endforeach
        </ul>
            
        <a href="{{route('wallet.create')}}" class="btn btn-primary">Adicionar carteira</a>
        <div> <h1>Seu saldo: </h1></div>
        <div> <h2 class="text-primary">{{$totalBalance}} </h2></div>
        <a href="{{route('transaction.create')}}" class="btn btn-primary">Adicionar transação</a>
    </div>
    <div>

        <h2>Suas transações recentes:</h2>
        <ul class="list-group">
            @foreach($transactions as $transaction)
                <li class="list-group-item">{{date('d/m/Y',strtotime($transaction->date))}}  - {{$transaction->name}} - R$ {{$transaction->value_in_reais}}</li>
            @endforeach
        </ul>
    </div>
@endsection