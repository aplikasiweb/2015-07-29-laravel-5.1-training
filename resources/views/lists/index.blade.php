@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Your Lists</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					@if (Session::get('flash_success'))
						<div class="alert alert-success fade in m-b-15">
							<strong>Success!</strong>
							{!! Session::get('flash_success') !!}
							<span class="close" data-dismiss="alert">×</span>
						</div>
					@endif

					<a class="btn btn-link" href="{{ route('lists.create') }}">New List</a>

					<ul>
						<!-- 	@forelse ($lists as $list)
								<li>{{ $list }}</li>
							@empty
								<li>You don't have any lists saved.</li>
							@endforelse
						 -->
							@if (count($lists) > 0)
								@foreach ($lists as $list) 
									<li>
										<a href="{{ route('lists.show', $list->id) }}">{{ $list->name }}</a>
										<a href="{{ route('lists.edit', $list->id) }}">Edit</a>
										<a href="{{ route('lists.delete', $list->id) }}">Delete</a>
									</li>
								@endforeach
							@else
								<li>You don't have any lists saved.</li>
							@endif

						</ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
