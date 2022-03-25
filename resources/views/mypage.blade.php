<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Page</title>
</head>
<body>
    @extends('home')
    @section('content')
<div class="flex justify-between mb-6 " >
<div class="p-8 columns-auto ">  
    <form action="{{route('change')}}" method="post" >
        @csrf
        <div class="p-3 w-4/8 " > 
        <h3 class="text-white p-4 "> Change password </h3> 
        <input type="password" class=" p-3  bg-gray-200 p-4 rounded-lg border-2" name="password" placeholder="new Password" id="password">
        </div>
        <div class="p-3">
        <input type="password" class="p-3  bg-gray-200  p-4 rounded-lg border-2" placeholder="Confirm Password" name="confirm_password" id="password">
        </div>
        <button class="p-3 bg-blue-500 hover:bg-blue-700 w-full text-white font-bold py-2 px-4 rounded"> Change </button>
    </form>
</div>
<div class="p-8 w-4/12 columns-auto" >
    <form action="{{route('logout')}}" method="post"  class="p-3"> 
        @csrf
        <button class="bg-blue-500 hover:bg-blue-700 w-full text-white font-bold py-2 px-4 rounded"> LogOut </button>

    </form>
    <form action="{{ route('newshop') }}" method="get" >
        <button class="bg-blue-500 hover:bg-blue-700 w-full text-white font-bold py-2 px-4 rounded"> setup shop </button>
</form>
</div>
</div>
        
    @endsection
</body>
</html>