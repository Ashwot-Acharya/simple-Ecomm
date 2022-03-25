<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New shop</title>
</head>
<body class="bg-slate-900">
    @extends('home')
    @section('content')
    <div class="p-8 text-center w-full flex justify-center bg-slate-600" >
<form action="{{route('shop')}}" method="post">
         @csrf   
<div class="p-4">
            <input type="text" placeholder="Shop name" name="shop_name" class=" bg-gray-200  p-4 rounded-lg border-2">
</div>
<div class="p-4">
            <input type="number" placeholder="Phone number" name="phone_no" class=" bg-gray-200  p-4 rounded-lg border-2">
</div>
<div>
<input type="text" placeholder="Esewa id" name="esewa_id" class=" bg-gray-200  p-4 rounded-lg border-2" >

</div>
<div class="p-4">
<input class="form-check-input appearance-none h-8 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" name="checkbox" id="flexCheckDefault">
      <label class="form-check-label inline-block text-white" for="flexCheckDefault">
        I understand that I will be blocked from using the platform if any fradulent activity is found
      </label>
</div>
<button class="bg-blue-500 border-3 px-3 rounded hover:bg-blue-700 py-3" > Submit </button>
</form>
</div>
    @endsection
</body>
</html>