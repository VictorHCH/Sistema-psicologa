<?php
function componentePaciente(string $nombre, int $id){
    ?>
    <div class="Rectangle-3">
        <div class="Ellipse-7">
            <span class="ini"><?=substr($nombre, 0, 2) ?></span>
        </div>
        <a href="./pacientes_vista.php?alumno=<?=$id?>" class="Nombre-p"><?=$nombre ?></a>
    </div>
    <?php
}
?>