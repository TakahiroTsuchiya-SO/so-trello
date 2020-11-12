@extends('layout')

@section('styles')

@endsection

@section('content')
<div class="container">
<div class="row justify-content-center">
    <div class="card">
        <div class="card-header">タスクを作成する</div>
        <div class="card-body">
        <form method="POST" action="{{ route('tasks.store', $project->id) }}">
              @csrf
            <div class="form-group">
                <label for="title">タイトル</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}" />
            </div>
            <div class="form-group">
              <label for="category_id">カテゴリーを選択する</label>
                <select
                    id    = "category_id"
                    name  = "category_id"
                    class = "form-control {{ $errors->has('category_id') ? 'is-invalid' : '' }}"
                    value = "{{ old('category_id') }}"
                    >
                        @foreach($categories as $id => $name)
                            <option value="{{ $id }}">{{ $name }}</option>
                        @endforeach
                    </select>
            </div>
            <div class="form-group">
                <label for="due_date">期限</label>
                <input type="text" class="form-control" name="due_date" id="due_date" value="{{ old('due_date') }}" />
            </div>
            <div class="form-group">
                <label for="owner">管理者</label>
                <input type="text" class="form-control" name="owner" id="owner" value="{{ old('owner') }}" />
            </div>
            <div class="form-group">
                <label for="worker">作業者</label>
                <input type="text" class="form-control" name="worker" id="worker" value="{{ old('worker') }}" />
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