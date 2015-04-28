@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Edit User: {{ $user->name }}</div>

				<div class="panel-body">

					@include('admin.users.partials.errors')

					{!! Form::model($user,['route' => ['admin.users.update',$user], 'method' => 'PUT']) !!}
					@include('admin.users.partials.fields')
					<button type="submit" class="btn btn-default">Update</button>
					{!! Form::close() !!}

				</div>

			</div>

			@include('admin.users.partials.delete')

		</div>
	</div>
</div>
@endsection
