<?php
    function componenteCita(string $nombre, int $id, string $fechaHora){
        ?>
        <!-- Cambiar aqui la reddireccion -->
            <div class="Rectangle-2 tarjetaInterna" onclick="window.location='./google';">
                <span class="Nombre"><?= $nombre ?></span>
                <span class="Fecha"><?= $fechaHora ?></span>
                <span class="-am">10:00 a.m.</span>
            </div>
        <?php
    }

?>