<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="text-center">
            <h1>Update Task</h1>
            <form action="/updatetaskdb" method="post"><br><br>
                @csrf
                <input type="text" name="newtask" value="{{$tasks->task}}" class="form-control"><br><br>
                <input type="hidden" name='id' value="{{$tasks->id}}">
                <input type="submit" value="Update" class="btn btn-warning">
                <a href="/updatecancel" class="btn btn-warning">Cancel</a>
            </form>
        </div>
    </div>

</body>

</html>