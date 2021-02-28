@extends('layout.layout')
@section('title')
  Articoli dal blog
@endsection

@section('main')
  <main class="container">
  <a href="{{route('articles.create')}}" class="btn" style="background-color: lightgreen">Inserisci un nuovo articolo</a>
  <table>

    <thead>
      <tr>
        <th>ID</th>
        <th>TITOLO</th>
        <th>CORPO DEL POST</th>
        <th>TAG</th>
        <th>CATEGORIA</th>
        <th>CREATO IL</th>
        <th>MODIFICATO IL</th>
        <th>AZIONI</th>
      </tr>
    </thead>

    @forelse ($articles as $article)
      <tbody>
        <tr>
          <td>{{$article->id}}</td>
          <td>{{$article->title}}</td>
          <td>{{$article->body}}</td>
          <td>{{$article->tag_id}}</td>
          <td>{{$article->category->name}}</td>
          <td>{{$article->created_at}}</td>
          <td>{{$article->updated_at}}</td>
          <td>
            <a href="{{route('articles.show', [ 'article' => $article->id])}}" class="btn btn-primary pb-20">Leggi</a> <br>
            <a href="{{route('articles.edit', [ 'article' => $article->id])}}" class="btn btn-primary">Modifica</a> <br>

            <form method="post" action="{{route('articles.destroy', ['article' => $article->id])}}">
              @csrf
              @method('DELETE')
              <button type="submit" name="button" class="btn btn-danger">Elimina</button>
            </form>

          </td>

        </tr>
      </tbody>

    @empty
      <h1>La lista di articoli è vuota!</h1>
    @endforelse

  </table>
</main>
@endsection
