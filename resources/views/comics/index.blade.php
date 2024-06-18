@extends('layouts.app')

@section('content')
    <h1>Comics page</h1>

    <div>
      <a href="{{ route("comics.create") }}">Aggiungi elemento</a>
    </div>

    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Titolo</th>
            <th scope="col">Price</th>
            <th scope="col">Series</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($comics_list as $curComic)
            
        <tr>
          <th scope="row">{{ $curComic->id }}</th>
          <td>{{ $curComic->title }}</td>
          <td>{{ $curComic->price }}</td>
          <td>{{ $curComic->series }}</td>
          <td> <a class="btn btn-success" href="{{ route("comics.show", ["comic" => $curComic->id]) }}">Dettagli</a> </td>
        </tr>
        @endforeach
        </tbody>
      </table>
@endsection