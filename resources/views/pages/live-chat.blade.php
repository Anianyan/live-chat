@extends('layouts.app')

@section('content')
<div id="page-wrap">
	<h2>Chat Room</h2>
	<p id="name-area"></p>
	<div id="chat-wrap">
		<div id="chat-area">
			@if ($messages)
				@foreach ($messages as $message)
					<p><span>{{ $message->user->name }}</span>{{ $message->message }} </p>
				@endforeach
			@endif
		</div>
	</div>
	<form id="send-message-area">
		<p>Your message: </p>
		<input type="hidden" name="user-id" value="{{ $user->id }}">
		<input type="hidden" name="user-name" value="{{ $user->name }}">
		<textarea id="message-field" maxlength="100" spellcheck="false"></textarea>
	</form>
</div>
@endsection