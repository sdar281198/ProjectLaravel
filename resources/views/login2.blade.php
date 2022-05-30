    <!--  -->
    <x-guest-layout>
    <div class="mt-20">
    <form class="flex flex-col justify-center items-center mb-20" action="">
        <img clas="h-5" src="./img/logo.png" id="logo">
        <h2 class="my-8 font-bold text-3xl text-white text-center">Inicia sesion</h2>
        <div class="relative loginin">
            <i class="symbol fa fa-user absolute text-primarycolor text-xl"></i>
            <input type="text" placeholder="Usuario/Email" class="p-2 outline-none rounded text-center">
        </div>
        <div class="relative loginin mt-8">
            <i class="symbol fa fa-lock absolute text-primarycolor text-xl"></i>
            <input type="password" placeholder="contraseña" class="p-2 outline-none rounded text-center">
        </div>
        <button href="#" id="loginboton" class="p-2 rounded-xl font-bold uppercase text-lg mt-4 transform hover:translate-y-1 transition-all duration-500">Iniciar sesion</button>
        <a href="#" class="mt-4 text-white">¿Olvidaste tu contraseña?</a>
        <div class="mt-4" style="width:38%;">
            <p class="grid titulo text-center mt-2 text-white">o inicia sesion con</p>
        </div>
        <div id="redeslog" class="mx-auto mt-4 flex justify-between">
            <a class="with text-center border p-2" href=""><i class="font-bold fa-brands fa-facebook-f"></i></a>
            <a class="with text-center border p-2" href=""><i class="font-bold fa-brands fa-google"></i></a>
        </div>
    </form>
    <div>
</x-guest-layout>