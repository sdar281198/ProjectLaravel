<x-head/>
<div id="doneall" class="h-screen flex flex-col items-center" style="background-image: url(../img/race/fondoesf.png);">
    <div id="donecontent" class="flex flex-col items-center">
        <div id="calavera">
            <img src="../img/race/calavera.png" alt="">
        </div>
        <div id="donemsg">
            <p class="uppercase text-center">¡Lo lograste!</p>
        </div>
        <div id="donehour">
            <p class="text-white uppercase text-center">Tiempo</p>
            <div id="time" class="flex justify-center items-center">
                <p class="text-white">23:59:59</p>
            </div>
        </div>
        <div id="donetable">
            <p class="uppercase text-center rank">Ranking</p>
            <table id="doneTable">
                <tr class="flex justify-around">
                    <th class="uppercase text-white">Nombre</th>
                    <th class="uppercase text-white">Tiempo</th>
                </tr>
                <tr class="trInfo flex justify-around">
                    <td class="text-white text-center flex items-center justify-center">
                        <!-- <img src="../img/race/estrella.png" class="" alt=""> -->
                        <p>Nombre</p>
                    </td>
                    <td class="text-white text-center flex items-center justify-center">0.12</td>
                </tr>
            </table>
        </div>
        <div id="doneTableBut">
                <img src="../img/acertijos/BOTONSIGUIENTE-07.png" alt="">
        </div>
    </div>
</div>
<x-footer/>