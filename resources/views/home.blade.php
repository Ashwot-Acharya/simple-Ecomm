<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="https://kit.fontawesome.com/70e337f9f4.js" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}" >
    </script>
    <title>Home Page</title>
</head>
<body class="bg-slate-900" >
<nav class="p-6 bg-slate-700 text-white flex justify-between mb-6 " >
 <ul class="flex items-center"> 
    
            <li class="p-3 button"> <a  href="{{route('home')}}"> Home </a> </li>
            <li class="p-3" > <a  href="{{route('explore')}}">  Explore </a> </li>
            
        </ul>    
        <ul class="flex items-center"> 
            <li class="p-3"> <a href="{{route('cart')}}" > <i class="fas fa-shopping-cart"></i> </a> </li>

          @if (!auth()->user())
          <li class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"class="p-3" > <a  href="{{route('login')}}"> Login </a> </li>
          @else
            <li class="p-3"> <a href="{{route('MyPage')}}" > {{auth()->user()->Username}} </a> </li>
            @endif
        </ul>        

</nav>

    @yield('content')

</body>
</html>