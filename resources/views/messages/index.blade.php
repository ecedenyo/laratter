@extends('layouts.app')

@section('content')

@foreach($messages as $message)
	@include('messages.message')
@endforeach

@if(count($messages)) 
<div class="mt-5 mb-5 mx-auto">{{ $messages->links() }}</div>
@endif

@endsection