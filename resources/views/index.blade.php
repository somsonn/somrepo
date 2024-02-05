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
  <a href="#" class="flex items-center">
      <span class="self-center text-4xl font-bold whitespace-nowrap dark:text-white">ውሎአበል</span>
  </a>
  @php
  $id = 4 ;
  @endphp
  <div class="items-center justify-between w-full flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex gap-8 p-4 md:p-0 mt-4 font-bold border border-gray-100 rounded-lg bg-gray-50 flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
      <li>
        <a  href="{{url('/salarypage/'.$id)}}" class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:text-blue-700 md:p-0 md:dark:text-blue-500" aria-current="page"> ደሞዝ </a>
      </li>
      <li>
        <a href="{{ route('userlogout') }}" class="block py-2 pl-3 pr-4 bg-red-400 p-8 text-white rounded hover:bg-gray-100 md:hover:bg-red-600 md:p-0 md:dark:hover:font-bold dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">ውጣ</a>
      </li>
      <li>
        
      </li>
    </ul>
  </div>
  </div>
</nav>

            </header>
        </div>


                @if(session('success'))
    <div id="success-container" class="flex bg-green-100 sm:w-1/2 mt-20 rounded-lg p-4 mb-4 text-sm text-green-800 mx-auto" role="alert">
        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div>
            <span class="font-bold text-2xl">{{ session('success') }}</span> 
        </div>
    </div>
