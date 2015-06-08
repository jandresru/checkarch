@extends('app')

@section('content')
<div class="container">
	<ol class="breadcrumb">
		<li><a href="{{ url('/') }}">Home</a></li>
		<li><a href="{{ url('/architecs') }}">Architects</a></li>
		<li class="active">{!! $user->name; !!} {!! $user->surname; !!}</li>
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
					<ul class="nav nav-tabs" id="nav-menutab">
					  <li role="presentation" class="" id="tab-1"><a href="#projects">Projects</a></li>
					  <li role="presentation" class="" id="tab-2"><a href="#contact">Contact</a></li>
					</ul>
					<div id="architect-content">
						<div id="content-tab-1" class="content-tab">
							@include('architecs.partials.projects')
						</div>
						<div id="content-tab-2" class="content-tab">
							@include('architecs.partials.contact')
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style>
	#architect-content{ border-left:1px solid #ddd;border-right:1px solid #ddd;border-bottom:1px solid #ddd;padding:15px; }
</style>
@endsection

@section('scripts')
	<script>
		$(function(){
			/* initialization */
			var selectedTab = window.location.hash.substring(1);
			if(selectedTab=="contact") selectedTab = "2";
			else selectedTab = "1";
			$(".content-tab").hide();
			$("#content-tab-"+selectedTab).show();
			$("#tab-"+selectedTab).addClass("active");
			/* tab change */
			$("#nav-menutab li").click(function(){
				var id = $(this).attr("id").split("-")[1];
				$("#nav-menutab li").removeClass("active");
				$(this).addClass("active");
				$(".content-tab").hide();
				$("#content-tab-"+id).show();
			});
			$('.anchor').click(function(){
			    $('html, body').animate({
			        scrollTop: $( $(this).attr('href') ).offset().top
			    }, 500);
			    return false;
			});
		});
	</script>
@endsection