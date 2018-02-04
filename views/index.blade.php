@extends('master')

@section('title')
Welcome to student management system
@endsection
@section('content')

@if(session('successMsg'))
<div class="alert alert-dismissible alert-success">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>Well done!</strong> {{ session('successMsg')}}
</div>
@endif

    <h1>All Student Here</h1>

    <table class="table table-bordered table-striped table-hover ">
  <thead>
  <tr>
    <th>ID</th>
    <th>Frist Name</th>
    <th>Last Name</th>
    <th>E-mail</th>
    <th>Phone</th>
    <th>Action</th>
  </tr>
  </thead>
  <tbody>
  	@foreach ($students as $student)
  <tr>
    <td> {{ $student->id }} </td>
    <td> {{ $student->first_name }} </td>
    <td> {{ $student->last_name }} </td>
    <td> {{ $student->phone }} </td>
    <td> {{ $student->email }} </td>
    <td> <a href="{{ route('edit',$student->id) }}" class="glyphicon glyphicon-edit"></a> ||
     <a href="{{ route('delete',$student->id) }}" class="glyphicon glyphicon-trash" onclick="return confirm('Are you sure, you want delete this!')"></a></td>
  </tr>
   @endforeach
  </tbody>
</table>

{{ $students->links() }}
    
@endsection