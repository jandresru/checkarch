							<h3>Contact to {!! $user->name; !!}</h3>

							{!! Form::open() !!}

							<div class="form-group">
							    {!! Form::label('Your Name') !!}
							    {!! Form::text('name', null, 
							        array('required', 
							              'class'=>'form-control', 
							              'placeholder'=>'Your name')) !!}
							</div>

							<div class="form-group">
							    {!! Form::label('Your E-mail Address') !!}
							    {!! Form::text('email', null, 
							        array('required', 
							              'class'=>'form-control', 
							              'placeholder'=>'Your e-mail address')) !!}
							</div>

							<div class="form-group">
							    {!! Form::label('Your Message') !!}
							    {!! Form::textarea('message', null, 
							        array('required', 
							              'class'=>'form-control', 
							              'placeholder'=>'Your message')) !!}
							</div>

							<div class="form-group">
							    {!! Form::submit('Send', 
							      array('class'=>'btn btn-primary')) !!}
							</div>
							{!! Form::close() !!}