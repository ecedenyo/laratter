@extends('layouts.app')

@section('content')
<div class="title m-b-md">
    Laratter, by <a href="https://platzi.com">Platzi</a>
</div>

<p>Profesor {{ (isset($teacher)) ? ': '.$teacher : 'a definir' }}</p>

<div class="links">
    @foreach ($links as $link => $text)
    <a href="{{ $link }}">{{ $text }}</a>
    @endforeach
</div>
@endsection