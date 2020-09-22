@extends('layout')

@section('styles')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach($projects as $project)
                <div class="col-4">
                    <div class="card" style="width: 200px;">
                        <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap"><title>Placeholder</title><rect fill="#868e96" width="100%" height="100%"/>
                            <text fill="#dee2e6" dy=".3em" x="50%" y="50%">
                                Image here
                            </text>
                        </svg>
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="{{ route('projects.index', ['id' => $project->id]) }}" class="list-group-item">
                                    {{ $project->title }}
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('scripts')
  <!-- ... -->
@endsection