@extends('layout')

@section('styles')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach($projects as $project)
                <div class="col-4 mb-4">
                    <div class="card bg-dark">
                        @if(isset($project->project_image))
                            <img src="{{ asset('/storage/img/'.$project->project_image) }}" class="project-index-img bd-placeholder-img card-img-top img-fluid" alt="image here">
                        @else
                            <svg class="bd-placeholder-img card-img-top" height="180" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Image cap">
                                <title>Placeholder</title>
                                <rect fill="#868e96" width="100%" height="100%"/>
                            </svg>
                        @endif
                        <div class="card-img-overlay">
                            <div class="card-header">
                                <a href="{{ route('tasks.index', [$project->id]) }}" class="text-white">
                                    {{ $project->title }}
                                </a>
                            </div>
                            <form action="{{ route('projects.delete', [$project->id]) }}" method="post">
                            @csrf
                            <input type="submit" value="削除" class="btn btn-primary text-white" onclick='return confirm("本当に削除しますか？");'>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <button class="btn">
            <a href="{{ route('projects.create') }}" class="btn btn-md btn-primary">プロジェクトを追加する</a>
            </button>
        </div>
    </div>
@endsection

@section('scripts')
  <!-- ... -->
@endsection