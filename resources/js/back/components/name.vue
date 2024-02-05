<script setup>

const props = defineProps({
    name: '',
})

</script>
<template>
    <div class="w-full bg-white font-roboto font-bold border-b-2 border-gray-200 shadow-sm">
        <h1 class="text-4xl text-darkblue font-extrabold  p-6">{{ name }}</h1>
    </div>
</template>