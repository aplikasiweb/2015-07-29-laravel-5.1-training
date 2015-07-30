@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">
					@if ($list->id)
 						{{ $list->name }}
					@else
						Create New List
					@endif
				</div>
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

					<p>Name : {{ $list->name }}</p>
					<p>Description : {{ $list->description }}</p>
					<p>Created at : {{ $list->created_at }}</p>
					<p>Updated at : {{ $list->updated_at }}</p>

					<a class="btn btn-link" href="{{ route('lists.edit', $list->id) }}">Edit</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection