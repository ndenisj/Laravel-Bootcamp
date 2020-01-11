@extends('app')

@section('title', 'Customer')

@section('content')

<a href="/customers">Back</a>

<h1>{{$customer->name}}</h1>
<h3>{{$customer->email}}</h3>

@endsection