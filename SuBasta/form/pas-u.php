<div id="correo">
    <p>En el momento de hacer una modificación en su contraseña
    <br>se le enviará una notificación a su correo electronico</p>
    <p class="correo-u">Correo:</p>
</div>
<form id="info-usuario" action="../funciones/actPass.php" method="POST">
    <div>
        <label for="">Contraseña actual</label>
        <input id="lbl1" required  name="password" type="text" value="" disabled="">
    </div>
    <div>
        <label for="">Contraseña nueva</label>
        <input id="lbl2" required name="password2" type="text" value="" disabled="">
    </div>

    <div>
        <label for="">Confirmar contraseña nueva</label>
        <input id="lbl3" required name="password3" type="text" value="" disabled="">
    </div>
    <div>
        <button id="editar" onclick=activar1() type="button"><span class="fas fa-cog"></span> Editar</button>

        <button id="cancelar" onclick=desactivar1() disabled="" type="button"><span></span>Cancelar</button>
        <button id="actualizar" type="submit" disabled="" onclick=desactivar()><span class="fas fa-check" ></span> Actualizar</button>
    </div>
</form>
