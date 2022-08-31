<x-head/>
    <div id="mainmail" class="container">
        <header id="headermail" class="flex justify-center">
            <x-nav/>
        </header>
        <div id="contentmail" class="flex flex-col justify-center items-center mt-10">
            <img class="cursor-pointer" src="../img/landing/calavera-08.png" id="logolog">

            <div id="mail">
                <p class="text-center text-white mail">correo@correo.com</p>
                <p class="text-center text-white frasemail">Ingresa a tu correo para completar el registro</p>
            </div>
            <div id="dontreceive" class="mt-10">
                <p class="text-center text-white flex flex-col">¿No recibiste el correo?</p>
                <div id="buttonsreceive" class="flex items-center mx-auto justify-center">
                    <a href="" class=""><img src="../img/landing/BOTON ENVIAR DE NUEVO-07.png" alt=""></a>
                    <a href="" class="text-end end text-white changebut italic bold">Cambiar correo</a>
                </div>
            </div>
            <div id="netbuttons" class="mt-10">
                <p class="grid titulo text-center mt-2 text-white" style="font-family:var(--latinaBold);">o registrate con</p>
            </div>
            <div id="redesbuttons" class="mx-auto mt-4 flex justify-between">
                <a class="with text-center border p-2" href=""><i class="font-bold fa-brands fa-facebook-f"></i></a>
                <a class="with text-center border p-2" href=""><i class="font-bold fa-brands fa-google"></i></a>
            </div>
        </div>
    </div>
    <x-footer/>