Users:
@foreach ($users as $user)
	<div>{{ $user }}</div>
@endforeach

<p>The next meeting will be about {{ $meetingTitle }}</p>
