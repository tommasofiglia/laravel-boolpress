@extends('layout.layout')
@section('title')
  Visualizza article
@endsection
@section('main')
  <main class="container">
    <h1>{{$article->title}}</h1>
    <p>{{$article->body}}</p>
    <a href="{{route('articles.index')}}" class="btn btn-success">Torna all'elenco dei articles</a>
  </main>
@endsection
