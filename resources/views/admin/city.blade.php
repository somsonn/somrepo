
@include('admin.header');

           
<div class="w-full m-8 rounded-lg border-blue-500 justify-beteween flex sm:gap-10 border-1 p-2 shadow-sm bg-white">
        <h1 class="font-sans text-2xl text-blue-500">add new scale here</h1>
        <a href="{{route('addcapitalcityexcell')}}" type="submit" name="submit" id="submit" class="px-4 py-2  text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-purple">
                     <span class="pl-2 mx-1">Add scale</span></a>

    </div>


            <header class="px-5 py-4 border-b border-gray-100 bg-blue-500" >
                    <h2 class="font-bold  text-white text-center tracking-widest   text-3xl">capital city</h2>
            </header>
                    <table class="table-auto w-full">
                        <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                            <tr>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">capital city</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">desert Allowance</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-left">low</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">midium</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">high</div>
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
                          @foreach($capitalcity as $city)
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{$city->city_name}}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$city->desertalw}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$city->low}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">{{$city->medium}}</div>
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
                                  <a  href="{{url('/city/edit/'.$city->id)}}" id="submit" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Edit</a>
                                  |<a  href="{{url('/city/remove/'.$city->id)}}" id="submit" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-rose-600 border border-transparent rounded-md active:bg-rose-600 hover:bg-rose-700 focus:outline-none focus:shadow-outline-purple">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$capitalcity->links()}}





        <div class="w-full m-8 rounded-lg border-blue-500 justify-beteween flex sm:gap-10 border-1 p-2 shadow-sm bg-white">
        <h1 class="font-sans text-2xl text-blue-500">add new scale here</h1>
        <a href="{{route('newzoneworedaexcell')}}" type="submit" name="submit" id="submit" class="px-4 py-2  text-sm font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-blue-600 hover:bg-blue-700 focus:outline-none focus:shadow-outline-purple">
                     <span class="pl-2 mx-1">Add scale</span>
</a>

    </div>

            <header class="px-5 py-4 border-b border-gray-100 bg-blue-500" >
                    <h2 class="font-bold  text-white text-center tracking-widest   text-3xl">zone woreda</h2>
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
                                    <div class="font-semibold text-left">region</div>
                                </th>
                                <th class="p-2 whitespace-nowrap">
                                    <div class="font-semibold text-center">desert allowance</div>
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
                          @foreach($zoneWereda as $city)
                            <tr>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="font-medium text-gray-800">{{$city->name}}</div>
                                    </div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$city->level}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left">{{$city->region}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-left font-medium text-green-500">{{$city->desertalw }}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">{{$city->created_at}}</div>
                                </td>
                                <td class="p-2 whitespace-nowrap">
                                    <div class="text-lg text-center">{{$city->updated_at}}</div>
                                </td>
                                <td >
                                  <a  href="{{url('/editzonewereda/edit/'.$city->id)}}" id="submit" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-green-600 border border-transparent rounded-md active:bg-green-600 hover:bg-green-700 focus:outline-none focus:shadow-outline-purple">Edit</a>
                                  |<a  href="{{url('/zone_wereda/remove/'.$city->id)}}" id="submit" class="px-3 py-1 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-rose-600 border border-transparent rounded-md active:bg-rose-600 hover:bg-rose-700 focus:outline-none focus:shadow-outline-purple">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    {{$zoneWereda->links()}}
    

        </main>
      </div>
    </div>
  </body>
</html>