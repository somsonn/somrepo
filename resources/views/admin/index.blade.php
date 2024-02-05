@include('admin.header');

        @if(session('success'))
    <div  class="flex bg-green-100 sm:w-1/2 mt-20 rounded-lg p-4 mb-4 text-sm text-green-800 mx-auto" role="alert">
        <svg class="w-5 h-5 inline mr-3" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
        <div>
            <span class="font-bold text-2xl">{{ session('success') }}</span> 
        </div>
    </div>

    
@endif

<div class="w-full m-4 rounded-lg border-blue-500 justify-beteween flex sm:gap-10 border-1 p-2 shadow-sm bg-white">
        <h1 class="font-sans text-2xl text-blue-500">add new scale here</h1>
        <a href="{{route('addnewscales')}}" type="submit" name="submit" id="submit" class="px-4 py-2  text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-purple">
                     <span class="pl-2 mx-1">Add scale</span>
</a>

    </div>


        <!-- table -->
            <header class="px-5 py-1 border-b border-gray-100  bg-blue-500" >
                    <h2 class="font-serif   text-center tracking-widest text-white   text-2xl">Allowance scale</h2>
            </header>
                                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-bold text-left">scale name</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">value</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">created at (ET)</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">updated at (ET)</div>
                                </th>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">Action</div>
                                </td>
                            </tr>
                        </thead>

                        
                        <tbody class="text-sm divide-y divide-gray-100">
                          @foreach($scales as $scale)
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{$scale->scale_name}}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$scale->value}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">{{$scale->created_at}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">{{$scale->updated_at}}</div>
                                </td>
                                <td >
                                  <a href="{{url('/admin/editscale/'.$scale->id)}}" class=" px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Edit</a>
                                  |<a id="deleteid" href="{{url('/admin/removescale/'.$scale->id)}}"  class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-rose-600 border border-transparent rounded-md active:bg-rose-600 hover:bg-rose-700 focus:outline-none focus:shadow-outline-purple">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$scales->links()}}
                 







        <!-- wereda and zone scale -->

        
         <div class="w-full m-4 rounded-lg border-blue-500 justify-beteween flex sm:gap-10 border-1 p-2 shadow-sm bg-white">
        <h1 class="font-sans text-2xl text-blue-500">upload city scale excell here</h1>
        <a href="{{route('cityscaleexcell')}}" type="submit" name="submit" id="submit" class="px-4 py-2  text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-purple">
                     <span class="pl-2 mx-1">create upload</span></a>
                    </div>


            <header class="px-5 p-1 border-b border-gray-100 bg-blue-500" >
                    <h2 class="font-serif  text-white text-center tracking-widest   text-2xl">cities scale</h2>
            </header>
            
            

               <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">city</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">level</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">desert allowance</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">status</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">created at (ET)</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">updated at (ET)</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">Action</div>
                                </th>
                            </tr>
                        </thead>

                        
                        <tbody class="text-sm divide-y divide-gray-100">
                          @foreach($cityscale as $city)
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{$city->region}}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$city->level}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$city->low}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">{{$city->medium }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">{{$city->high}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">{{$city->created_at}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">{{$city->updated_at}}</div>
                                </td>
                                <td >
                                  <a  href="{{url('/editallcityscale/edit/'.$city->id)}}" id="edit" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Edit</a>
                                  |<a   href="{{url('/cityscale/remove/'.$city->id)}}"  class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-rose-600 border border-transparent rounded-md active:bg-rose-600 hover:bg-rose-700 focus:outline-none focus:shadow-outline-purple">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$cityscale->links()}}

        </div>

</div>


<!-- notification box -->

<!-- <div id="notificationBox" class="">
    <div id="messageBox" class="fixed left-0 top-0 flex h-full w-full  items-center justify-center bg-black bg-opacity-50 py-10">
  <div id="smmallBox" class="max-h-full w-full max-w-xl overflow-y-auto sm:rounded-2xl bg-white">
    <div class="w-full">
      <div class="m-8 my-20 max-w-[400px] mx-auto">
        <div class="mb-8">
          <h1 class="mb-4 text-4xl bg-red-500 rounded-lg font-extrabold text-center text-blue-800 my-4 tracking-widest">! ጥንቃቄ </h1>
          <p id="message" class=" font-extrabold text-3xl tracking-widest">ድሌት ማለት ይፈሊጋሉ ? </p>
        </div>
   
        <div class=" gap-8 flex">
          <button id="" class="p-1  bg-blue-300  rounded-lg text-white sm:w-1/3  text-2xl">አይ  </button>
          <button   class="p-1  bg-red-500  rounded-lg text-white sm:w-1/3 text-center text-2xl">አዎ </button>
        </div>

    </div>
  </div>
</div> -->
</body>
<script>
    const deleteing = document.getElementById('deleteid');
    deleteing.addEventListener("click", (event) => {
    event.preventDefault();
        // notificationBox.classList.add("hidden");

})

</script>
</html>