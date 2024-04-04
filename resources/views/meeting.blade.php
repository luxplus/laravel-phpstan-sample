Users:
@foreach ($users as $user)
	<div>{{ $user->fullname }}</div>
@endforeach

<p>The next meeting will be about {{ $meetingTitle }}</p>
