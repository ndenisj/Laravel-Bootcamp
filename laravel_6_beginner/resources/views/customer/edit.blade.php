@extends('app')

@section('title', 'Edit Customer')

@section('content')
    <h1>Edit Customer</h1>

    <form action="/customers/{{$customer->id}}" method="POST">
        @method('PATCH')
        @include('customer.form')
        <p>
            <button type="submit">Edit Customer Customer</button>
        </p>
    </form>

@endsection