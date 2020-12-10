<div id="correo">
    <p>La información de envio es fundamental para hacer alguna compra en la plataforma</p>
</div>
<form id="info-usuario" action="../funciones/actInfEnv.php" method="POST">
    <?php
        include('../funciones/session.php');
        include('../funciones/consu_usuario.php');
     ?>
    <div>
        <label for="">Calle y número</label>
        <input id="lbl1" required type="text" name="calle" value="<?php echo $mostrar['calle'] ?>" disabled="">
    </div>
    <div>
        <label for="">Colonia</label>
        <input id="lbl2" required type="text" name="colonia" value="<?php echo $mostrar['colonia'] ?>" disabled="">
    </div>
    
    <div class="cp">
        <label for="">Código Postal</label>
        <input id="lbl3" required type="number" min="10000" max="99999"name="codigoPos" value="<?php echo $mostrar['codigoPos'] ?>" disabled="">
    </div>
    <div>
        <label for="">Ciudad</label>
        <input id="lbl4" required type="text" name="ciudad" value="<?php echo $mostrar['ciudad'] ?>" disabled="">
    </div>
    <div>
        <label for="">Estado</label>
        <input id="lbl5" required type="text" nam   e="estado" value="<?php echo $mostrar['estado'] ?>" disabled="">
    </div>
    <div>
        <button id="editar" onclick=activar2() type="button"><span class="fas fa-cog"></span> Editar</button>
        
        <button id="cancelar" onclick=desactivar2() disabled="" type="button"><span></span>Cancelar</button>
        <button id="actualizar" type="submit" disabled="" onclick=desactivar()><span class="fas fa-check" ></span> Actualizar</button>
    </div>
</form>