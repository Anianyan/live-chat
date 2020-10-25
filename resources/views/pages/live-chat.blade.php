@extends('layouts.app')

@section('content')
<div id="page-wrap">
	<h2>Chat Room</h2>
	<p id="name-area"></p>
	<div id="chat-wrap">
		<div id="chat-area">
			<p><span>Guest</span>asfsaf </p>
			<p><span>Guest</span>dfsf </p>
		</div>
	</div>
	<form id="send-message-area">
		<p>Your message: </p>
		<textarea id="sendie" maxlength="100" spellcheck="false"></textarea>
	</form>
</div>
@endsection