@extends('layouts.default')

@section('content')
<div class="container">
    <h3>{{ $result->title}}</h3>
    <div class="card grey lighten">
        <div class="content">
            {{ $result->body}}
        </div>
    </div>
</div>

@endsection
@section('scripts')
@endsection
