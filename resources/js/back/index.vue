<script setup> 
import card from "./components/card.vue"
import name from "./components/name.vue"
</script>

<template>
    <div class="bg-gray-100">
        <name name="Dashbord"/>
        <div class="grid grid-cols-3  gap-4 m-8 "> 
            <card/>
            <card/>
            <card/>
        </div>
        <div class="m-4 rounded">
            <div class="w-full bg-white border-b-2 rounded border-gray-200 flex flex-row justify-between">
                <h1 class="font-bold text-gray-500 text-lg p-4 ">scales table</h1>
                <router-link to="/scales" class="w-24 text-white bg-sky-700 hover:bg-sky-800 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 m-4 text-center ">Add</router-link>
            </div>

            <!-- table start here -->
            <div class="flex bg-white flex-col items-center justify-center">

            <div class=" w-full  relative p-2 overflow-x-auto shadow-md sm:rounded-lg xs:p-5">
              <div class="flex flex-column sm:flex-row flex-wrap space-y-4 sm:space-y-0 items-center justify-between pb-4">
                <div>

                  <select name="time" id="time" class="outline-none focus:bg-gray-300 text-sm text-gray-700 hover:bg-gray-300">
                    <option value="1-month" class="hover:bg-slate-500">last 30 days</option>
                    <option value="3-months">3 months</option>
                    <option value="6-months">6 months</option>
                    <option value="1-year">1 year</option>
                  </select>
                </div>
                <label for="table-search" class="sr-only">Search</label>
                <div class="relative">
                  <div class="absolute inset-y-0 left-0 rtl:inset-r-0 rtl:right-0 flex items-center ps-3 pointer-events-none">
                    <i class="fa-solid fa-magnifying-glass"></i>
                  </div>
                  <input type="text" id="table-search" class="block p-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-sky-500 focus:border-sky-500 outline-none" placeholder="Search for items">
                </div>
              </div>
              <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                  <tr>
                    <th scope="col" class="p-4">
                      <div class="flex items-center">
                        <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-sky-500 focus:ring-2 ">
                        <label for="checkbox-all-search" class="sr-only">checkbox</label>
                      </div>
                    </th>
                    <th scope="col" class="px-6 py-3">
                          news no,
                     </th>
                    <th scope="col" class="px-6 py-3">
                      News title
                    </th>
                    <th scope="col" class="px-6 py-3">
                      News content
                    </th>
                    <th scope="col" class="px-6 py-3">
                      News created_at
                    </th>
                    <th scope="col" class="px-6 py-3">
                      Edit
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4">
                      <div class="flex items-center">
                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                      </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      1
                    </th>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                  </tr>
                  <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4">
                      <div class="flex items-center">
                        <input id="checkbox-table-search-2" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500focus:ring-2 ">
                        <label for="checkbox-table-search-2" class="sr-only">checkbox</label>
                      </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      2
                    </th>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                  </tr>
                  <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4">
                      <div class="flex items-center">
                        <input id="checkbox-table-search-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                        <label for="checkbox-table-search-3" class="sr-only">checkbox</label>
                      </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      3
                    </th>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                  </tr>
                  <tr class="bg-white border-b  hover:bg-gray-50">
                    <td class="w-4 p-4">
                      <div class="flex items-center">
                        <input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="checkbox-table-3" class="sr-only">checkbox</label>
                      </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      4
                    </th>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                  </tr>
                  <tr class="bg-white border-b hover:bg-gray-50">
                    <td class="w-4 p-4">
                      <div class="flex items-center">
                        <input id="checkbox-table-3" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500focus:ring-2">
                        <label for="checkbox-table-3" class="sr-only">checkbox</label>
                      </div>
                    </td>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                      5
                    </th>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      Kombolcha
                    </td>
                    <td class="px-6 py-4">
                      <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                  </tr>

                </tbody>
              </table>

            </div>
          </div>
        </div>
    </div>
</template>