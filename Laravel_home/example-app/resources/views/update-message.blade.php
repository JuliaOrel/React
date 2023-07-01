@extends('layouts.app')

@section('title-block')Record update
@endsection
@section('content')
<h1>Record update</h1>


    <form action="{{ route('contact-update-submit', $data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Input name</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Input name" id="name"class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Input email</label>
            <input type="email" name="email" value="{{$data->email}}" placeholder="Input email" id="email"class="form-control">
        </div>
        <div class="form-group">
            <label for="subject">Input subject</label>
            <input type="text" name="subject" value="{{$data->subject}}" placeholder="Input subject" id="subject"class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" id="message" placeholder="Input message" class="form-control">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Refresh</button>
    </form>
@endsection
