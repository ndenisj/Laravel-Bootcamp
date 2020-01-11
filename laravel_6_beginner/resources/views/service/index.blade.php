@extends('app')

@section('title', 'Services Page')

@section('content')
    <h1>Services Page</h1>

    <form action="/service" method="POST">
        @csrf
        <input type="text" name="name" autocomplete="off">
        <button type="submit">Add Service</button>
    </form>
    <p style="color:red;"> @error('name') {{$message}} @enderror </p>

    <ul>
    @forelse ($services as $service)
    <li>{{$service->name}}</li>
    @empty
        <p>No services</p>
    @endforelse
    </ul>
@endsection