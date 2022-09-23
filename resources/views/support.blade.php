<x-head/>
    <div id="maininter">
        <header id="headerinter" class="flex justify-center">
            <x-nav/>
        </header>
        <div id="supportContent" class="fullContent">
            <div id="supportElements" class="mx-auto flex flex-col">
                <div id="supportTitle" class="text-center mt-5">
                    <p class="uppercase shadowspecial">Soporte</p>
                </div>
                <div id="supportInfo" class="flex flex-col justify-between">
                    <div id="supportInfTit">
                        <p class="text-white uppercase">CONTÁCTANOS</p>
                    </div>
                    <div id="support2info" class="flex flex-col justify-around">
                        <div id="mail" class="flex items-center">
                            <i class="fa-solid fa-envelope text-white"></i>
                            <p class="text-white">contacto@thorlat.com</p>
                        </div>
                        <div id="phone" class="flex items-center">
                            <i class="fa-solid fa-phone text-white"></i>
                            <p class="text-white">987654321</p>
                        </div>
                    </div>  
                </div>
                <div id="supportForm" class="flex flex-col justify-around">
                    <p class="text-white uppercase">ENVÍANOS UN MENSAJE</p>
                    <form action="" class="mx-auto flex flex-col justify-around">
                        <div class="inpt flex justify-center">
                            <label for="nameandlast"></label>
                            <input type="text" name="nameandlast" placeholder="Nombres y apellidos">
                        </div>
                        <div class="inpt flex justify-center">
                            <label for="email"></label>
                            <input type="text" name="email" placeholder="Correo electrónico">
                        </div>
                        <div class="inpt flex justify-center">
                            <label for="msj"></label>
                            <textarea id="msje" name="msj" placeholder="Mensaje"></textarea>
                        </div>
                        <div id="supportButton" class="flex justify-center">
                            <button class="text-white uppercase">Enviar</button>
                        </div>
                    </form>
                </div>
                <div id="supportNet">
                    <p class="text-white uppercase">Nuestras redes</p>
                    <ul class="flex text-white justify-around items-center">
                        <li class=""><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                        <li class=""><a href=""><i class="fa-brands fa-facebook-f"></i></a></li>
                        <li class=""><a href=""><i class="fa-brands fa-tiktok"></i></a></li>
                        <li class=""><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<x-footer/>