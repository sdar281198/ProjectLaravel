<x-head/>
  <header id="header" class="container flex flex-col items-center">
    <x-nav/>
      <div id="frase" class="my-auto flex flex-col ">
        <p id="frase1" class="text-white italic uppercase">¡La suerte no juega!</p>
        <p id="frase2" class="text-white">Navega por internet y encuentra las respuestas <br>
            a cientos de acertijos.</p>
        <img class="cursor-pointer" src="../img/BOTON JUGAR AHORA-12.png" alt="">
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
                  <img class="mx-auto" src="img/LIBRO-08.png" alt="">
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
                  <img class="mx-auto" src="img/ESPADA-08.png" alt="">
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
                  <img class="mx-auto" src="img/COPA-08.png" alt="">
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
          <div id="races" class="container flex">

              <div class="mx-auto my-auto race flex flex-col justify-center items-center" style="background-image:url(img/fbordemorad.png)">
                  <a href="#" class="raceTitle text-white">Interescolar</a>
                  <p class="raceDescription">
                      Apoya a tu colegio
                  </p>
              </div>

              <div class="mx-auto my-auto race flex flex-col justify-center items-center" style="background-image:url(img/fbordeama.png)">
                  <a href="#" class="raceTitle text-white">Race</a>
                  <p class="raceDescription">
                      Compite en simultaneo
                  </p>
              </div>

              <div class="mx-auto my-auto race flex flex-col justify-center items-center" style="background-image:url(img/fbordeverd.png)">
                  <a href="#" class="raceTitle text-white">Clasico</a>
                  <p class="raceDescription">
                      Resuelve cientos de acertijos
                  </p>
              </div>
          </div>
          <div id="faq" class="mx-auto">
              <div id="textandline" class="flex justify-center mx-auto items-center">
                  <p class="text-white uppercase">Preguntas frecuentes</p>
                  <div id="line"></div>
              </div>
              <div id="faqs" class="mx-auto">
                  <div class="faq text-white flex items-center relative">
                      <p class="absolute">¿Que es the online race?</p>
                  </div>
                  <div class="faq text-white flex items-center relative">
                      <p class="absolute">Tengo problemas para acceder a mi cuenta</p>
                  </div>
                  <div class="faq text-white flex items-center relative">
                      <p class="absolute">No puedo resolver un acertijo</p>
                  </div>
                  <div class="faq text-white flex items-center relative">
                      <p class="absolute">¿Como puedo inscribir a mi colegio?</p>
                  </div>
                  <div class="faq text-white flex items-center relative">
                      <p class="absolute">The online race es un juego gratuito</p>
                  </div>
              </div>
          </div>
          <div id="announce2" class="mx-auto">

          </div>
      </div>
  <x-footer/>
