<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <form method="POST" action="{{route('edited')}}">
            @csrf <!-- Add CSRF token -->

        
            <div class="mb-3">
              <label for="id" class="form-label">#id</label>
              <input type="hidden" class="form-control" name="id" id="id" aria-describedby="idhelp" value="{{ $tasks->id }}">
            </div>

            <div class="mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" name="name" id="name" aria-describedby="namehelp" value="{{ $tasks->name }}">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address</label>
              <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{ $tasks->email }}">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
          </form>
       </div>
</body>
</html>