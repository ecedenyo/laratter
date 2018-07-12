<img src="{{ $message->image }}" alt="" class="img-thumbnail">
<p class="card-text">
	<div>
		<small class="text-muted">Por: <a href="/{{ $message->user->username }}">{{ $message->user->name }}</a></small><br>
		<small class="text-muted">Creado: {{ $message->created_at }}</small>
	</div>
	<div>{{ $message->content }}</div>
	<p><a href="/messages/{{ $message->id }}">Leer más</a></p>
</p>