@extends('layout')

@section('styles')

@endsection

@section('content')
    <div class="container" id="app">
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
        @{{ hello }}
        <draggable :list="items" class="dragarea">
    <div v-for="item in items" class="item">
      @{{item.text}}
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
        hello: 'hello world!!!!',

        items: [{
        text: 'list1'
        }, {
        text: 'list2'
        }, {
        text: 'list3'
        }, {
        text: 'list4'
        }, {
        text: 'list5'
        }, ]
      },
  })
</script>
@endsection