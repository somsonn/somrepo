
@include('admin.header');

@if($showcapitalcity)
            <div class="  mx-auto md:ml-24 bg-white rounded-lg w-4/5 sm:w-1/3 lg:w-1/4  shadow">
            <div class="bg-blue-600">
                <h1 class="text-center p-3 font-extrabold text-xl text-white tracking-widest uppercase">Add new Capital_City</h1>
            </div>
            
            <form action="{{ route('city.update') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id"  value="{{ $city->id }}">
    <div class="px-5 pb-5 m-4">
        <input type="text" name="city" placeholder="city to be registered" value="{{ $city->city_name }}"  id="cityy" class="block my-5 w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <input type="text" name="low" placeholder="low value" id="low" value="{{ $city->low }}" class="block my-5 w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <input type="text" name="medium" placeholder="medium value" value="{{ $city->medium }}" id="medium" class="block my-5 w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <input type="text" name="high" placeholder="high value" value="{{ $city->high }}" id="high" class="block my-5 w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <div class="flex items-center pt-3">
            <input type="checkbox" id="check" name="check" class="w-4 h-4 text-black bg-gray-300 border-none rounded-md focus:ring-transparent">
            <label for="check" class="block ml-2 text-sm text-gray-900">የበረሃ አበል አለው?</label>
        </div>
    </div>
    <hr class="mt-4">
    <div class="flex flex-row-reverse p-3">
        <div class="flex-initial pl-3">
            <button  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                <span class="pl-2 mx-1">update CapitalCity</span>
            </button>
        </div>
    </div>
</form>
        </div>

@endif


        



        @if($showzone)
        
            <div class="  mx-auto md:ml-24 bg-white rounded-lg w-4/5 sm:w-1/3 lg:w-1/4  shadow">
            <div class="bg-blue-600">
                <h1 class="text-center p-3 font-extrabold text-xl text-white tracking-widest uppercase">edit zone or Wereda</h1>
            </div>
            
            <form action="{{route('updatezone_wereda.update')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="id"  value="{{ $city->id }}">
    <div class="px-5 pb-5 m-4">
        <input type="text" name="name" placeholder="city to be registered" value="{{ $city->name }}"  id="cityy" class="block my-5 w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <input type="text" name="level" placeholder="low value" id="low" value="{{ $city->level }}" class="block my-5 w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <input type="text" name="region" placeholder="medium value" value="{{ $city->region }}" id="medium" class="block my-5 w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        <div class="flex items-center pt-3">
            <input type="checkbox" id="check" name="check" class="w-4 h-4 text-black bg-gray-300 border-none rounded-md focus:ring-transparent">
            <label for="check" class="block ml-2 text-sm text-gray-900">የበረሃ አበል አለው?</label>
        </div>
    </div>
    <hr class="mt-4">
    <div class="flex flex-row-reverse p-3">
        <div class="flex-initial pl-3">
            <button  class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                <span class="pl-2 mx-1">update zone or Wereda</span>
            </button>
        </div>
    </div>
</form>
        </div>


        @endif
        

        <!-- table -->
        </div>

        
    </div>

</div>
</body>
</html>