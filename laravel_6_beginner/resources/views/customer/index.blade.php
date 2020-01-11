@extends('app')

@section('title', 'Customers')

@section('content')
    <h1>Customers</h1>

    <a href="/customers/create">Add New Customer</a> = 
    <a href="/customers?active=1">Active</a> = 
    <a href="/customers?active=0">Inactive</a>

    @forelse ($customers as $customer)
    <p>{{$customer->name}} ({{$customer->email}}) || 
    <a href="/customers/{{$customer->id}}">VIEW</a> | 
    <a href="/customers/{{$customer->id}}/edit">EDIT</a> | 
    <form method="POST" action="/customers/{{$customer->id}}">
        @method('DELETE')
        @csrf
        <button type="submit">DELETE</button>
    </form>
    </p>
    @empty
        <p>No Customer Found</p>
    @endforelse
@endsection