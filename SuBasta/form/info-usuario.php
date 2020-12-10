<div id="correo">
    <?php
        include('../funciones/session.php');
        include('../funciones/consu_usuario.php');
     ?>
    <p>Tu correo electrónico es el principal acceso para tu cuenta en Su-Basta.
    <br>Tambien nos permite tener una vía de comunicación contigo por lo cual no puede ser modificado</p>
    <p class="correo-u">Correo:<?php echo $mostrar['correo'] ?></p>
</div>
<form id="info-usuario" action="../funciones/actInfUsu.php" method="POST">
    <div>
        <label for="">Nombre</label>
        <input id="lbl1" required type="text" name="nombre" value="<?php echo $mostrar['nombre_u'] ?>" disabled="">
    </div>
    <div>
        <label for="">Apellido</label>
        <input id="lbl2" required type="text" name="apellido" value="<?php echo $mostrar['apellido_u'] ?>" disabled="">
    </div>

    <div>
        <label for="">Teléfono<abbr title="Campo Obligatorio" aria-label="Campo Obligatorio">*</abbr></label>
        <input id="lbl3" required type="number" min="1000000000" max="9999999999" name="telefono" value="<?php echo $mostrar['telefono'] ?>" disabled="">
    </div>
    <div>
        <button id="editar" onclick=activar1() type="button"><span class="fas fa-cog"></span> Editar</button>

        <button id="cancelar" onclick=desactivar1() disabled="" type="button"><span></span>Cancelar</button>
        <button id="actualizar" type="submit" disabled="" onclick=desactivar()><span class="fas fa-check" ></span> Actualizar</button>
    </div>
</form>
