@extends('layouts.app')

@section('title-block')Cities
@endsection
@section('content')
    <h1>Cities creation page</h1>


    <form action="{{ route('cities.store')}}" method="post">
        @csrf
        <div class="form-group">
            <label for="city">Input city</label>
            <input type="text" name="city" placeholder="Input city" id="city"class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" placeholder="Input description" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
