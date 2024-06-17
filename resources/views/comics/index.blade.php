@extends('layouts.app')

@section('content')
    <h1>Comics page</h1>

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
        </tr>
        @endforeach
        </tbody>
      </table>
@endsection