@extends('layout')

@section('styles')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach($tasks as $task)
                <div class="col-4">
                    <div class="card" style="width: 200px;">
                        <div class="card-body">
                            <h5 class="card-title">

                            </h5>
                        </div>
                    </div>
                    <button class="btn">
                        <a href="{{ route('tasks.create', [$project->id]) }}" class="btn btn-md btn-primary">タスクを追加＋</a>
                    </button>
                </div>
            @endforeach
        </div>
        <div class="row">
        </div>
    </div>
@endsection

@section('scripts')
  <!-- ... -->
@endsection