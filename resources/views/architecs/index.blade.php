@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-default">
				<ol class="breadcrumb">
					<li class="active">Architects</li>
				</ol>
				<div class="panel-body">
					<div class="row">
					@foreach($users as $user)
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="/images/avatar-{{ rand(1,2) }}.png" alt="Test">
								<div class="caption">
									<h3><a href="{{ url('/architec/' . $user->id) }}">{{ $user->name }}</a></h3>
									<p>Soy la mejor arquitecta del Mundo. Sin duda.</p>
									<p><a href="#" class="btn btn-primary" role="button">Mis proyectos &nbsp;<span class="badge">{{ rand(1,5) }}</span></a> <a href="#" class="btn btn-default" role="button">Contactar</a></p>
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