@endif
        <!-- calculation form -->
            <div id="closeeventhandler" class="sm:max-w-4xl min-h-1/2   w-full border-blue-400 shadow-md px-16 mt-32 border-2 mx-auto rounded-lg">
            <div class="sm:mx-auto border-b-2 border-blue-200">
                <h1 class="mt-10 text-center text-5xl font-bold leading-10  text-gray-900">የውሎ አበል መረጃ ቅፅ</h1>
                <p class="text-center text-lg p-2">መረጃዎትን በጥንቃቄ ያስገቡ</p>
            </div>


            
            <div class="mt-10  sm:mx-auto">
                
                <form id="calendar-form"  action="{{route('printpdf')}}" method="GET" enctype="multipart/form-data">
                     @csrf
                <div class="sm:grid my-5 sm:grid-cols-2 gap-2 sm:gap-4">
                    <div>
                        <label class="block text-4xl  font-bold leading-10 text-gray-900" for="">የጉዞ መነሻ ቦታ</label>
                    <div class="mt-2">
                        <select name="start_city" class="block w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-3xl sm:leading-10 ">
                        @foreach($capitalcity as $city)
                            <option>{{$city->city_name}}</option>
                        @endforeach

                        @foreach($cities as $city)
                            <option>{{$city->name}}</option>
                        @endforeach

                        
                        </select>
                    </div>
                    </div>

                    <div >
                        <label class="block text-4xl  font-bold leading-10 text-gray-900" for="">የጉዞ መድረሻ ቦታ</label>
                    <div class="mt-2">
                        <select name="end_city" class="block w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-3xl sm:leading-10 ">

                        @foreach($capitalcity as $city)
                            <option>{{$city->city_name}}</option>
                        @endforeach

                        @foreach($cities as $city)
                            <option>{{$city->name}}</option>
                        @endforeach
                        </select>
                        
                    </div>
                    </div>
                </div>

                <div class="sm:grid my-5 sm:grid-cols-2 gap-2 sm:gap-4 ">
                    <div >
                        <label class="block text-4xl  font-bold leading-10 text-gray-900" for="">ቁርስ</label>
                    <div class="mt-2">
                        <select id="brake-fast" name="brake_fast" required type="text" class="block w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-3xl sm:leading-10">
                        @foreach($capitalcity as $city)
                            <option>{{$city->city_name}}</option>
                        @endforeach

                        @foreach($cities as $city)
                            <option>{{$city->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    </div>

                    <div >
                        <label class="block text-4xl  font-bold leading-10 text-gray-900" for="">ምሳ</label>
                    <div class="mt-2">
                        <select id="lanch" name="lanch" required type="text" class="block w-full px-2 font-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-3xl sm:leading-10">
                        @foreach($capitalcity as $city)
                            <option>{{$city->city_name}}</option>
                        @endforeach

                        @foreach($cities as $city)
                            <option>{{$city->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    </div>
                </div>


                <input name="date_diference" class="date_difference hidden border-2 border-blue-900 text-2xl" value="" type="text">


                <div class="sm:grid my-5 sm:grid-cols-2 gap-2 sm:gap-4 ">
                     <div>
                         <label class="block text-4xl  font-bold leading-10 text-gray-900" for="">የጉዞ መነሻ ቀን</label>
                           <input autocomplete="off" id="from" placeholder="21-12-2014" name="start_date" required type="text" class=" updatenput datepicker-input block w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-3xl sm:leading-10">

                     </div>
                        <div >
                            <label class="block text-4xl  font-bold leading-10 text-gray-900" for="">የጉዞ  መድረሻ ቀን</label>
                            <input id="to" name="end_date" autocomplete="off" placeholder="26-12-2014" required  type="text" class="updateenddate datepicker-input block w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-3xl sm:leading-10">
                        </div>
                    </div>
            </div>

            <div class="my-10 justify-center">
                        <button  onclick="checkDates(event)"  class="submitbutton flex mx-auto w-2/3 justify-center rounded-md bg-indigo-600 px-3 py-3 text-3xl font-bold leading-10 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" >አስላ</button>
                    </div>
            </from>
            </div>
        </div>


        

        
<div>





        <!-- component -->
<div id="notificationBox" class="hidden">
    <div id="messageBox" class="fixed left-0 top-0 flex h-full w-full  items-center justify-center bg-black bg-opacity-50 py-10">
  <div id="smmallBox" class="max-h-full w-full max-w-4xl overflow-y-auto sm:rounded-2xl bg-white">
    <div class="w-full">
      <div class="m-8 my-20 max-w-[400px] mx-auto">
        <div class="mb-8">
          <h1 class="mb-4 text-5xl font-extrabold text-center text-blue-800 my-4 tracking-widest">response...</h1>
          <p id="message" class=" font-extrabold text-3xl tracking-widest">please wait </p>
        </div>
        @php
        $id = 5;
        @endphp
        <div class="space-y-4">
          <button id="closeBox" class="p-3 bg-blue-800 w-full rounded-full text-white sm:w-1/3 font-extrabold text-3xl">እሽ </button>
          <a id="histrybutton" href="{{ url('/salarypage/'.$id) }}" class="p-3 bg-white border rounded-full w-full sm:w-1/3 font-bold text-xl">ቀኖችን ይዩ</a>
        </div>

        

    </div>
  </div>
</div>
</div>



@php
    $histryarray = array();
@endphp

@foreach($datehistry as $datehis)
    @php
        $startdate = $datehis->start_date;
        $enddate = $datehis->end_date;

        $formattedStartDate = date('Y-m-d', strtotime(str_replace('-', '/', $startdate)));
        $formattedEndDate = date('Y-m-d', strtotime(str_replace('-', '/', $enddate)));

        $histryarray[] = '[new Date("' . $formattedStartDate . '"), new Date("' . $formattedEndDate . '")]';
    @endphp
@endforeach

<script> 
    var dateRanges = [ 
    @foreach ($histryarray as $dateRange)
        {!! $dateRange !!},
    @endforeach
];


var messageBox = document.getElementById("messageBox");
var notificationBox = document.getElementById("notificationBox");
var histrybutton = document.getElementById("histrybutton");
var smmallBox = document.getElementById("smmallBox");
var closeBox = document.getElementById("closeBox");

notificationBox.addEventListener("click", (event) => {

  if (!event.target.closest("#smmallBox")) {
    notificationBox.classList.add("hidden");
  }


});
closeBox.addEventListener("click", (event) => {
    event.preventDefault();
        notificationBox.classList.add("hidden");

})
        const dateofeth =  dateconverter();

    function checkDates(event) { 
    var fromDate = document.getElementById("from").value;
var toDate = document.getElementById("to").value;
var histrybord = document.getElementById("histrybord"); 
var message = document.getElementById("message");





// Split the date strings and rearrange the parts
var fromParts = fromDate.split("/");
var toParts = toDate.split("/");
var dateofeths = dateofeth.split('-');

var ristrictdate = new Date(dateofeths[2], dateofeths[1], dateofeths[0]);
var inputDate1 = new Date(fromParts[2], fromParts[1] - 1, fromParts[0]);
var inputDate2 = new Date(toParts[2], toParts[1] - 1, toParts[0]);

      
if( inputDate1 <= inputDate2){
      if(inputDate1 <= ristrictdate && inputDate2 <= ristrictdate){

           var inRange = false; 
      for (var i = 0; i < dateRanges.length; i++) { 
        var rangeStart = dateRanges[i][0]; 
        var rangeEnd = dateRanges[i][1]; 
        console.log(rangeStart)
        console.log(rangeEnd)
        if ((inputDate1 >= rangeStart && inputDate1 <= rangeEnd) || (inputDate2 >= rangeStart && inputDate2 <= rangeEnd ) || (inputDate1 < rangeStart && inputDate2 > rangeEnd )) { 
          inRange = true; 
          break; 
        } 
      } 
      if (inRange) { 

        notificationBox.classList.remove('hidden');
        message.textContent = "ይህ ቀን ስለተመዘገበ እባክዎ እንደገና ያስተካክሉ።"
        message.classList.add('text-red-600')
        histrybutton.classList.remove('hidden');
        event.preventDefault();
        
        
      } else { 
        datedefference(fromParts,toParts);
        
      } 
      }else{

        notificationBox.classList.remove('hidden');
        histrybutton.classList.add('hidden');
        message.textContent = "እስክ ዛሬ ያሉትን ቀኖች ይጠቀሙ :" + dateofeth
        message.classList.add('text-yellow-500')
        event.preventDefault();
      }

      
}else{

    notificationBox.classList.remove('hidden');
    histrybutton.classList.add('hidden');
        message.textContent = "መድረሻ ቀን ከመነሻዎ ቀን መብለጥ አለበት !"
        message.classList.add('text-yellow-500')
        event.preventDefault();

}
   



    } 

    function datedefference(fromParts,toParts){

        let differentdate = document.querySelector(".date_difference");
        let yeardifference = toParts[2] - fromParts[2];

        
        let monthdifference = 0;
        let daydeference = 0;
        if (yeardifference <= 1) {
            monthdifference = toParts[1] - fromParts[1];

            

            if (yeardifference === 0) {
                monthdifference = monthdifference * 30;

                daydeference = monthdifference + (toParts[0] - fromParts[0]);

                differentdate.value = daydeference;
            } else {

                
                monthdifference = monthdifference + 12;
                monthdifference = monthdifference * 30;

                if (parseInt(toParts[2] )!== 2016) {
                    daydeference = monthdifference + parseInt(toParts[0]) - parseInt(fromParts[0]) + 5;
                    differentdate.value = daydeference;
                } else {
                    daydeference = (monthdifference + parseInt(toParts[0])) - parseInt(fromParts[0]) + 6;

                    
                    differentdate.value = daydeference;
                }
            }
        }

    }

    function  historyControle(event){
        event.preventDefault();
         event.stopPropagation();
        histrybord.classList.remove('hidden');
    }
function dateconverter() {
  const date = new Date();
  const year = date.getFullYear();
  const month = date.getMonth();
  const day = date.getDate();

 const startOfYear = new Date(year, 0, 1); // January 1st
  const currentDay = new Date(year, month, day);
  const totalDays = Math.floor((currentDay - startOfYear) / (1000 * 60 * 60 * 24)) + 1;

  const gregorianEpoch = year / 4 + year / 400 - year / 100 + 365 * year  + totalDays;

  const ethio_epoch = gregorianEpoch - 2807.95;
  const eth_year = Math.floor(ethio_epoch/365.2425)
  const eth_month = Math.floor((((ethio_epoch/365.2425) - eth_year) * 365.2425) / 30);
  const eth_day = Math.floor(((((ethio_epoch/365.2425) - eth_year) * 365.2425 / 30) - eth_month)*30)

 

  return  eth_day+ '-' + eth_month  + '-' + eth_year; 
}

// Example usage

  </script>


</body>
    <script type="module" src="{{ asset('js/app.mjs') }}"></script>

    <script>
        <script>
    setTimeout(function() {
        var successContainer = document.getElementById('success-container');
        if (successContainer) {
            successContainer.remove();
        }
    }, 5000); 
</script>

    
</html>
