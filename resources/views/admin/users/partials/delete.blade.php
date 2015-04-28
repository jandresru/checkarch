					{!! Form::open(['route' => ['admin.users.destroy', $user], 'method' => 'DELETE']) !!}
						<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
					{!! Form::close() !!}