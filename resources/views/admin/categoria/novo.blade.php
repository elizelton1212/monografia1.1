@extends('layouts.admin')

@section('conteudo')
    <h1>REGISTAR</h1>
    <br>
    @if( $errors->any())
    <ul>
        @foreach ($errors->all() as $erro)
        <li>{{$erro}}</li>
        @endforeach
    </ul>
    @endif
    <form action="" method="post">
        @csrf
        Nome: <input type="text" name="nome" value="{{$categoria->nome}}">
        <input type="submit" value="REGISTAR">
    </form>

@stop
