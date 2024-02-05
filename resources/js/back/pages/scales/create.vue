<script setup>
import name from "../components/name.vue"
import axios from "axios"
import { ref, onMounted } from "vue";
import { useLocalStorage } from "@vueuse/core";

// const title = ref('');
// const content = ref('');
// const info = ref('');
// const imageUpload = ref(null);
// const suc = ref('');
// const fail = ref('');

// const formData = new FormData();

// const selectImage =()=>{
//     const selectedImage = imageUpload.value.files[0];
//     if(selectedImage){
//         formData.append('image', selectedImage);
//     }
// }

// const post = ()=>{
//     formData.append('title',title.value);
//     formData.append('content', content.value);
//     formData.append('info', info.value);
//     axios.post('./api/news/store',formData).then(res=>{
//         suc.value = res.data.message;
//     }).catch(res=>{
//         fail.value = res.data;
//     })
//}

</script>
<template>
    <name name="Scale table"/>
    <div class="bg-gray-100 pt-16 p-56">    
        <div class="border-2  bg-white border-gray-300 shadow-lg max-w-4xl mx-auto rounded shadow-gray-100">
            <div class="w-full  bg-white rounded-lg   md:mt-0 xl:p-0 ">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-lg  text-sky-700 leading-tight tracking-wide">Please take a moment to fill </h1>
                    <form class="mb-6">
                        
                        <div class="mb-6">
                                <label for="info" class="block mb-2 text-sm font-medium text-gray-900">scale name</label>
                                <input type="text" id="info" v-model="info" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                    placeholder=" enter scale name.">
                            </div>
                            <div class="mb-6">
                                <label for="value" class="block mb-2 text-sm font-medium text-gray-900">value</label>
                                <input type="text" id="value" v-model="value" rows="4"
                                    class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                    placeholder=" enter value">
                            </div>
                        
                            <div class=" flex mb-6">
                                <input type="checkbox" id="status" v-model="status" rows="4"
                                    class="flex p-2.5 w-5 text-sm text-gray-900 bg-gray-50 rounded-s-md border border-gray-300 focus:ring-blue-500 focus:border-blue-500 outline-none"
                                    placeholder="status">
                                <label for="status" class="flex ml-6 mt-2   mb-2 text-sm font-medium text-gray-900">status</label>
                              
                            </div>
                            <div class=" flex justify-end">
                                <router-link to="/dashbord">  <button  type="submit"
                            class=" text-white bg-blue-700 hover:bg-blue-800 w-28 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 ">add 
                            </button> </router-link>
                               
                            </div>
                        
                </form>
            </div>
        </div>
    </div>
    </div>
</template>

