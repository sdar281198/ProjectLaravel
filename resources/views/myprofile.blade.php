<x-head/>
<div id="maininter">
        <header id="headerinter" class="flex justify-center">
            <x-navsupuser/>
        </header>
<div id="profilecontent" class="flex flex-col">
        <h1 class="text-center"><img class="mx-auto" src="../img/landing/MI-PERFIL}.PNG" alt=""></h1>
        <div id="formprof" class="container mx-auto mb-5">
        <p class="text-center text-white mt-5 mb-5">Elige tu avatar</p>
            <div id="circles" class="flex items-center">
                <div class="contCirc flex">
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <!-- </div>
                    <div class="contCirc flex grow justify-around"> -->
                    <div class="circle"></div>
                    <div class="circle"></div>
                    <!-- </div>
                    <div class="contCirc flex grow justify-around"> -->
                    <div class="circle"></div>
                    <!-- <div class="circle"></div> -->
                </div>
            </div>
        </div>
        <form id="formProfile" class="mx-auto mt-5">
            <div class="mx-auto form-container">
                <input class="container rounded" placeholder="Usuario" type="text">
                <div id="nameandlast" class="flex justify-between">
                    <input class="rounded" type="text" placeholder="Nombre">
                    <input class="rounded" type="text" placeholder="Apellidos">
                </div>
                <input class="container rounded" placeholder="Correo" type="text">
                <input class="container rounded" placeholder="Colegio" type="text">
            </div>
            <div class="mx-auto" id="changepass">
                <p class="text-white">Cambiar contraseña</p>
                <input class="container rounded" placeholder="Contraseña actual" type="text">
                <input class="container rounded" placeholder="Nueva contraseña" type="text">
                <input class="container rounded" placeholder="Repite tu nueva contraseña" type="text">
            </div>
            <div id="profileButtons" class="flex flex-col justify-around items-center">
                <button>Guardar cambios</button>
                <button>Cerrar sesion</button>
            </div>
        </form>
</div>
<x-footer/>