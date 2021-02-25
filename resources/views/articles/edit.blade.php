@extends('layout.layout')
@section('title')
  Modifica post
@endsection
@section('main')

  <form action="{{route('articles.update' ,['article'=>$article->id])}}" method="article">

    @csrf
    @method('PUT')
    <main class="container">
      <h1>Modifica il article</h1>

      @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

      <div class="form-group">
        <label for="title" class="d-block">Titolo</label>
        <input id="title" type="text" name="title" class="@error('title') is-invalid @enderror" value="{{$article->title}}" placeholder="Inserisci qui il titolo">
        <small class="form-text text-muted">Modifica il titolo del article</small>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="body" class="d-block">Testo del article</label>
        <textarea name="body" rows="4" cols="80" placeholder="Inserisci il testo che deve essere contenuto nel tuo article" class="@error('title') is-invalid @enderror">{{$article->body}}</textarea>
        <small class="form-text text-muted">Modifica il testo del article</small>

        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" name="button" class="btn" style="background: lightblue">Modifica article</button>

    </main>

  </form>

@endsection
