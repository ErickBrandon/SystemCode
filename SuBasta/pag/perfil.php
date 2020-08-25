<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('../frac/generales2.php'); ?>
    <link rel="stylesheet" href="../recur/css/perfil.css">
    <link rel="stylesheet" href="../recur/css/modal.css">
    <title>Document</title>
</head>
<body>
    <?php include('../frac/header.php'); ?>
    <section id="contenido">
        <div id="cont-perfil">
            <div class="principal">
                <div class="foto-perfil">
                    <img src="../recur/img/erick.png" alt="">
                    <div class="edit-foto fas fa-camera"></div>
                    <p>{{user.username}}</p>
                </div>
                <div class="info">
                    <p><strong>{{user.nombre}} {{user.apellido}}</strong></p>
                    <button id="btnModal" class="edit-info"><span class="far fa-edit"></span>Editar información</button>

                    <div class="cont-subcoin">
                        <div class="coin-header">Mis Su-Bcoins</div>
                        <div class="mis-coins"><span class="fas fa-coins"></span>100 </div>
                        <button id="mass-coins" class="mas-coins"><span class="fas fa-plus-circle"></span>Conseguir más</button>
                    </div>
                    <div class="agregar-p">
                        <a href="{% url 'AgregarProductos' %}">Agregar subasta</a>
                    </div>                   
                </div>
            </div>
        </div>

        <section id="mis-sb">
            <div class="header-mis-sb">Mis <span>Su-Bastas</span></div>
            <div class="cont-sb">
                <div class="header-cont-sb">Subasta Tradicional</div>
                <div class="icon fas fa-gavel"></div>
                <p>Mis subastas totales: <span>300</span></p>
            </div>
            <div class="cont-sb">
                <div class="header-cont-sb">Subasta Inversa</div>

                <div class="icon fas fa-gavel"></div>
                <p>Mis subastas totales: <span>3</span></p>
            </div>
        </section>
        <section id="mis-sb">
            <div class="header-mis-sb">Mis <span>Compras</span></div>

            <div class="cont-sb compra">
                <div class="header-cont-sb">Mis Compras</div>
                <div class="icon fas fa-tag"></div>
                <p>Compras totales: <span>300</span></p>
            </div>
            
        </section>

    </section>

    <section>
	<div id="tvesModal" class="modalContainer">
		<div class="modal-content">
			<span class="close">×</span>
            <h2>Mi información</h2>
            <form action="">
                <div><input type="text" placeholder="Nombre"></div>
                <div><input type="text" placeholder="Apellido"></div>
                <div><input type="text" placeholder="Teléfono"></div>
                <div><input type="text" placeholder="Correo electronico"></div>
                <div><input type="password" placeholder="Contraseña"></div>
                <div class="btn-a"><input type="submit" value="Actualizar"></div>
                
            </form>
		</div>
    </div>

<!--    ---------------------------------------------------   -->
    <div id="Modal-coins" class="modalContainer">
		<div class="modal-content">
			<span class="close-coins">×</span>
            <h2 id="h-coins">Adquiere más<br><span>Su-Bcoins</span></h2>
            <h2 id="h-coins">Obtén 5 Su-Bcoins por $30</h2>
            <div id="moneda"><img loading="lazy" src="{% static 'img/cinco.png' %}" alt=""></div>
            <div id="btn-pago"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                <input type="hidden" name="cmd" value="_s-xclick">
                <input type="hidden" name="hosted_button_id" value="PRBMM72U7U482">
                <input type="image" src="https://www.paypalobjects.com/es_XC/MX/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal, la forma más segura y rápida de pagar en línea.">
                <img loading="lazy" alt="" border="0" src="https://www.paypalobjects.com/es_XC/i/scr/pixel.gif" width="1" height="1">
                </form>
            </div>
		</div>
    </div>
<!--    ---------------------------------------------------   -->
    </section>
</body>
</html>