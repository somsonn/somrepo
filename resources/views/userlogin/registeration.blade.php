<!DOCTYPE html>
<html class="h-full bg-white" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>ውሎ አበል</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')      
    </head>
    <body class="h-full">

            @if(session('success'))
    <div class="flex bg-green-100 sm:w-1/2 mt-20 rounded-lg p-4 mb-4 text-sm text-green-700" role="alert">
        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div>
            <span class="font-medium">{{ session('success') }}</span> 
        </div>
    </div>
@endif


<div class="flex min-h-full flex-col justify-center  px-6 py-12 lg:px-8 tracking-widest">
<div class=" sm:max-w-md border-blue-300 shadow-md px-16 border m-auto rounded-lg">
  <div class="sm:mx-auto ">
    <h2 class="mt-10 text-center text-2xl font-extraboldld leading-9 tracking-tight text-gray-900">አካውንት ይክፈቱ</h2>
  </div>

  <div class="mt-10 sm:mx-auto   ">
    <form class="space-y-6" action="{{route('new.userregister')}}" method="POST"  enctype="multipart/form-data">
      @csrf
      <div>
        <label for="name" class="block text-xl  font-extraboldld leading-6 text-gray-900">ሙሉ ስም </label>
        <div class="mt-2">
          <input id="name" name="name" type="text" autocomplete="name" required class="block px-2 font-bold w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center ">
          <label for="email" class="block text-xl  font-extraboldld   leading-6 text-gray-900">ኢሜል</label>
        </div>
        <div class="mt-2">
          <input id="email" name="email" type="email" autocomplete="current-password" required class="block w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

      <div>
        <div class="flex items-center ">
          <label for="password" class="block text-xl  font-extraboldld   leading-6 text-gray-900">ሚስጥር ቁጥር</label>
        </div>
        <div class="mt-2">
          <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
      </div>

       @foreach($errors->all() as $error)
      <li class="text-red-500 text-md font-midioum">{{$error}}</li>
      @endforeach

      <div>
        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">መዝግብ</button>
      </div>
    </form>

    <p class="mt-10 p-10 text-center text-sm text-gray-500">
      አካውንት አልዎት?
      <a href="{{route('userloginpage')}}" class="font-extrabold  leading-6 text-indigo-600 hover:text-indigo-500">ወደ አካውንት ይግቡ </a>
    </p>
  </div>
</div>
</div>


    </body>
</html>
