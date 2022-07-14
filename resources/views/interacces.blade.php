<x-head/>
    <div id="maininteracces">
        <header id="headerinter" class="flex justify-center">
            <x-navsupuser/>
        </header>
        <div id="interAccesForm" class="flex flex-col justify-center mx-auto">
            <div id="interAccesBack" class="mx-auto flex flex-col justify-center">
                <div id="imgacces" class="flex mx-auto">
                    <img src="../img/landing/calavera-08.png" class="mx-auto" alt="">
                </div>
                <div id="schoolandyear" class="flex flex-col mx-auto justify-center">
                    <div id="selects" class="flex justify-between">
                        <select id="schoolSelect">
                            <option disabled selected>Colegio</option>
                        </select>
                        <select id="yearSelect">
                            <option disabled selected>Año</option>
                        </select>
                    </div>
                    <label for="codeAcces"></label>
                    <input type="text" placeholder="Si tienes un código ingresalo aqui">
                    <div id="inviteText">
                        <p>Si eres invitado haz <a href="" class="bold">click aqui</a></p>
                    </div>
                    <div id="interAccesButton" class="mx-auto">
                        <button>
                            <img src="../img/landing/BOTON INGRESAR-07.png" alt="">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <x-footer/>