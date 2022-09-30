<x-head/>
    <div id="maininter">
        <header id="headerinter" class="flex justify-center">
            <x-navsupuser/>
        </header>
        <div id="schoolAndRanking" class="flex mx-auto mt-10 justify-between relative">
        <x-toggle/>
            <div id="school" class="flex flex-col coleg">
                <div id="userAndName" class="flex items-center justify-between my-auto mx-auto">
                    <div id="user">
                        <img src="../img/inter/usuario-04.png" alt=""> 
                    </div>
                    <div id="downarrow">
                        <i id="flechadown" class="fa-solid fa-arrow-down cursor-pointer"></i>
                        <i id="flechaup" class="fa-solid fa-arrow-up cursor-pointer dissapear"></i>
                    </div>
                </div>
                <div id="schoolpicandname" class="flex flex-col justify-center items-center dissapear">
                    <div id="pic">
                    </div>
                    <p id="name" class="uppercase">Colegio ABC</p>
                </div>
                <div id="position" class="flex flex-col justify-center dissapear">
                    <span class="flex justify-center">
                        <p class="self-center">2do</p>
                        <!-- <img src="../img/inter/copa.png" alt=""> -->
                    </span>
                    <p class="text-center uppercase bold puesto">puesto</p>
                </div>
                <div id="rankingside" class="flex flex-col justify-center dissapear">
                    <img src="../img/inter/CALAVERA-04.png" alt="" class="mx-auto">
                    <p class="text-center uppercase">Tabla de posiciones</p>
                </div>
                <div id="points" class="flex flex-col justify-center text-center uppercase dissapear">
                    <p>Interescolar 2022</p>
                    <p>1150</p>
                    <p>puntos acumulados</p>
                </div>
            </div>
            <div id="ranking">
                <!-- <div class="pagenumbers" id="pagination"></div>
                <div class="list" id="list"></div> -->
                <div class="containerdate">
                    <div class="tabs mx-auto">
                        <div class="previous buttons box flex items-center justify-center">
                            <i class="fa-solid fa-caret-left"></i>
                        </div>
                        <!-- <div class="contentTabs"> -->
                        <div id="fecha1" class="fecha tab">Fecha 1</div>
                        <div id="fecha2" class="fecha tab">Fecha 2</div>
                        <div id="fecha3" class="fecha tab">Fecha 3</div>
                        <div id="fecha4" class="fecha tab">Fecha 4</div>
                        <div id="fecha5" class="fecha tab">Fecha 5</div>
                        <div class="next buttons flex items-center justify-center">
                            <i class="fa-solid fa-caret-right"></i>
                        </div>
                    </div>
                    <div class="contents">
                        <div id="fecha1" class="content fecha">
                            <div id="progressWithouthRiddle">
                                <div id="tituloFechas" class="mx-auto">
                                    <p class="uppercase shadowspecial text-center">interescolar <span class="paytone">2022</span></p>
                                </div>
                            </div>
                            <div id="tabsGeneralContainer">
                            <div id="tabsTable">
                                <div id="globalTable" class="tabrank tabrankActive">
                                    Global
                                </div>
                                <div id="personalTable" class="tabrank">
                                    Personal
                                </div>
                            </div>
                            <div id="contentTables" class="mx-auto">
                                <div id="globalTableContainer" class="contentRank">
                                <table id="rankTable" class="">
                                    <tr class="trIndice">
                                        <th class="uppercase">Colegio</th>
                                        <th class="uppercase">Acertijos</th>
                                        <th class="uppercase">Puntos</th>
                                    </tr>
                                    <tr class="trDato">
                                        <td class="flex">
                                            <p>1.</p>
                                            <img src="" alt="">
                                            <p>Colegio A</p>
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                    <tr class="trDato">
                                        <td class="flex">
                                            <p>2.</p>
                                            <img src="" alt="">
                                            <p>Colegio A</p>
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                    <tr class="trDato">
                                        <td class="flex">
                                            <p>3.</p>
                                            <img src="" alt="">
                                            <p>Colegio A</p>
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                    <tr class="trDato">
                                        <td class="flex">
                                            <p>4.</p>
                                            <img src="" alt="">
                                            <p>Colegio A</p>
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                </table>
                                </div>
                                <div id="personalTableContainer" class="contentRank">
                                <table id="rankTable" class="">
                                    <tr class="trIndice">
                                        <th class="uppercase">Participante</th>
                                        <th class="uppercase">Acertijos</th>
                                        <th class="uppercase">Puntos</th>
                                    </tr>
                                    <tr class="trDato">
                                        <td class="flex">
                                            <p>1.</p>
                                            <!-- <img src="" alt=""> -->
                                            <p>Alumno A</p>
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                    <tr class="trDato">
                                        <td class="flex">
                                            <p>2.</p>
                                            <!-- <img src="" alt=""> -->
                                            <p>Alumno A</p>
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                    <tr class="trDato">
                                        <td class="flex">
                                            <p>3.</p>
                                            <!-- <img src="" alt=""> -->
                                            <p>Alumno A</p>
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                    <tr class="trDato">
                                        <td class="flex">
                                            <p>4.</p>
                                            <!-- <img src="" alt=""> -->
                                            <p>Alumno A</p>
                                        </td>
                                        <td>
                                            12
                                        </td>
                                        <td>
                                            12
                                        </td>
                                    </tr>
                                </table>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div id="fecha2" class="content fecha">
                            <div id="progress">
                                <div id="tituloFechas" class="mx-auto">
                                    <p><img src="../img/inter/NOMBRE-04.png" alt="" class="mx-auto"></p>
                                    <p class="text-center uppercase">Puntos de la fecha</p>
                                    <p class="text-center">850</p>
                                </div>
                                <div id="bar" class="text-center">
                                    <div id="progressBar" class="flex justify-center items-center">
                                        8/12
                                    </div>
                                </div>
                                <!-- <div id="datedur">
                                    <p>La competencia comienza en x días y x horas.</p>
                                </div> -->
                            </div>
                            <div id="racesInter">
                            <div class="raceInter relative flex flex-col justify-center items-center" style="background-image: url(./../img/inter/fondo1.png);">
                                <div class="position absolute">1</div>
                                <div class="hour flex">
                                    <div id="symbolandHour" class="flex">
                                        <img class="" src="../img/inter/reloj de arena-04.png" alt="">
                                        <div id="watch">00:00:49</div>
                                    </div>
                                </div>
                                <div class="botonRace">
                                    <a href=""><img src="../img/inter/botonjugar.png" alt=""></a>
                                </div>
                                <div id="raceLocked" class="flex justify-center items-center">
                                    <img src="../img/classic/CANDADO.png" alt="">
                                </div>
                            </div>
                            <div class="raceInter relative flex flex-col justify-center items-center" style="background-image: url(./../img/inter/fondo2.png);">
                                <div class="position absolute">2</div>
                                <div class="hour flex">
                                    <div id="symbolandHour" class="flex">
                                        <img class="" src="../img/inter/banderas-04.png" alt="">
                                        <div id="watch">18:05</div>
                                    </div>
                                </div>
                                <div class="botonRace">
                                    <a href=""><img src="../img/inter/botonjugar.png" alt=""></a>
                                </div>
                            </div>
                            <div class="raceInter relative flex flex-col justify-center items-center" style="background-image: url(./../img/inter/fondo3.png);">
                                <div class="position absolute">3</div>
                                <div class="hour flex">
                                    <div id="symbolandHour" class="flex">
                                            <img class="" src="../img/inter/banderas-04.png" alt="">
                                            <div id="watch">18:10</div>
                                    </div>
                                </div>
                                <div class="botonRace">
                                    <a href=""><img src="../img/inter/botonjugar.png" alt=""></a>
                                </div>
                            </div>
                            <div class="raceInter relative flex flex-col justify-center items-center" style="background-image: url(./../img/inter/fondo4.png);">
                                <div class="position absolute">4</div>
                                <div class="hour flex">
                                    <div id="symbolandHour" class="flex">
                                            <img class="" src="../img/inter/banderas-04.png" alt="">
                                            <div id="watch">18:15</div>
                                    </div>
                                </div>
                                <div class="botonRace">
                                    <a href=""><img src="../img/inter/botonjugar.png" alt=""></a>
                                </div>
                            </div>
                            <div class="raceInter relative flex flex-col justify-center items-center" style="background-image: url(./../img/inter/fondo5.png);">
                                <div class="position absolute">5</div>
                                <div class="hour flex">
                                    <div id="symbolandHour" class="flex">
                                            <img class="" src="../img/inter/banderas-04.png" alt="">
                                            <div id="watch">18:20</div>
                                    </div>
                                </div>
                                <div class="botonRace">
                                    <a href=""><img src="../img/inter/botonjugar.png" alt=""></a>
                                </div>
                            </div>
                            <div class="raceInter relative flex flex-col justify-center items-center" style="background-image: url(./../img/inter/fondo6.png);">
                                <div class="position absolute">6</div>
                                <div class="hour flex">
                                <div id="symbolandHour" class="flex">
                                            <img class="" src="../img/inter/banderas-04.png" alt="">
                                            <div id="watch">18:25</div>
                                    </div>
                                </div>
                                <div class="botonRace">
                                    <a href=""><img src="../img/inter/botonjugar.png" alt=""></a>
                                </div>
                            </div>
                            <div class="raceInter relative flex flex-col justify-center items-center" style="background-image: url(./../img/inter/fondo1.png);">
                                <div class="position absolute">7</div>
                                <div class="hour flex">
                                <div id="symbolandHour" class="flex">
                                            <img class="" src="../img/inter/banderas-04.png" alt="">
                                            <div id="watch">18:30</div>
                                    </div>
                                </div>
                                <div class="botonRace">
                                    <a href=""><img src="../img/inter/botonjugar.png" alt=""></a>
                                </div>
                            </div>
                            <div class="raceInter relative flex flex-col justify-center items-center" style="background-image: url(./../img/inter/fondo2.png);">
                                <div class="position absolute">8</div>
                                <div class="hour flex">
                                <div id="symbolandHour" class="flex">
                                            <img class="" src="../img/inter/banderas-04.png" alt="">
                                            <div id="watch">18:35</div>
                                    </div>
                                </div>
                                <div class="botonRace">
                                    <a href=""><img src="../img/inter/botonjugar.png" alt=""></a>
                                </div>
                            </div>
                            <div class="raceInter relative flex flex-col justify-center items-center" style="background-image: url(./../img/inter/fondo3.png);">
                                <div class="position absolute">9</div>
                                <div class="hour flex">
                                <div id="symbolandHour" class="flex">
                                            <img class="" src="../img/inter/banderas-04.png" alt="">
                                            <div id="watch">18:40</div>
                                    </div>
                                </div>
                                <div class="botonRace">
                                    <a href=""><img src="../img/inter/botonjugar.png" alt=""></a>
                                </div>
                            </div>
                            <div class="raceInter relative flex flex-col justify-center items-center" style="background-image: url(./../img/inter/fondo4.png);">
                                <div class="position absolute">10</div>
                                <div class="hour flex">
                                <div id="symbolandHour" class="flex">
                                            <img class="" src="../img/inter/banderas-04.png" alt="">
                                            <div id="watch">18:45</div>
                                    </div>
                                </div>
                                <div class="botonRace">
                                    <a href=""><img src="../img/inter/botonjugar.png" alt=""></a>
                                </div>
                            </div>
                            <div class="raceInter relative flex flex-col justify-center items-center" style="background-image: url(./../img/inter/fondo5.png);">
                                <div class="position absolute">11</div>
                                <div class="hour flex">
                                <div id="symbolandHour" class="flex">
                                            <img class="" src="../img/inter/banderas-04.png" alt="">
                                            <div id="watch">18:50</div>
                                    </div>
                                </div>
                                <div class="botonRace">
                                    <a href=""><img src="../img/inter/botonjugar.png" alt=""></a>
                                </div>
                            </div>
                            <div class="raceInter relative flex flex-col justify-center items-center" style="background-image: url(./../img/inter/fondo6.png);">
                                <div class="position absolute">12</div>
                                <div class="hour flex">
                                <div id="symbolandHour" class="flex">
                                            <img class="" src="../img/inter/banderas-04.png" alt="">
                                            <div id="watch">18:55</div>
                                    </div>
                                </div>
                                <div class="botonRace">
                                    <a href=""><img src="../img/inter/botonjugar.png" alt=""></a>
                                </div>
                            </div>
                            </div>
                        </div>
                        <div id="fecha3" class="content fecha">3</div>
                        <div id="fecha4" class="content fecha">4</div>
                        <div id="fecha5" class="content fecha">5</div>
                    </div>
                </div>
            </div>  
        </div>
    </div>
<x-footer/>