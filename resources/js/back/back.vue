<script setup>
import adminSidebar from "./components/adminSidebar.vue";
import adminHeader from "./components/adminHeader.vue"
import { ref } from "vue";
const sidebarClass = ref('hidden');
const collback = ()=>{
    if(sidebarClass.value == 'hidden'){
        sidebarClass.value = 'unhidden'
    }else{
        sidebarClass.value = 'hidden'
    }

}
</script>
<template>
    <div class="flex flex-row">
        <adminSidebar  @close-event = "collback" :class="sidebarClass" class="lg:flex "/>
        <div class="w-full">
            <adminHeader @close-event = "collback"/>

            <router-view/>
        </div>
    </div>
</template>