@extends('layout')

@section('styles')

@endsection

@section('content')
    <div class="container" id="app">
        <div class="row">
            <div id="app">
            <board-component
            :categories="{{ json_encode($categories) }}"
            :tasks="{{ json_encode($tasks) }}"
            ></board-component>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
<script>
</script>
@endsection