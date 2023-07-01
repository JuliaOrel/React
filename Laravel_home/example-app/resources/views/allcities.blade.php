@extends('layouts.app')

@section('title-block')All cities
@endsection

@section('content')
    @isset($sql)
        <div>{{$sql}}</div>
    @endisset
    <h1>All cities</h1>
    @foreach($cities as $city)
        <div class="alert alert-info">
            <h3>{{$city->getAttribute('city')}}</h3>
            <p>{{$city->getAttribute('description')}}</p>
            <p><small>{{$city->created_at}}</small></p>

        </div>
    @endforeach


    {{$cities->links()}}

@endsection
