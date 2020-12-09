@extends('layout')

@section('styles')

@endsection

@section('content')
    <div class="container" id="app">
        <div class="row">
            @foreach($categories as $category)
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
            <draggable :list="categoryJson" class="dragarea">
                <div v-for="category in categoryJson" class="category">
                    @{{category.title}}
                </div>
            </draggable>

            <draggable :list="taskJson" class="dragarea">
                <div v-for="task in taskJson" class="task">
                    @{{task.title}}
                </div>
            </draggable>
        </div>
    </div>
@endsection

@section('scripts')
<script>
  new Vue({
      el: "#app",
      data: {
        categoryJson: JSON.parse(`{!! $categoryJson !!}`),
        taskJson: JSON.parse(`{!! $taskJson !!}`),
      }
  })
</script>
@endsection