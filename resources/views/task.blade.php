<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
   <div class="container">
    <div class="text-center">
        <h1>Daily Tasks</h1>
        <div class="row">
            <div class="col-md-12">
                <br>
                @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">
                    {{$error}}

                </div>
                @endforeach
                <form method="POST" action="/insertdata">
                   @csrf
                  <input type="text" class="form-control" name="task" placeholder="Enter your task"><br>
                  <input type="submit" class="btn btn-primary" value="Save">
                  <input type="button" class="btn btn-warning" value="Clear"><br><br>

                </form>
              
                <table class="table table-dark">
                    <tr>
                    <th>ID</th>
                    <th>Task</th>
                    <th>Completed</th>
                    <th>Action</th>
                    </tr>
                    @foreach($tasks as $task)
                    <tr>
                        <td>{{$task->id}}</td>
                        <td>{{$task->task}}</td>
                        <td>
                            @if($task->isCompleted)
                            <button class="bt btn-success">Completed</button>
                            @else
                            <button class="btn btn-warning">Not Completed</button>
                            @endif
                        </td>
                        @if($task->isCompleted)
                        <td><a href="/marknot/{{$task->id}}" class="btn btn-danger">Mark as not completed</a></td>
                        @else
                        <td><a href="/mark/{{$task->id}}" class="btn btn-primary">Mark as Completed</a></td>
                        @endif
                        <td><a href="/deletetask/{{$task->id}}" class="btn btn-warning">Delete</a></td>
                        <td><a href="updatetask/{{$task->id}}" class="btn btn-warning">Update</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
   </div>
    
</body>
</html>