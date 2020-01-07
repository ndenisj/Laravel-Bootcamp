@extends('layouts.main')
@section('content')

<div class="mb-5 mt-5 container">

	<h1>Welcome</h1>

	@if(session('successMsg'))
	<div class="alert alert-success">
		{{session('successMsg')}}
	</div>
	@endif

	<table class="table">
		<thead class="grey lighten-2">
			<tr>
				<th>#</th>
				<th>FIRST NAME</th>
				<th>LAST NAME</th>
				<th>EMAIL</th>
				<th>PHONE</th>
				<th>ACTIONS</th>
			</tr>
		</thead>
		<tbody>
			@foreach($students as $student)
			<tr>
				<td>{{$student->id}}</td>
				<td>{{$student->FIRST_NAME}}</td>
				<td>{{$student->LAST_NAME}}</td>
				<td>{{$student->EMAIL}}</td>
				<td>{{$student->PHONE}}</td>
				<td>
					<a class="btn btn-raised btn-sm btn-warning" href="{{route('edit', $student->id)}}">Edit</a> ||
					<form style="display: none;" method="POST" id="delete-form-{{$student->id}}" action="{{ route('delete', $student->id)}}">
						{{csrf_field()}}
						{{method_field('delete')}}
					</form>
					<button onclick="if(confirm('Are you sure?')){
						event.preventDefault();
						document.getElementById('delete-form-{{$student->id}}').submit();
					}else{event.preventDefault();}" class="btn btn-raised btn-sm btn-danger">Delete</button>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	{{$students->links()}}

</div>

@endsection
