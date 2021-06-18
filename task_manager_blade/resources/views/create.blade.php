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
        <div class="title m-b-md">
            Add new task
        </div>
        <form action="{{route('tasks.store')}}" class="text-left" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="form-group">
                <label for="inputTitle">Title
                    <input type="text" class="form-control" name="inputTitle" id="inputTitle" placeholder="Enter title"
                           required>
                </label>
            </div>
            <div class="form-group">
                <label for="inputContent">Content
                    <textarea name="inputContent" id="inputContent" rows="3" class="form-control"
                              placeholder="Enter content" required></textarea>
                </label>
            </div>
            <div class="form-group">
                <label for="inputDueDate">Due date
                    <input type="date" class="form-control" name="inputDueDate" id="inputDueDate" placeholder="mm-dd-yyyy" required>
                </label>
            </div>
            <div class="form-group">
                <label for="inputFile">Choose file
                    <input type="file" class="form-control-file" name="inputFile" id="inputFile">
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{route('welcome')}}" class="btn btn-secondary">Return</a>
        </form>
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
