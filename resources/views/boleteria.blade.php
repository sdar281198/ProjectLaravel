<x-head/>
    <div id="maininter">
        <header id="headerinter" class="flex justify-center">
            <x-navsupuser/>
        </header>
        <div id="ticketDivs" class="fullContent">
            <div id="tituloBol" class="mt-10">
                <h1 class="text-center uppercase shadowspecial">Boletería</h1>
            </div>
            <div id="datesPrices">
                <div id="pricesBol">
                    <div id="porFecha" class="flex flex-col justify-around items-center">
                        <div class="tituloPrices flex flex-col justify-center text-center">
                        <p class="uppercase flex flex-col">Interescolar</p>
                        <p class="text-white">Juega 1 fecha</p>
                        </div>
                        <div id="priceTicket" class="text-white text-center price1 relative">
                            <!-- <img src="../img/acertijos/cofre1.png" class="" alt=""> -->
                            <img src="../img/acertijos/brillo.png" class="absolute" alt="">
                        </div>
                        <div id="buyButton">
                            <button><img src="../img/acertijos/buy1.png" class="mx-auto" alt=""></button>
                        </div>
                    </div>
                    <div id="full" class="flex flex-col justify-around items-center">
                    <div class="tituloPrices flex flex-col justify-center text-center">
                        <p class="uppercase flex flex-col">Interescolar Full</p>
                        <p class="text-white">Juega las 16 fechas</p>
                    </div>
                        <div id="priceTicket" class="text-white text-center price2 relative">
                            <!-- <img src="../img/acertijos/cofre2.png" alt=""> -->
                            <img src="../img/acertijos/brillo.png" class="absolute" alt="">
                        </div>
                        <div id="buyButton">
                            <button><img src="../img/acertijos/buy2.png" class="mx-auto" alt=""></button>
                        </div>
                    </div>
                </div>
                <div id="canjear" class="mx-auto">
                    <label for="canjear"></label>
                    <input type="text" name="canjear" placeholder="Canjea tu código" class="uppercase">
                    <button class="text-white uppercase">Aplicar</button>
                </div>
            </div>
        </div>
    </div>
<x-footer/>