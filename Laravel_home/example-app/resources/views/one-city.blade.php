@extends('layouts.app')

@section('title-block'){{$data->city}}
@endsection

@section('content')
    <h1>{{$data->city}}</h1>

    <div class="alert alert-info">

        <p>{{$data->description}}</p>

        <p><small>{{$data->created_at}}</small></p>
        <a href="{{route('city-update', $data->id)}}"><button class="btn btn-primary">Edit</button></a>
        <a href="{{route('city-delete', $data->id)}}"><button class="btn btn-danger">Delete</button></a>

    </div>

@endsection
