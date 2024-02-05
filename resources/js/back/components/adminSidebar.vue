<script setup>
const emit = defineEmits(['closeEvent']);
const handleevent = () => {
    emit('closeEvent');
}
</script>

<template>
    <div class=" absolute md:relative bg-darkblue block min-h-screen  w-fit  ">
        <div >
            <i @click.prevent="handleevent"  class="material-icons text-white block md:hidden  text-white-500 m-2 w-20 align-middle">menu</i>
        </div>
        <div class=" bg-gray-700 text-cyan-100 w-72 space-y-6 px-4 py-4 relative inset-y-0 left-0 md:relative md:-translate-x-0 transform-translate-x-fulltransition text-center duration-200 ease-out">
            <div class="justify-center  place-content-center px-10">
                <img class="w-20 h-20 rounded-full  max-w-full  object-top brightness-90 mx-auto contrast-125"
                    src="a.jpg" alt="ima"/>
                <span>
                    <h1>Super Admin </h1>
                </span>
                <span>
                    <h2>admin@gmail.com</h2>
                </span>
                <span>
                    <h3>+251943420605</h3>
                </span>
            </div>
            <hr/>
            <nav >
                <a href=""
                    class="  flex items-center  space-x-2 py-3 px-4 group transition duration-200 hover:bg-cyan-700 rounded hover:text-cyan-300">
                    <i class="material-icons text-white">home</i>
                    <span class="text-xl font-semibold text-white px-2">Dashboard</span>
                </a>
                <router-link to="dashbord"  ><a href=""
                    class=" flex items-center  space-x-2 py-3 px-4 group transition duration-200 hover:bg-cyan-700 rounded hover:text-cyan-300">
                    <i class="material-icons text-white">email</i>
                    <span class="text-xl font-semibold text-white px-2">scale</span>
                </a></router-link>
                
                <a href=""
                    class=" flex items-center  space-x-2 py-3 px-4 group transition duration-200 hover:bg-cyan-700 rounded hover:text-cyan-300">
                    <i class="material-icons text-white">newspaper</i>
                    <span class="text-xl font-semibold text-white px-2">city</span>
                </a>
                <a href=""
                    class=" flex items-center  space-x-2 py-3 px-4 group transition duration-200 hover:bg-cyan-700 rounded hover:text-cyan-300">
                    <i class="material-icons text-white">desktop_windows</i>
                      <i class="fas fa-money-bill"></i> <!-- Font Awesome icon for salary -->
                    <span class="text-xl font-semibold text-white px-2">salary</span></a>
                <a href=""
                    class=" flex items-center  space-x-2 py-3 px-4 group transition duration-200 hover:bg-cyan-700 rounded hover:text-cyan-300">
                    <i class="material-icons text-white">settings</i>
                    <span class="text-xl font-semibold text-white px-2">logout</span></a>
                <a href=""
                    class=" flex items-center  space-x-2 py-3 px-4 group transition duration-200 hover:bg-cyan-700 rounded hover:text-cyan-300">
                    <i class="material-icons text-white">account_circle</i>
                    <span class="text-xl font-semibold text-white px-2">Profile</span></a>
            </nav>
        </div>
    </div>
</template>