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
    <div class="container  py-5">
        <form method="POST" action="{{route('added')}}">
            @csrf <!-- Add CSRF token -->
            <div class="mb-3">
              <label for="name" class="form-label">Name<span class="text-danger">*</span></label>
              <input type="text" class="form-control" name="name" id="name" required aria-describedby="namehelp" placeholder="Enter your name reqired">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email address<span class="text-danger">*</span></label>
              <input type="email" class="form-control" name="email"  required id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter your email">
              <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <button type="submit" id="submit" class="btn btn-primary">Submit</button>
          </form>
       </div>
</body>
</html>