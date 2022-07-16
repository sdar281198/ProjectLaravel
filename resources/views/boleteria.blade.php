<x-head/>
    <div id="maininter">
        <header id="headerinter" class="flex justify-center">
            <x-navsupuser/>
        </header>
        <div id="ticketDivs">
            <div id="tituloBol" class="mt-10">
                <h1 class="text-center uppercase">Boletería</h1>
            </div>
            <div id="datesPrices">
                <div id="pricesBol">
                    <div id="porFecha" class="flex flex-col justify-around items-center">
                        <div class="tituloPrices flex flex-col justify-center text-center">
                        <p class="uppercase flex flex-col">Ticket <span>por fecha</span></p>
                        <p class="text-white">Pago por día</p>
                        </div>
                        <div id="priceTicket" class="text-white text-center">
                            <p>S/ 4.00</p>
                        </div>
                        <div id="buyButton">
                            <button><img src="../img/inter/comprar-07.png" alt=""></button>
                        </div>
                    </div>
                    <div id="full" class="flex flex-col justify-around items-center">
                    <div class="tituloPrices flex flex-col justify-center text-center">
                        <p class="uppercase flex flex-col">Ticket <span>Full</span></p>
                        <p class="text-white">Pago por las 16 fechas</p>
                    </div>
                        <div id="priceTicket" class="text-white text-center">
                            <p>S/ 25.00</p>
                        </div>
                        <div id="buyButton">
                            <button><img src="../img/inter/comprar-07.png" alt=""></button>
                        </div>
                    </div>
                </div>
                <div id="canjear">
                    <label for="canjear"></label>
                    <input type="text" name="canjear" placeholder="Canjea tu código" class="uppercase">
                    <button class="text-white uppercase">Aplicar</button>
                </div>
            </div>
        </div>
    </div>
<x-footer/>