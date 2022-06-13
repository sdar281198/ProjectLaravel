    <!--  -->
    <x-head/>
    <div id="mainlog">
    <header id="headerLog" class="flex justify-center">
    <x-nav/>
    </header>
    <div id="login" class="mt-20">
    <form id="formlog" class="flex flex-col justify-center items-center mb-20" action="">
        <img clas="" src="../img/CALAVERA-08.png" id="logolog">
        <h2 class="my-8 font-bold text-3xl text-white text-center">Inicia sesion</h2>
        <div class="loginin">
            <i class="symbol fa fa-user text-primarycolor text-xl"></i>
            <input type="text" placeholder="Usuario/Email" class="p-2 outline-none rounded text-center">
        </div>
        <div class="loginin mt-8">
            <i class="symbol fa fa-lock text-primarycolor text-xl"></i>
            <input type="password" placeholder="contraseña" class="p-2 outline-none rounded text-center">
        </div>
        <button href="#" id="loginboton" class="p-2 rounded-xl font-bold uppercase text-lg mt-4 transform hover:translate-y-1 transition-all duration-500">
            <img src="../img/BOTON INICIAR SESION-07.png" alt="">
        </button>
        <a href="#" class="mt-4 text-white underline" style="font-family:var(--latinaBold);">Olvidaste tu contraseña</a>
        <div class="mt-10" style="width:38%;">
            <p class="grid titulo text-center mt-2 text-white" style="font-family:var(--latinaBold);">o inicia sesion con</p>
        </div>
        <div id="redeslog" class="mx-auto mt-4 flex justify-between">
            <a class="with text-center border p-2" href=""><i class="font-bold fa-brands fa-facebook-f"></i></a>
            <a class="with text-center border p-2" href=""><i class="font-bold fa-brands fa-google"></i></a>
        </div>
        <div class="flex justify-center container">
            <button id="createlog" class="mx-auto mt-5 text-white p-4" type="button"><a href="/register" class="block">Crea una cuenta</a></button>
        </div>
    </form>
    <div>
    </div>
    <x-footer/>
