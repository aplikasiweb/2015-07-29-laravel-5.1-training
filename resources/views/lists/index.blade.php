<ul>
<!-- 	@forelse ($lists as $list)
		<li>{{ $list }}</li>
	@empty
		<li>You don't have any lists saved.</li>
	@endforelse
 -->
	@if (count($lists) > 0)
		@foreach ($lists as $list) 
			<li>{{ $list->name }} - {{ $list->description }}</li>
		@endforeach
	@else
		<li>You don't have any lists saved.</li>
	@endif

</ul>