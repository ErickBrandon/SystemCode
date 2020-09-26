<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="../recur/css/AgregarProductos.css">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="../recur/js/agregar-producto.js"></script>
    <title>Document</title>
</head>
<body>
    <section id="header">
        <div class="user">
            <div><span class="far fa-user-circle"></span>{{user.nombre}} {{user.apellido}}</div>
        </div>
        <div class="img">
            <img src="../recur/img/SB.png" alt="">
        </div>
        <div class="texto">
            <h1>Gracias por confiar en Su-Basta</h1>
            <h1>para vender tus productos.</h1><br>
            <h3>Preparemos todos los detalles para vender.</h3>
        </div>
    </section>
    <section id="contenido">
       <form action="">
            <div class="etapas">
                <label for="">Agrega el titulo de tu porducto.</label>
                <p>Es el nombre principal que se mostrará de tu producto.</p>
                <p>Se directo y simple.</p>
                <input type="text"  placeholder="Ej: Celular Samsung Galaxy S9">
            </div>
            <div class="etapas">
                <label for="">¿En que condición se encuentra tu producto?</label>
                <div class="select">
                    <select name="" id="">
                        <option value="">Nuevo</option>
                        <option value="">Segunda mano</option>
                    </select>
                </div> <br><br><br><br>
                <label for="">¿Cómo quieres vender tu producto?</label>
                <p>Es la modalidad en el que tu producto participará para ser vendido.</p>
                <div class="select"> 
                    <select name="" id="">
                        <option value="">Tienda</option>
                        <option value="">Subasta inversa</option>
                        <option value="">Subasta tradicional</option>
                    </select>
                </div>
            </div>
            <div class="etapas">
                <label for="">Cantidad de piezas disponibles del produco</label>
                <p>Número de piezas del producto que se tiene para vender</p>
                <input type="text"  placeholder="Ej: 4">
            </div>
            <div class="etapas">
                <label for="">Selecciona la categoría del producto</label>
                <div id="cont-categoria">
                    <button id="ryc" class="" type="button">
                        <i class="fas fa-tshirt"></i>
                        <li>Ropa y calzado</li>
                    </button>
                    <button id="ayb" class="" type="button">
                        <i class="fas fa-child"></i>
                        <li>Accesorios y belleza</li>
                    </button>
                    <button id="tec" class="" type="button">
                        <i class="fas fa-mobile"></i>
                        <li>Tecnología</li>
                    </button>
                    <button id="otro" class="" type="button">
                        <i class="fas fa-tag"></i>
                        <li>Otro</li>
                    </button>
                </div>
            </div>
            <span id="s-categoria"></span>
       </form>
    </section>
    
</body>
</html>