@extends('layout')

@section('styles')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach($projects as $project)
                <div class="col-4">
                    <div class="card" style="width: 200px;">
                        @if(isset($project->project_image))
                            <img src="{{ $project->project_image }}"class="bd-placeholder-img card-img-top" width="100%" >
                        @else
                            <svg class="bd-placeholder-img card-img-top" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/>
                                <text fill="#dee2e6" dy=".3em" x="50%" y="50%">
                                    Image here
                                </text>
                            </svg>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('tasks.index', [$project->id]) }}">
                                    {{ $project->title }}
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <button class="btn">
            <a href="{{ url('projects/create') }}" class="btn btn-md btn-primary">プロジェクトを追加する</a>
            </button>
        </div>
    </div>
@endsection

@section('scripts')
  <!-- ... -->
@endsection