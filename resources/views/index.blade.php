<x-head/>
  <header id="header" class="container flex flex-col items-center">
    <x-nav/>
      <div id="frase" class="my-auto flex flex-col ">
        <p id="frase1" class="text-white italic uppercase">¡La suerte no juega!</p>
        <p id="frase2" class="text-white">Navega por internet y encuentra las respuestas <br>
            a cientos de acertijos.</p>
        <div>
        <img class="cursor-pointer" src="../img/jugar-ahora.png" alt="">
        </div>
      </div>
  </header>
  <div id="bannerAndAnnounce" class="flex flex-col items-center">
            <div id="banner" class="flex mx-auto">
             <div class="swiper mySwiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide text-center">Slide 1</div>
                    <div class="swiper-slide text-center">Slide 2</div>
                    <div class="swiper-slide text-center">Slide 3</div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                </div>
            </div>
            <div id="announce" class="mx-auto mt-20">
    
            </div>
        </div>
        <div id="caracteristics" class="flex mx-auto h-max">
            <div class="caracteristic flex flex-col justify-center items-center">
                <div class="imagecaract">
                    <img class="mx-auto" src="../img/LIBRO-08.png" alt="">
                </div>
                <div id="textcaract">
                    <p class="title text-center text-white">Aprende jugando</p>
                    <p class="text mx-auto text-center text-white">
                        Descubre algo nuevo cada día
                        mientras resuelves acertijos
                    </p>
                </div>
            </div>
            <div class="caracteristic caract-center flex flex-col justify-center items-center">
                <div class="imagecaract">
                    <img class="mx-auto" src="../img/ESPADA-08.png" alt="">
                </div>
                <div id="textcaract">
                    <p class="title text-center text-white">Juega con tus amigos</p>
                    <p class="text mx-auto text-center text-white">
                        Pon a prueba tu habilidad mientras
                        compites con tus amigos y familiares.
                    </p>
                </div>
            </div>
            <div class="caracteristic flex flex-col justify-center items-center">
                <div class="imagecaract">
                    <img class="mx-auto" src="../img/COPA-08.png" alt="">
                </div>
                <div id="textcaract">
                    <p class="title text-center text-white">
                        Apoya a tu cole
                    </p>
                    <p class="text mx-auto text-center text-white">
                        Siente la adrenalina mientras sumas
                        puntos para tu colegio. Solo uno
                        levantará el trofeo.
                    </p>
                </div>
            </div>
        </div>
        <!-- Races section -->
        <div id="raceSectionAndfaq" class="flex flex-col">
            <div id="races" class="flex">

                <div class="mx-auto my-auto race flex flex-col justify-center items-center relative">
                    <img src="../img/fbordemorad.png" alt="">
                    <div class="raceelements flex flex-col justify-center items-center absolute">
                    <a href="#" class="raceTitle text-white text-center">Interescolar</a>
                    <p class="raceDescription">
                        Apoya a tu colegio
                    </p>
                    </div>
                </div>

                <div class="mx-auto my-auto race flex flex-col justify-center items-center relative">
                    <img src="../img/fbordeama.png" alt="">
                    <div class="raceelements flex flex-col justify-center items-center absolute">
                    <a href="#" class="raceTitle text-white text-center">Race</a>
                    <p class="raceDescription">
                        Compite en simultaneo
                    </p>
                    </div>
                </div>

                <div class="mx-auto my-auto race flex flex-col justify-center items-center relative">
                    <img src="../img/fbordeverd.png" alt="">
                    <div class="raceelements flex flex-col justify-center items-center absolute">
                    <a href="#" class="raceTitle text-white text-center">Clasico</a>
                    <p class="raceDescription">
                        Resuelve cientos de acertijos
                    </p>
                    </div>
                </div>
            </div>
            <div id="faq" class="mx-auto">
                <div id="textandline" class="flex justify-center mx-auto items-center">
                    <p class="text-white uppercase">Preguntas frecuentes</p>
                    <div id="line"></div>
                </div>
                <div id="faqs" class="mx-auto">
                <div class="accordionfaq text-white" id="question1">
                        <a class="accordion-link text-white" href="#question1">
                            Que es the online race?
                            <i class="fa-solid fa-plus text-white"></i>
                            <i class="fa-solid fa-minus text-white"></i>
                        </a>
                        <div class="answer">
                            <p>
                                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rem itaque eveniet voluptatum ratione 
                                officia aspernatur necessitatibus, eaque quod blanditiis deleniti adipisci, voluptate a, amet 
                                possimus maxime soluta eos dolores. Animi?
                            </p>
                        </div>
                    </div>
                    <div class="accordionfaq text-white" id="question2">
                        <a class="accordion-link text-white" href="#question2">
                            Tengo problemas para acceder a mi cuenta
                            <i class="fa-solid fa-plus text-white"></i>
                            <i class="fa-solid fa-minus text-white"></i>
                        </a>
                        <div class="answer">
                            <p>
                            Si tienes problemas para acceder a tu cuenta escríbenos a <span class="underline">soporte@theonlinerace.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="accordionfaq text-white" id="question3">
                        <a class="accordion-link text-white" href="#question3">
                            No puedo resolver un acertijo
                            <i class="fa-solid fa-plus text-white"></i>
                            <i class="fa-solid fa-minus text-white"></i>
                        </a>
                        <div class="answer">
                            <p>
                            Descubre cómo resolver un acertijo en <a href="#" class="underline">¿Como jugar?</a> Si notaste un error escríbenos a <span class="underline">soporte@theonlinerace.com</span>
                            </p>
                        </div>
                    </div>
                    <div class="accordionfaq text-white" id="question4">
                        <a class="accordion-link text-white" href="#question4">
                            ¿Como puedo inscribir a mi colegio?
                            <i class="fa-solid fa-plus text-white"></i>
                            <i class="fa-solid fa-minus text-white"></i>
                        </a>
                        <div class="answer">
                             <p>
                             Si quieres participar con tu colegio escríbenos a <span class="underline">comercial@theonlinerace.com</span>.
                            </p>
                        </div>
                    </div>
                    <div class="accordionfaq text-white" id="question5">
                        <a class="accordion-link text-white" href="#question5">
                            The online race es un juego gratuito?
                            <i class="fa-solid fa-plus text-white"></i>
                            <i class="fa-solid fa-minus text-white"></i>
                        </a>
                        <div class="answer">
                            <div class="flex flex-col">
                                <p>
                                Sí, The Online Race cuenta con 
                                distintas modalidades gratuitas que podrás disfrutar solo y con amigos. 
                                Para jugar sin límites y desbloquear más acertijos, ofrecemos paquetes 
                                de tickets desde los S/. X.
                                </p>
                                <span class="flex flex-col">
                                    <p>Race: Compite de manera gratuita en la próxima carrera</p>
                                    <p>Clásico: Desafía tu habilidad resolviendo cientos de acertijos gratuitos</p>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="faqDiv">
                        <div class="faqImg relative">
                            <img src="../img/CUADRADO PREGUNTAS FRECUENTES-06.png" alt="" class="relative mx-auto">
                        </div>
                        <div class="plus absolute flex">
                            <i class="fa-solid fa-plus cursor-pointer"></i>
                        </div>
                        <div class="faqAnswer absolute">
                            <p class="">¿Que es the online race?</p>
                        </div>
                    </div>
                    <div class="faqDiv">
                        <div class="faqImg relative">
                            <img src="../img/CUADRADO PREGUNTAS FRECUENTES-06.png" alt="" class="relative mx-auto">
                        </div>
                        <div class="plus absolute flex">
                            <i class="fa-solid fa-plus cursor-pointer"></i>
                        </div>
                        <div class="faqAnswer absolute">
                            <p class="">Tengo problemas para acceder a mi cuenta</p>
                        </div>
                    </div>
                    <div class="faqDiv">
                        <div class="faqImg relative">
                            <img src="../img/CUADRADO PREGUNTAS FRECUENTES-06.png" alt="" class="relative mx-auto">
                        </div>
                        <div class="plus absolute flex">
                            <i class="fa-solid fa-plus cursor-pointer"></i>
                        </div>
                        <div class="faqAnswer absolute">
                            <p class="">No puedo resolver un acertijo</p>
                        </div>
                    </div>
                    <div class="faqDiv">
                        <div class="faqImg relative">
                            <img src="../img/CUADRADO PREGUNTAS FRECUENTES-06.png" alt="" class="relative mx-auto">
                        </div>
                        <div class="plus absolute flex">
                            <i class="fa-solid fa-plus cursor-pointer"></i>
                        </div>
                        <div class="faqAnswer absolute">
                            <p class="">¿Como puedo inscribir a mi colegio?</p>
                        </div>
                    </div>
                    <div class="faqDiv">
                        <div class="faqImg relative">
                            <img src="../img/CUADRADO PREGUNTAS FRECUENTES-06.png" alt="" class="relative mx-auto">
                        </div>
                        <div class="plus absolute flex">
                            <i class="fa-solid fa-plus cursor-pointer"></i>
                        </div>
                        <div class="faqAnswer absolute">
                            <p class="">The online race es un juego gratuito</p>
                        </div>
                    </div> -->
                </div>
            </div>
            <div id="announce2" class="mx-auto">
    
            </div>
        </div>
  <x-footer/>
