Users:
@foreach ($users as $user)
	@if(is_string($user))
		<div>{{ $user }}</div>
	@else
		<div>{{ $user->name }}</div>
	@endif
@endforeach

<p>The next meeting will be about {{ $meetingTitle }}</p>
