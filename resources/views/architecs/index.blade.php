@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-heading">Architecs</div>

				<div class="panel-body">
					<h2>Architecs</h2>
					<div class="row">
					@foreach($users as $user)
						<div class="col-sm-6 col-md-4">
							<div class="thumbnail">
								<img src="/images/prova.png" alt="Test">
								<div class="caption">
									<h3>{{ $user->name }}</h3>
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