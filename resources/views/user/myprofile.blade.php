@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-heading">My profile</div>
				<div class="panel-body">
					{!! Form::model($user,['action' => 'UserController@update', 'method' => 'PUT']) !!}
					<div class="form-group">
						{!! Form::label('email', 'Email') !!}
						{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'example@domain.com']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('password', 'Password') !!}
						{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '******']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('name', 'Name') !!}
						{!! Form::text('name', null, ['class' => 'form-control']) !!}
					</div>
					<button type="submit" class="btn btn-default">Update</button>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection