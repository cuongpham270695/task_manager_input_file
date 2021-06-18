<!doctype html>
<html lang="en">
<head>
    <title>Task list</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">Task list</div>
        @if(!isset($tasks))
            <h4 class="text-primary">Dont have any data</h4>
        @else
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Created at</th>
                    <th scope="col">Due date</th>
                </tr>
                </thead>
                <tbody>
                @forelse($tasks as $key=>$task)
                    <tr>
                        <th scope="row">{{++$key}}</th>
                        <td>{{$task->title}}</td>
                        <td>{{$task->content}}</td>
                        <td>{{$task->created_at}}</td>
                        <td>{{$task->due_date}}</td>
                        <td>
                            <img src="{{asset('storage/images' . $task->image)}}" alt="" style="width: 150px; height: 108px">
                        </td>
                    </tr>
                @empty
                    <h4 class="text-danger">Dont have any task</h4>
                @endforelse
                </tbody>
            </table>
        @endif
        <a href="{{route('welcome')}}" class="btn btn btn-secondary" style="text-align: center">Return</a>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
