<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="vender-modalidad.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="vender.js"></script>
    <title>Document</title>
</head>
<body>
    <header id="header-vm">
        <div class="nombre">Erick Brandon</div>
        <div class="img"><img src="logo-1.png" alt=""></div>
    </header>
    <p class="gracias">Gracias por confiar en Su-Basta para vender tus productos.<br>
    Preparemos todos los detalles para vender</p>
    <form action="funciones/parte1.php" method="post">
    <div class="caja"> 
        <div class="titulo-caja">¿Comó vas a vender tu producto?</div>
        <p class="subt-caja">Selecciona la modalidad que quieres vender tu producto</p>
        <button id="btn-tienda" class="btn-modalidad" type="button"><span class="icon fas fa-shopping-bag"></span>Tienda</button>
        <button id="btn-tradicional" class="btn-modalidad" type="button"><span class="icon fas fa-gavel"></span>Subasta Tradicional</button>
        <button id="btn-inversa" class="btn-modalidad" type="button"><span class="icon fas fa-donate"></span>Subasta inversa</button>
        
        <input type="radio" value="Tienda" name="modalidad" id="radio-tienda">
        <input type="radio" value="Tradicional" name="modalidad" id="radio-tradicional">
        <input type="radio" value="Inversa" name="modalidad" id="radio-inversa">
    </div>
    <div class="caja"> 
        <div class="titulo-caja">¿Qué es lo que vas a vender?</div>
        <p class="subt-caja">Selecciona una categoría para tu producto</p>
        <button id="btn-RC" class="btn-categoria" type="button"><span class="icon fas fa-tshirt"></span>Ropa y Calzado</button>
        <button id="btn-AB" class="btn-categoria" type="button"><span class="icon fas fa-child"></span>Accesorios y Belleza</button>
        <button id="btn-Tec" class="btn-categoria" type="button"><span class="icon fas fa-mobile"></span>Tecnología</button>
        <button id="btn-Otro" class="btn-categoria" type="button"><span class="icon fas fa-tag"></span>Otro</button>

        <input id="radio-RC" type="radio" value="Ropa y Calzado" name="categoria">
        <input id="radio-AB" type="radio" value="Accesorios y Belleza" name="categoria">
        <input id="radio-Tec" type="radio" value="Tecnología" name="categoria" >
        <input id="radio-Otro" type="radio" value="Otro" name="categoria">
        <div><button id="siguiente" type="button" class="siguiente">Sieguiente</button></div>
    </div>
    
    <div id="informacion-basica" class="caja oculto">
        <div class="titulo-caja">Información básica</div>
        <p class="subt-caja">Ingresa los primeros datos de tu producto</p>
        <div class="info">
            <p class="uno">Agrega el titulo de tu porducto.</p>
            <p class="dos">Es el nombre que se mostrará principalmente de tu producto.</p>
                <input class="texto" type="text" placeholder="Nombre" name="nombre-producto">
        </div>
        <div class="info">
            <p class="uno">Ingresa la marca de tu producto</p>
            <p class="dos">En caso de que tu producto no cuente con alguna marca ingresalo como "Genérico".</p>
            <p class="alerta">La piratería es un delito grabe, verifica la marca de tu producto</p>
                <input class="texto" type="text" placeholder="Marca" name="marca">
        </div>
        <div class="info">
            <p class="uno">¿Cómo se encuentra tu producto?</p>
            <p class="dos">Cuentanos en que condición se encuentra tu produco.</p>
                <select name="condicion" id="">
                    <option value="">Selecciona una opción</option>
                    <option value="Nuevo">Nuevo</option>
                    <option value="Segunda mano">Segunda mano</option>
                </select>
        </div>
        <div><button id="siguiente2" type="button" class="siguiente">siguiente</button></div>
    </div>
    <div id="cont-producto"></div>
    </form>
</body>
</html>