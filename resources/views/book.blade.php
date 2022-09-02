<x-head/>
    <div id="maininter">
        <header id="headerinter" class="flex justify-center">
            <x-navsupuser/>
        </header>
        <div id="bookContent" class="fullContent">
            <div id="bookTitle" class="mx-auto mt-10">
                <p class="uppercase text-center">Libro de reclamaciones</p>
            </div>
            <div id="formDivBokk" class="mx-auto">
                <form action="" id="formd" class="mx-auto">
                    <div id="firstpart" class="parts">
                        <div class="peoplePresent">
                            <p class="text-white">Datos de la persona que presenta el reclamo</p>
                        </div>
                        <div class="twoinp flex justify-between inps">
                            <div class="inp">
                                <label for="nombres"></label>
                                <input type="text" name="nombres" placeholder="Nombres">
                            </div>
                            <div class="inp">
                                <label for="apellidos"></label>
                                <input type="text" name="apellidos" placeholder="Apellidos">
                            </div>
                        </div>
                        <div class="twoinp flex justify-between inps">
                            <div class="inp">
                                <label for="celular"></label>
                                <input type="text" name="celular" placeholder="Celular">
                            </div>
                            <div class="inp">
                                <label for="dni"></label>
                                <input type="text" name="dni" placeholder="Número de documento">
                            </div>
                        </div>
                        <div class="threeinp flex justify-between inps">
                            <div class="inpt">
                                <label for="Sexo"></label>
                                <input type="text" name="sexo" placeholder="Sexo">
                            </div>
                            <div class="inpt">
                                <label for="birthday"></label>
                                <input type="text" name="birthday" placeholder="Fecha de nacimiento">
                            </div>
                            <div class="inpt">
                                <label for="pais"></label>
                                <input type="text" name="pais" placeholder="País">
                            </div>
                        </div>
                    </div>
                    <div id="secondpart" class="parts">
                        <div class="peoplePresent">
                            <p class="text-white">Contestar a:</p>
                        </div>
                        <div id="oneinp">
                            <div class="oneinpt">
                                <label for="ways"></label>
                                <select name="ways" id="">
                                    <option value="" disabled selected hidden>Correo electrónico</option>
                                    <option>Celular</option>
                                </select>
                            </div>
                        </div>
                        <div class="twoinp flex justify-between inps">
                            <div class="inp">
                                <label for="email"></label>
                                <input type="text" name="email" placeholder="Correo electrónico">
                            </div>
                            <div class="inp">
                                <label for="dni"></label>
                                <input type="text" name="dni" placeholder="Número de documento">
                            </div>
                        </div>
                    </div>
                    <div id="thirdPart" class="parts">
                        <div class="peoplePresent">
                            <p class="text-white">Información general</p>
                        </div>
                        <div id="twoRadios" class="flex">
                            <div id="radioKind" class="radio">
                                <div class="radioTitle">
                                    <p class="text-white">Tipo</p>
                                </div>
                                <div class="radios flex flex-col">
                                    <div class="radio1 flex justify-sticky radiocont">
                                        <div class="radio1">
                                            <input type="radio" id="queja" name="queja">
                                            <label for="queja" class="text-white">Queja</label>
                                        </div>
                                        <div class="">
                                            <input type="radio" id="reclamo" name="reclamo">
                                            <label for="reclamo" class="text-white">Reclamo</label>
                                        </div>
                                    </div>
                                    <div id="ammount">
                                        <label for="ammount"></label>
                                        <input type="text" name="ammount" placeholder="Monto reclamado">
                                    </div>          
                                </div>
                            </div>
                            <div id="radiocategory" class="radio">
                                <div class="radioTitle">
                                    <p class="text-white">Categoría</p>
                                </div>
                                <div class="radios flex justify-sticky">
                                    <div class="radio1">
                                        <input type="radio" id="producto" name="producto">
                                        <label for="producto" class="text-white">Producto</label>
                                    </div>
                                    <div class="radio2">
                                        <input type="radio" id="servicio" name="servicio">
                                        <label for="servicio" class="text-white">Servicio</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="fourthpart" class="parts">
                        <div class="peoplePresent">
                            <p class="text-white">Reclamo/Queja</p>
                        </div>
                        <div id="quejadiv">
                            <label for="queja">
                            <textarea id="queja" name="queja"></textarea>
                            <p id="bottomtext" class="text-white">+Máximo permitido 1000 carecteres</p>
                        </div>
                    </div>
                    <div id="fifthpart" class="parts">
                        <div id="threebuttons" class="flex justify-between items-center mx-auto">
                            <button class="text-white">Limpiar</button>
                            <button class="text-white">Enviar</button>
                            <button class="text-white">Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<x-footer/>