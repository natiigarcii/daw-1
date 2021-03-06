﻿<!-- CABECERA -->
<?php
    session_start();
    
    $zonaPrivada = false;
    $urlLocal = "../";
        //BORRAR cookies utilizadas para registro

    setcookie("usuario", "", time() - 3600, "/daw");
    setcookie("contrasena", "", time() - 3600, "/daw");
    setcookie("email", "", time() - 3600, "/daw");
    setcookie("sexo", "",time() - 3600, "/daw");
    setcookie("ciudad","", time() - 3600, "/daw");
    setcookie("FNacimiento","", time() - 3600, "/daw");
    setcookie("Foto","", time() - 3600, "/daw");
    setcookie("Pais","", time() - 3600, "/daw");
    
    require_once($urlLocal . 'db/connect.php');
    require_once($urlLocal . 'sesion/sesion.php');
?>
<!-- FIN CABECERA  ?> -->  

    <main>
        <form class="card" action="respuestaNuevoReg.php" method="POST" enctype="multipart/form-data">
                <p>* Campos obligatorios</p>
                <!--nombre de usuario-->
                <p><label>Usuario
                    <input type="text" name="usuario" required>*
                </label>
                </p>
                <!--contraseña-->
                <p>
                <label>Contraseña
                    <input type="password" name="contrasena" required>*
                </label>
                </p>
                <!--repetir contraseña-->
                <p>
                <label>Repetir contraseña
                    <input type="password" name="contrasena2" required>*
                </label>
                </p>
                <!--dirección de email-->
                <p>
                <label>E-mail
                    <input type="email" name="email" required placeholder="Enter your e-mail">*
                </label>
                </p>
                
                <!--Sexo-->
                
                <fieldset>
                <legend>Sexo</legend>
                <p><input type="radio" name="sexo" id="male" value="hombre">
                    <label for="male">Hombre</label></p>
                <p><input type="radio" name="sexo" id="female" value="mujer">
                    <label for="female">Mujer</label></p>
                </fieldset>
                <!--fecha de nacimiento-->
                <p>
                <label>Fecha de nacimiento
                    <input type="date" name="fecnacimiento">
                </label>
                </p>
                <!--ciudad-->
                <p>
                <label>Ciudad
                    <input type="text" name="ciudad">
                </label>
                </p>
                <!--país de residencia-->
                
                <?php require_once($urlLocal . 'db/paises.php'); ?>

                <!--foto-->
                <fieldset>
                <legend>Foto</legend>
                <div>
                    <input name="image" type="file" accept="image/*" id="menu_images" />
                    <p><img id="menu_image" alt="Imagen de perfil" src="/" />
                    <!--<input type="submit" value="Upload" /></p>-->
                </div>
                </fieldset>
                <p>
                    <input type="submit" name="doDB" value="Enviar">
                </p>
        </form>
    </main>

<!-- PÍE DE PÁGINA -->
    <?php include_once($urlLocal . "includes/pie.php"); ?>
<!-- FIN PÍE -->