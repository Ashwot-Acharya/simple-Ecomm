<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>Login</title>
</head>
<body class="bg-gray-300" >
<div class=" py-24 flex justify-center">
    <div class="p-8  w-4/12 bg-white  rounded-lg" >
        <h1 class="text-center"> Login</h1>
            @if (session('status'))
            <div class=" text-white bg-red-500 w-full p-4 rounded-lg border-2">

                    {{session('status')}}   
                    </div>
             
            @endif
        <form action="{{route('login')}}" method="post">
            @csrf
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
                <button type="submit" class="bg-blue-400 px-3 py-3 p-4 w-full rounded text-white"> Login </button>
            </div>
            <ul>
            <li><a class="p-3 text-blue-300 " href="{{route('home')}}" > Forgot Password? </a> </li>
            <li> <a class="p-3 text-blue-300" href="{{route('register')}}"> Register </a> </li>
            </ul>

               
         </form>
         
</div>
</body>
</html>