@extends('layout.layout')
@section('title')
  Nuovo Articolo
@endsection

@section('main')
  <form action="{{route('articles.store')}}" method="post">

    @csrf
    <main class="container">
      <h1>Inserisci un nuovo articolo</h1>

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
        <label for="author" class="d-block">Autore</label>
        <input id="author" type="text" name="author" value="" placeholder="Inserisci il nome" class="@error('author') is-invalid @enderror" value="{{ old('author') }}">
        <small class="form-text text-muted">Come ti chiami bimbo bello?</small>
        @error('author')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="title" class="d-block">Titolo</label>
        <input id="title" type="text" name="title" value="" placeholder="Inserisci un titolo" class="@error('title') is-invalid @enderror" value="{{ old('title') }}">
        <small class="form-text text-muted">Inserisci un titolo per il tuo nuovo articolo</small>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="body" class="d-block">Testo dell'articolo</label>
        <textarea name="body" rows="4" cols="80" placeholder="Inserisci il testo che deve essere contenuto nel tuo article" class="@error('title') is-invalid @enderror">{{value(old('body'))}}</textarea>
        <small class="form-text text-muted">Scrivi il tuo articolo</small>

        @error('body')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="tag_id" class="d-block">Scegli un tag</label>
        <select class="form-control" name="tag_id" id="tag_id" style="width: 150px">
          @foreach ($tags as $tag)
            <option value="{{$tag->id}}">{{$tag->name}}</option>
          @endforeach
        </select>

        @error('tag_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="category_id" class="d-block">Scegli una categoria</label>
        <select class="form-control" name="category_id" id="category_id" style="width: 150px">
          @foreach ($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
          @endforeach
        </select>

        @error('category_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" name="button" class="btn" style="background: lightblue">Aggiungi articolo</button>

    </main>

  </form>
@endsection
