<x-head/>
<div id="mainreg" class="flex flex-col items-center">
<x-nav/>
<div class="mt-10">
  <p class="container text-center text-white text-3xl font-bold" id="titreg">Crear cuenta</p>
            <p class="container text-white text-center text-lg mt-4" id="textreg">Te enviaremos un enlace de verificación.<br>Ingresa a tu correo para completar el registro.</p>
        </div>
        <div id="registerdiv" class="mx-auto mt-5" id="register">
            <form id="form" class="mx-auto flex flex-col" action="">
            <div>
                <div class="mx-auto mt-4 mb-4 relative" id="grupo__usuario">
                <label for="usuario"></label>
                <input class="container outline-none p-2 rounded focus:non" type="text" name="usuario" value="Usuario" placeholder="Usuario">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                <p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
                </div>
                <div class="mx-auto mt-4 mb-4 relative" id="grupo__nombre">
                <label for="nombre"></label>
                 <input  class="container outline-none p-2 rounded" type="text" name="nombre" value="" placeholder="Nombre">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                <p class="formulario__input-error">El nombre solo puede contener letras.</p>
                </div>
                <div class="mx-auto mt-4 mb-4 relative" id="grupo__apellidos">
                <label for="apellidos"></label>
                 <input  class="container outline-none p-2 rounded" type="text" name="apellidos" value="" placeholder="Apellidos">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                <p class="formulario__input-error">Los apellidos solo pueden contener letras.</p>
                </div>
                <div class="mx-auto mt-4 mb-4 relative" id="grupo__correo">
                <label for="correo"></label>
                <input class="container outline-none p-2 rounded" type="email" name="correo" value="" placeholder="Correo">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                <p class="formulario__input-error">El correo solo puede contener letras, numeros, puntos, guiones y guion bajo.</p>
                </div>
                <div class="mx-auto mt-4 mb-4 relative" id="grupo__password">
                <label for="contraseña"></label>
                <input id="password" class="container outline-none p-2 rounded" type="password" name="password" value="" placeholder="Contraseña">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
            </div>
                <div class="mx-auto mt-4 mb-4 relative" id="grupo__confcontraseña">
                <label for="confcontraseña"></label>
                <input id="password2" class="container outline-none p-2 rounded" type="password" name="password2" value="" placeholder="Confirmar contraseña">
                <i class="formulario__validacion-estado fas fa-times-circle"></i>
                <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
            </div>
            <div id="grupo__terminos" class="text-white mb-5">
                <label for="checkbox"></label>
                <input class="rounded" type="checkbox" name="terminos" value="first_checkbox" id="terminos"> Acepto los terminos y condiciones
                </div>
                <div class="flex justify-center">
                    <button id="buttonregister" class="mx-auto outline-none p-3 rounded text-white" type="submit">
                        <img src="../img/BOTON REGISTRATE-07.png" alt="">
                    </button>
                </div>
                <div class="mt-5">
                    <p class="grid titulo text-center mt-2 text-white" style="font-family:var(--latinaBold);">o registrate con</p>
                </div>
                <div id="redes" class="mx-auto mt-4 flex justify-between">
                    <a class="with text-center border p-2" href=""><i class="font-bold fa-brands fa-facebook-f"></i></a>
                    <a class="with text-center border p-2" href=""><i class="font-bold fa-brands fa-google"></i></a>
                </div>
                <div class="flex justify-center">
                    <button id="got" class="mx-auto mt-5 text-white p-4" type="button"><a href="/login2">¿Ya tienes una cuenta?</a></button>
                </div>
                </div>
                <div class="formulario__mensaje" id="formulario__mensaje">
				<p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
			    </div>

			<div class="formulario__grupo formulario__grupo-btn-enviar">
				<p class="formulario__mensaje-exito mt-5" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
			</div>
            </form>
        </div>
        </div>
      <x-footer/>
