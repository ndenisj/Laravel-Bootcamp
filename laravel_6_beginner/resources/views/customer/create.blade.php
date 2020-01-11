@extends('app')

@section('title', 'Create New Customer')

@section('content')
    <h1>Add New Customer</h1>

    <form action="/customers" method="POST">
        @include('customer.form')
        <p>
            <button type="submit">Add Customer</button>
        </p>
    </form>

@endsection