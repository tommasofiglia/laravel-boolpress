@extends('layout.layout')
@section('title')
  Visualizza articolo
@endsection
@section('main')
  <main class="container">
    <h1>{{$article->title}}</h1>
    <p>{{$article->body}}</p>
    <a href="{{route('articles.index')}}" class="btn btn-success">Torna all'elenco degli articoli</a>
  </main>
@endsection
