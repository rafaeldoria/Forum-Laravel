@extends('layouts.default')

@section('content')
<div class="container">
    <h3>{{ __('Most recent threads')}}</h3>
    <threads>
        Carregando
    </threads>
</div>

@endsection
@section('scripts')
    <script src="js/threads.js"></script>
@endsection
