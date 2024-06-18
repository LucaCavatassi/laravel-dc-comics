@extends('layouts.app')

@section('content')
    <h1>Create</h1>

    <form action="{{ route("comics.store") }}" method="POST">
        @csrf
        
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" >
        
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" id="price" 
            name="price">
        
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" id="series" name="series">
        
            <label for="sale_date" class="form-label">Date</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control" id="type" name="type">
            
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
