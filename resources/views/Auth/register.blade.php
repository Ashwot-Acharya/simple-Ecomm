<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body class="bg-gray-300" >
<div class=" py-24 flex justify-center">
    <div class="p-8  w-4/12 bg-white  rounded-lg" >
        <h1 class="decoration-double text-center"> Register</h1>

        <form action="{{route('register')}}" method="post">
            @csrf
            <div class="p-4">
                <label for="Name" class="sr-only" > Name</label>
                <input type="text" name="name" id="name" placeholder="name" value="{{old('name')}}" class=" bg-gray-200 w-full p-4 rounded-lg border-2" />       
            </div>
            @error('name')
            <div class="pl-4 text-red-500 text-sm">
                {{$message}}
            </div>
            @enderror
            <div class="p-4">
                <label for="email" class="sr-only" > Email</label>
                <input type="email" name="email" id="email" placeholder="email" value="{{old('email')}}" class=" bg-gray-200 w-full p-4 rounded-lg border-2" />       
            </div>
            @error('email')
            <div class="pl-4 text-red-500 text-sm">
                {{$message}}
            </div>
            @enderror
            <div class="p-4">
                <label for="username" class="sr-only" > usename</label>
                <input type="text" name="username" id="username" placeholder="Username" value="{{old('username')}}" class=" bg-gray-200 w-full p-4 rounded-lg border-2" />       
            </div>
            @error('username')
            <div class="pl-4 text-red-500 text-sm">
                {{$message}}
            </div>
                
            @enderror
            
            <div class="p-4">
                <label for="password" class="sr-only" > password</label>
                <input type="password" name="password" id="password" placeholder="Enter password" value="" class="bg-gray-200 w-full p-4 rounded-lg border-2" />
                        
            </div>

            @error('password')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
                
            @enderror
            <div class="p-4">
                <label for="password" class="sr-only" > Confirm password</label>
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="confirm password" value="" class="bg-gray-200 w-full p-4 rounded-lg border-2" />
                        
            </div>
            @error('re-password')
            <div class="text-sm text-red-500 pl-4" >
                {{$message}}
            </div>
            @enderror
          
            <div class="p-4">
                <button type="submit" class="bg-blue-400 px-3 py-3 p-4 w-full rounded text-white"> Register </button>
            </div>
</div>
</form>

    
</body>
</html>