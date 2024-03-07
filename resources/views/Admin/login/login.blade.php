<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/js/app.js'])
    <title>@yield('title')</title>
    <style>
      body{
        background: #f2f5f9
      }
    </style>
</head>
<body >
    
        <form action="{{route('login')}}" method="POST" class="shadow p-5 border border-2 rounded" style="width: 500px;position: absolute;left:35%;top:30%">
          @csrf 
       
          <div class="mb-3">
                <h1 class="text-dark text-center w-100 ">Welcome To Admin Panel</h1>
            </div>
            <div class="mb-3"><input type="text" class="form-control" name="name" placeholder="username">
              @error('login')
              <p class="text-danger"> {{$message}}</p>
           @enderror</div>
            <div class="mb-3">
                <input type="password" class="form-control" name="password" placeholder="password">
            </div>
            <button class="btn btn-dark btn-lg rounded w-100">Login</button>
        </form>
  
</body>
</html>