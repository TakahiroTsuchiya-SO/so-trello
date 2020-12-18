@extends('layout')

@section('styles')

@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="row p-4">
                <div class="col-6">
                    <img src="img/top-view-note.png" class="bd-placeholder-img card-img-top"></img>
                </div>
                <div class="col-6 my-auto">
                    <button class="btn col-12">
                        <a href="{{ route('projects.create') }}" class="btn btn-md btn-primary">新規登録</a>
                    </button>
                    <button class="btn col-12">
                        <a href="{{ route('projects.index') }}" class="btn btn-md btn-primary">プロジェクトを見る</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
  <!-- ... -->
@endsection