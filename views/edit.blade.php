@extends('master')

@section('title')
Add information
@endsection

@section('content')

@if(session('successMsg'))
<div class="alert alert-dismissible alert-success">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>Well done!</strong> {{ session('successMsg')}}
</div>
@endif
@if($errors->any())
@foreach ($errors->all() as $error)
<div class="alert alert-dismissible alert-danger">
	<button type="button" class="close" data-dismiss="alert">×</button>
	<strong>Oh snap!</strong> {{ $error }}
</div>
@endforeach
@endif

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Update Item</h3>
	</div>
	<div class="panel-body">
		<form class="form-horizontal" method="POST" action="{{ route('update',$students->id) }}">
			{{ csrf_field() }}
			<fieldset>
				<legend>Legend</legend>
				<div class="form-group">
					<label for="fristname" class="col-md-2 control-label">Frist Name</label>

					<div class="col-md-10">
						<input type="text" name="fristname" class="form-control" id="inputEmail" placeholder="Frist Name" value="{{$students->first_name}}">
					</div>
				</div>
				<div class="form-group">
					<label for="lastname" class="col-md-2 control-label">Last Name</label>

					<div class="col-md-10">
						<input type="text" name="lastname" class="form-control" id="inputEmail" placeholder="Last Name" value="{{$students->last_name}}">
					</div>
				</div>
				<div class="form-group">
					<label for="phone" name="phone" class="col-md-2 control-label">Phone</label>

					<div class="col-md-10">
						<input type="text" name="phone" class="form-control" id="inputEmail" placeholder="Phone" value="{{$students->phone}}">
					</div>
				</div>
				<div class="form-group">
					<label for="email" class="col-md-2 control-label">Email</label>

					<div class="col-md-10">
						<input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="{{$students->email}}">
					</div>
				</div>
				<div class="form-group">
					<div class="col-md-10 col-md-offset-2">
						<button type="button" class="btn btn-default">Cancel</button>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>
			</fieldset>
		</form>
	</div>
</div>
    
@endsection