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