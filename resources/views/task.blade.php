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
        <h1>Daily Tasks</h1>
        <div class="row">
            <div class="col-md-12">
                <br>
                <input type="text" class="form-control" name="task" placeholder="Enter your task"><br>
                <input type="button" class="btn btn-primary" value="Save">
                <input type="button" class="btn btn-warning" value="Clear"><br><br>
                <table class="table table-dark">
                    <tr>
                    <th>ID</th>
                    <th>Task</th>
                    <th>Completed</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>I have to learn laravel</td>
                        <td>Not yet</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
   </div>
    
</body>
</html>