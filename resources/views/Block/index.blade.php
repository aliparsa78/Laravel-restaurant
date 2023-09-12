<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blocked page</title>
    @include('Admin/link')
</head>
<body>
    <div class="container">
    <h1 class="mt-5 ml-2">For some security issus,Your are blocked!!</h1>
    <h4>Try to contact with manager with email: <span class="text-info">aliparsa883@gmail.com</span></h3>
    <form method="POST" action="{{ route('logout') }}" x-data>
        @csrf
        <input type="submit" class="btn btn-info text-center" value="Go Home">    
    </form>
    </div>
</body>
</html>