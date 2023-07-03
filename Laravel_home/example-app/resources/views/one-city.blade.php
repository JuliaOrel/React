@extends('layouts.app')

@section('title-block'){{$data->city}}
@endsection

@section('content')
    <h1>{{$data->city}}</h1>

    <div class="alert alert-info">

        <p>{{$data->description}}</p>

        <p><small>{{$data->created_at}}</small></p>

    </div>

@endsection
