@extends("layout")

@section("content")

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>All tasks</h1>
			</div>
			<div class="col-lg-12">
				<a href="{{ route('tasks.create') }}" class="btn btn-success">Add task</a>
			</div>
			<div class="col-lg-12">
				<table class="table">
					<thead class="thead-light">
						<tr>
							<th>ID</th>
							<th>Title</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody>

					@foreach($tasks as $task)

						<tr>
							<td>{{ $task->id }}</td>
							<td>{{ $task->title }}</td>
							<td>
								<a href="{{ route('tasks.view', $task->id) }}" class="btn btn-primary">view</a>
								<a href="{{ route('tasks.edit', $task->id) }}" class="btn btn-warning">edit</a>

								{!! Form::open(["method" => "DELETE", "route" => ["tasks.delete", $task->id]]) !!}
									<button class="btn btn-danger" onclick="return confirm('are you sure?')">delete</button>
								{!! Form::close() !!}
							</td>
						</tr>

					@endforeach

					</tbody>
					<table>
					</div>
				</div>
			</div>
		</div>

@endsection