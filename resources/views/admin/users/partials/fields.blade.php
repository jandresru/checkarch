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
					<div class="form-group">
						{!! Form::label('type', 'User type') !!}
						{!! Form::select('type', config('options.types'), null, ['class' => 'form-control']) !!}
					</div>