@extends('layouts.app')

@section('content')

<div class="row">
@foreach($messages as $message)
	<div class="col-3">@include('messages.message')</div>
@endforeach
</div>

@if(count($messages)) 
<div class="mt-5 mb-5 mx-auto">{{ $messages->links() }}</div>
@endif

@endsection