<!DOCTYPE html>
<html class="h-full bg-white" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">

        <title>Laravel</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')
 <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!-- Styles -->
        <style>
     
        </style>
    </head>
    <body class="w-full">
         <div class="flex w-full flex-col justify-center  text-4xl  font-bold  py-12 lg:px-8 tracking-widest">
<div>
 <header>       
<nav class="bg-white dark:bg-gray-900   z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
  <a href="{{route('homepage')}}" class="flex items-center">
      <span class="self-center text-4xl font-bold whitespace-nowrap dark:text-white">payroll Calculator</span>
  </a>
  <div class="items-center justify-between w-full flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex gap-8 p-4 md:p-0 mt-4 font-bold border border-gray-100 rounded-lg bg-gray-50 flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a href="{{route('homepage')}}" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page">Calculator</a>
      </li>
      <li>
        <a href="{{ route('userlogout') }}" class="block py-2 pl-3 pr-4 bg-red-400 p-4 text-white rounded hover:bg-gray-100 md:hover:bg-red-600 md:p-0 md:dark:hover:font-bold dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Logout</a>
      </li>
      <li>
        
      </li>
    </ul>
  </div>
  </div>
</nav>
</header>
</div>

@if($show)

        <div class="container">
        <form id="my-form" method="POST" action="{{ route('addsalary')}}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="from" class="font-bold text-5xl tracking-widest">የደሞዝ መጠን ያስገቡ </label>
                <input type="text" name="salary" class=" block w-full px-2 text-xl rounded-md border-0 py-1.5 text-black shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-black focus:ring  sm:text-3xl sm:leading-10" id="from" autocomplete="off">

            </div>
 


            <button class="flex w-1/3 justify-center rounded-md bg-indigo-600 px-3 py-1.5  font-bold leading-10 text-3xl text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" id="submit">calculate</button>
        </form>
    </div>

@endif

@if($hidden)
    
  <div id="histrybord" class="w-full  max-w-6xl mx-auto mt-10  bg-white shadow-lg rounded-sm border mb-48 border-blue-200">
            <header class="px-5 py-4 border-b border-blue-100">
                <h2 class="font-extrabold text-6xl text-gray-800">Histories</h2>
            </header>
            <div class="p-3">
                <div class="overflow-x-auto">
                    <table class="table-auto w-full">
                        <thead class="text-2xl font-semibold  text-gray-900 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-bold text-left">number</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-bold text-left">start date</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-bold text-left">end date</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-bold text-center">action</div>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-2xl divide-y divide-gray-100">
 @php
$counter = 1;
@endphp


@foreach($datehistry as $history)
@php
    $startdate = explode('/', $history->start_date);
    $enddate = explode('/', $history->end_date);
    $index = $startdate[0]-1;
    $endindex = $enddate[0]-1;
@endphp
<tr>
    <td class="p-2 whitespace-nowrap font-bold">
        <div class="text-left">{{$counter++}}</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left font-bold">{{$ethiomonth[$index]."/".$startdate[1]."/".$startdate[2]}}</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-left font-bold">{{$ethiomonth[$endindex]."/".$enddate[1]."/".$enddate[2]}}</div>
    </td>
    <td class="p-2 whitespace-nowrap">
        <div class="text-lg text-center">not defined</div>
    </td>
</tr>
@endforeach


                        </tbody>
                    </table>
<div class="font-bold text-blue-700 text-4xl">{{$datehistry->links('pagination::tailwind')}}</div>
                </div>
               
            </div>
        </div>
 

      </div>
</div>

@endif


    </body>
</html>
