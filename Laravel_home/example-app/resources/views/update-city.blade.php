@extends('layouts.app')

@section('title-block')Record update
@endsection
@section('content')
    <h1>Record update</h1>


    <form action="{{ route('city-update-submit', $data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="city">Input city</label>
            <input type="text" name="city" value="{{$data->city}}" placeholder="Input city" id="city"class="form-control">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea name="description" id="description" placeholder="Input description" class="form-control">{{$data->description}}"</textarea>
        </div>
        <button type="submit" class="btn btn-success">Send</button>
    </form>
@endsection
