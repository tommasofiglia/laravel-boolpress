@extends('layout.layout')
@section('title')
  Nuovo Post
@endsection

@section('main')
  <form action="{{route('posts.store')}}" method="post">

    @csrf
    <main class="container">
      <h1>Inserisci un nuovo post</h1>

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
        <input id="title" type="text" name="title" value="" placeholder="Inserisci un titolo" class="@error('title') is-invalid @enderror" value="{{ old('title') }}">
        <small class="form-text text-muted">Inserisci un titolo per il tuo nuovo post</small>
        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <div class="form-group">
        <label for="body" class="d-block">Testo del post</label>
        <textarea name="body" rows="4" cols="80" placeholder="Inserisci il testo che deve essere contenuto nel tuo post" class="@error('title') is-invalid @enderror">{{value(old('body'))}}</textarea>
        <small class="form-text text-muted">Scrivi il tuo post</small>

        @error('title')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
      </div>

      <button type="submit" name="button" class="btn" style="background: lightblue">Aggiungi post</button>

    </main>

  </form>
@endsection
