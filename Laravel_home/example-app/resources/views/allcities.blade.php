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

            <a href="{{route('city-data-one', $city->id)}}"><button class="btn btn-warning">Details</button></a>

        </div>
    @endforeach

    <a href="{{ route('cities.create') }}" type="submit" class="btn btn-success">New city</a>


    {{$cities->links()}}

@endsection
