﻿<!-- CABECERA -->
    <?php require("includes/header.html"); ?>
<!-- FIN CABECERA -->   

    <main>
        <form class="card" action="resBusqueda.php" method="get">
            
            <label>Título:<br>
                <input type="text" name="titulo">
            </label>
            <br> 
            
            <label>Fecha:<br>
                <input type="text" name="fecha">
            </label>
            <br>
            
            <label>País:<br>
                <input type="text" name="pais">
            </label>
            <br>
            <input type="submit" value="Buscar">
        </form>
    </main>
    
<!-- PÍE DE PÁGINA -->
    <?php require("includes/footer.html"); ?>
<!-- FIN PÍE -->