@extends('app')

@section('content')
<div class="container">
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}">Home</a></li>
		<li><a href="{{ url('/architecs') }}">Architects</a></li>
		<li><a href="{{ url('/architec/'.$user->id) }}">{!! $user->name; !!} {!! $user->surname; !!}</a></li>
		<li class="active">Self construction in Medellin</li>

	</ol>
	<div class="row">
		<div class="col-xs-6 col-sm-4 col-md-3 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-body">
					@include('architecs.partials.basicinfo')
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-8 col-md-9 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-body">
					<h2 class="project-title">SELF CONSTRUCTION IN MEDELLIN</h2>
					<img src="/images/tmp/project-header.jpg" class="img-responsive"/>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-8 col-md-9 col-md-offset-0">
			<div class="panel panel-default">
				<div class="panel-body project">
					<div class="project-element"><strong>Subject:</strong> archmedium competition</div>
					<div class="project-element"><strong>Year:</strong> July 2014</div>
					<div class="project-element"><strong>Project's program:</strong> offices, storage, shops and housing.</div>
					<div class="project-element"><strong>Place:</strong> Medellin</div>	
					<div class="clear"></div>
					<a href="/images/tmp/project-1.jpg" class="lightbox" title="Peu de pàgina..."><img src="/images/tmp/project-1.jpg" class="img-responsive"/></a>
					<p>The project is done in Medellin, which has a lot of unregulated self-constructions, and also it has a low economic conditions. The project wants to improve this conditions and this is the reason which we propose that people can build their own housing with the materials that unregulated self-construction has. With this condition we get a building integrated in his context and also with a lot of possibilities because the people can build the housing that they want.</p>
					<a href="/images/tmp/project-2.jpg" class="lightbox" title="Peu de pàgina..."><img src="/images/tmp/project-2.jpg" class="img-responsive"/></a>
					<p><strong>GROUND PLAN, FIRST PLAN AND PARKING</strong></p>
					<a href="/images/tmp/project-3.jpg" class="lightbox" title="Peu de pàgina..."><img src="/images/tmp/project-3.jpg" class="img-responsive"/></a>
					<p><strong>SECTIONS</strong> sections about the housing complex</p>
					<a href="/images/tmp/project-4.jpg" class="lightbox" title="Peu de pàgina..."><img src="/images/tmp/project-4.jpg" class="img-responsive"/></a>
					<p><strong>DISTRIBUTION POSSIBLE COMBINATIONS</strong></p>
					<a href="/images/tmp/project-5.jpg" class="lightbox" title="Peu de pàgina..."><img src="/images/tmp/project-5.jpg" class="img-responsive"/></a>
					<p><strong>30 sqm APARTMENT MODULE EXPANDABLE</strong></p>
					<a href="/images/tmp/project-6.jpg" class="lightbox" title="Peu de pàgina..."><img src="/images/tmp/project-6.jpg" class="img-responsive"/></a>
					<p>In summary, this project give me a new vision of the architecture, and skills to do buildings adapted to the needs of a country. I think that is important participate in competitions like this, that talk about socials and economics problems. With this conditions you can see that architecture can try to improve these conditions.</p>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-8 col-md-9 col-md-offset-0" style="float:right;">
			<div class="panel panel-default">
				<div class="panel-body">
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-xs-6 col-sm-4 col-md-2 col-md-offset-0">
								<img src="/images/avatar-1.png" class="img-responsive"/>
							</div>
							<div class="col-xs-6 col-sm-8 col-md-10 col-md-offset-0">
								<h4>Verónica Expósito Urgellés</h4>
								<p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
								<p class="comments-date">07/06/2015 11:23</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<div class="col-xs-4 col-sm-3 col-md-2 col-md-offset-0">
								<img src="/images/avatar-1.png" class="img-responsive"/>
							</div>
							<div class="col-xs-8 col-sm-9 col-md-10 col-md-offset-0">
								<h4>Pablo Motos Pérez</h4>
								<p>lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum lorem ipsum</p>
								<p class="comments-date">07/06/2015 13:19</p>
							</div>
						</div>
					</div>
					<div class="panel panel-default">
						<div class="panel-body">
							<h4>Send your comments:</h4>
							<div class="form-group">
								<textarea class="form-control" rows="5" id="comment"></textarea>
							</div>
							<button type="submit" class="btn btn-default">Send</button>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>
<style>
	.clear{clear:both;}
	.project-title{ position:absolute;bottom:20px;text-shadow:3px 1px 2px #FFF; }
	.project-element{float:left;margin-right:15px;}
	.project img{margin:5px 0;}
	.project p{margin:5px 0;}
	.modal-backdrop.in {opacity: 0;filter: alpha(opacity=0);}
	#bootstrap-media-lightbox-content-container img{border:3px solid #333;}
	#bootstrap-media-lightbox-caption{background-color:#333;}
	.comments-date{margin-top:20px;font-style:italic;color:#AAA;}
</style>
@endsection

@section('scripts')

@endsection