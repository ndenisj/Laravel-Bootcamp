@extends('layouts.main')
@section('content')

<div class="container mt-5 mb-5">
	@if ($errors->any())
		@foreach ($errors->all() as $error)
			<div class="alert alert-danger">
				{{$error}}
			</div>
		@endforeach
	@endif
	<!-- Default form register -->
	<form class="text-center border border-light p-5" action="{{ route('update',$student->id) }}" method="POST">

		{{ csrf_field() }}

	    <p class="h4 mb-4">EDIT STUDENT DATA</p>

	    <div class="form-row mb-4">
	        <div class="col">
	            <!-- First name -->
	            <input type="text" value="{{$student->FIRST_NAME}}" class="form-control" placeholder="First name" name="fname">
	        </div>
	        <div class="col">
	            <!-- Last name -->
	            <input type="text" value="{{$student->LAST_NAME}}" class="form-control" placeholder="Last name" name="lname">
	        </div>
	    </div>

	    <!-- E-mail -->
	    <input type="email" value="{{$student->EMAIL}}" class="form-control mb-4" placeholder="E-mail" name="email">

	    <!-- Phone number -->
	    <input type="text" name="phone" value="{{$student->PHONE}}" class="form-control" placeholder="Phone number" >

	    <!-- Sign up button -->
	    <button class="btn btn-info my-4 btn-block" type="submit">Edit Student</button>

	</form>
	<!-- Default form register -->
</div>

@endsection