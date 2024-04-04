Users:
@foreach ($users as $user)
	<div>{{ $user->name }}</div>
@endforeach

<p>The next meeting will be about {{ $meetingTitle }}</p>
