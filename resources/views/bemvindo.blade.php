@extends('layouts.app')

@section('title', '')

@section('content')
<div class="jumbotron text-center">
	<h1>Laratter</h1>
	<nav>
		<ul class="nav nav-pills">
			<li class="nav-item"><a class="nav-link" href="/">Home</a></li>
		</ul>
	</nav>
</div>

{{-- Formulario de envío de mensajes --}}
<div class="row">
	<form action="/messages/create" method="post">
		<div class="form-group">
			{{ csrf_field() }}
			<input type="text" name="message" class="form-control @if($errors->has('message')) is-invalid @endif" placeholder="Qué estás pensando?">

			@if ($errors->has('message'))
				@foreach ($errors->get('message') as $error)
				<div class="invalid-feedback">{{ $error }}</div>
				@endforeach
			@endif
		</div>
	</form>
</div>

<div class="row">
	{{-- @foreach($messages as $message) --}}
	
	@forelse($messages as $message)
		<div class="col-6">
			@include('messages.message')
		</div>
	@empty

		<p>No hay mensajes destacados</p>

	@endforelse

	@if(count($messages)) 
	<div class="mt-5 mb-5 mx-auto">{{ $messages->links() }}</div>
	@endif

	{{-- @endforeach --}}
</div>
@endsection