

@include('admin.header')



<div class="flex justify-center gap-8">
           <div class="bg-white rounded-lg shadow-lg p-4">
            <form id="my-form" method="POST" action="" enctype="multipart/form-data">
            @csrf
                <label class="text-center font-bold text-blue-500 text-2xl  tracking-widest" for="">Capitalcity Excel</label>
            <div class="flex-initial mt-5 ">
                  <a href="{{route('download-excel')}}" type="submit" name="submit" id="submit" class="px-4 py-2  font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                     <span class="text-lg">downloadExcel</span>
</a>
               </div>

            </form>
        </div>


        
            <div class="bg-white rounded-lg p-4 shadow-lg">
            <form id="my-form" method="POST" action="{{route('upload_excel')}}" enctype="multipart/form-data">
            @csrf
           
                <label class="text-center font-bold text-blue-500 text-2xl  tracking-widest" for="">capital city Excel</label>
               <input input type="file" name="file" accept=".xls,.xlsx"  class="block my-5 w-full px-2 text-bold rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-blue-400 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            <div class="flex-initial justify-center ">
                  <button type="submit" name="submit" id="submit" class="px-4 py-2  font-medium leading-5 text-white transition-colors duration-150 bg-blue-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                     <span class="text-lg">upload</span>
                  </button>
               </div>

            </form>
        </div>
</div>
        
</div>
</body>
</html>