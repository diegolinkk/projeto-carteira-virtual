@extends('template')
@section('content')
    <h1>Hello, world</h1>
    Welcome {{Auth::user()->name}}
@endsection