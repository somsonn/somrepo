<script setup>
const emit = defineEmits(['closeEvent']);
const handleevent = ()=>{
    emit('closeEvent');
}

</script>

<template>
   <div class="w-full border-gray-200 border-2 shadow-lg shadow-gray-200">
                  <div class="cursor-pointer p-4 flex flex-row justify-between" >
                    <div class="w-full  justify-end h-fit">
                        <i @click.prevent="handleevent" class="material-icons lg:hidden  text-white-500 m-2 w-20 align-middle">menu</i>
                    </div>
                    <div class="flex items-center justify-end" >
                    <img src="SEW.jpg" class="h-12 w-12 m-2 object-cover borde-2 border-sky-800 rounded-full " alt="">
                    <div class=" text-center border-l-2 font-bold text-sky-800 border-gray-200 p-2">
                      <span class="text-center "> <h1>som@gmail.com</h1> </span>
                       <span class="text-center  text-black-600"><h1>admin</h1></span>
                     </div>
                     <div class=" text-center  hover:bg-gray-200 rounde">
                          <i class="material-icons text-white-500 m-2">arrow_drop_down</i>
                         </div>
                  </div>
                  </div>
                </div>
</template>
