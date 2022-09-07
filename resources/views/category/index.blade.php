@extends('template')
@section('content')
<h1>Lista de todas as categorias</h1>
<ul>
    @foreach($categories as $category)
        <li>{{$category->name}}</li>
    @endforeach
</ul>
    <a href="{{route('category.create')}}" class="btn btn-primary">Criar categoria</a>
@endsection