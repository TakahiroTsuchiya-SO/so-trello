@extends('layout')

@section('styles')

@endsection

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="card">
        <div class="card-header">Projectを作成する</div>
        <div class="card-body">
        <form method="POST" action="{{ route('projects.store') }}"　enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
              </div>
              <div class="form-group">
                <label for="title">テーマ画像</label>
                    @isset ($filename)
                        <div>
                            <img src="{{ asset('storage/' . $filename) }}">
                        </div>
                    @endisset
                <input type="file" name="file" class="form-control"/>
              </div>
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
              <div class="form-group">
              <div class="text-right">
                <button type="submit" class="btn btn-primary">送信する</button>
              </div>
              </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection

@section('scripts')
  <!-- ... -->
@endsection