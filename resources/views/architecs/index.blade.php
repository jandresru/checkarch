@extends('app')

@section('content')
<div class="container">
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}">Home</a></li>
		<li class="active">Architects</li>
	</ol>
	<div class="row">
		<div class="col-xs-6 col-sm-4 col-md-3 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-body">
					@include('architecs.partials.search')
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-8 col-md-9 col-md-offset-0">
			<div class="panel panel-default">

				<div class="panel-body">
					<div class="row">
					@foreach($users as $user)
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="/images/avatar-{{ rand(1,2) }}.png" alt="Test">
								<div class="caption">
									<h3><a href="{{ url('/architec/' . $user->id) }}">{{ $user->name }} {{ $user->surname }}</a></h3>
									<p>Barcelona / Spain</p>
									<p>
										<a href="{{ url('/architec/' . $user->id . '#projects') }}" class="btn btn-primary" role="button">Mis proyectos &nbsp;<span class="badge">{{ rand(1,5) }}</span></a> 
										<a href="{{ url('/architec/' . $user->id . '#contact') }}" class="btn btn-default" role="button">Contactar</a>
									</p>
								</div>
							</div>
						</div>
					@endforeach
					</div>
					{!! $users->render() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection