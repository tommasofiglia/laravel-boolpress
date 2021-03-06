@extends('layout.layout')
@section('title')
  Modifica articolo
@endsection
@section('main')

  <form action="{{route('articles.update' ,['article'=>$article->id])}}" method="post">

    @csrf
    @method('PUT')
    <main class="container">
      <h1>Modifica l'articolo</h1>

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
        <small class="form-text text-muted">Modifica il titolo dell'articolo</small>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="body" class="d-block">Testo dell'articolo</label>
        <textarea name="body" rows="4" cols="80" placeholder="Inserisci il testo che deve essere contenuto nel tuo articolo" class="@error('title') is-invalid @enderror">{{$article->body}}</textarea>
        <small class="form-text text-muted">Modifica il testo dell'articolo</small>

        @error('title')
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

      <button type="submit" name="button" class="btn" style="background: lightblue">Modifica articolo</button>

    </main>

  </form>

@endsection
