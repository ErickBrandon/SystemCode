<!DOCTYPE html>
<?php include('../funciones/session.php');?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

    <link rel="stylesheet" href="../recur/css/AgregarProductos.css">
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
            <h3>Preparemos todos los detalles para subastar.</h3>
        </div>
    </section>
    <section id="contenido">
       <form action="../funciones/agregar_producto.php" method="POST" enctype="multipart/form-data">
           <div class="info">
               <h2>Agrega el titulo de tu porducto.</h2>
               <p>Se directo y simple.</p>
               <input  class="titulo" type="text" placeholder="Ej: Celular Samsung Galaxy S9" name="nombreP">
           </div>

           <div class="info">
                <h2>Selecciona la categoría que corresponda para tu producto</h2>
                <div class="categorias">
                    <div class="cat">

                        <div class="icon fas fa-car"></div>
                        <div class="btn-r"><input type="radio" name="categoria" value="Autos"></div>
                        <h2>Autos</h2>

                    </div>
                    <div class="cat">

                        <div class="icon fas fa-laptop"></div>
                        <div class="btn-r"><input type="radio" name="categoria" value="Cómputo"></div>
                        <h2>Cómputo</h2>
                        
                    </div>
                    <div class="cat">

                        <div class="icon fas fa-mobile-alt"></div>
                        <div class="btn-r"><input type="radio" name="categoria" value="Telefonía"></div>
                        <h2>Telefonía</h2>
                        
                    </div>
                    <div class="cat">

                        <div class="icon fas fa-home"></div>
                        <div class="btn-r"><input type="radio" name="categoria" value="Hogar"></div>
                        <h2>Hogar</h2>
                        
                    </div>
                    <div class="cat">

                        <div class="icon fas fa-tag"></div>
                        <div class="btn-r"><input type="radio" name="categoria" value="Otros"></div>
                        <h2>Otros</h2>
                        
                    </div>
                </div>
           </div>
           <div class="condi info">
                <h2>¿En qué condición se encuentra tu producto?</h2>
                <div class="condicion"><input class="con" type="radio" name="condicion" value="Nuevo">Nuevo</div>
                <div class="condicion"><input class="con" type="radio" name="condicion" value="Usado">Usado</div>
                <div class="condicion"><input class="con" type="radio" name="condicion" value="Reconstruido">Reconstruido</div>
           </div>
           <div class="info">
            <h2>¡Cuentanos más sobre tu producto!</h2>
            <p>Información complementaria.</p><br>
            <p>Marca.</p>
            <input class="titulo" type="text" placeholder="Ej: Samsung" name="marca">
            <p>Modelo.</p>
            <input class="titulo" type="text" placeholder="Ej: S9" name="modelo">
            <p>Tamaño.</p>
            <input class="titulo" type="text" placeholder="" name="tamaño">
           </div>

           <div class="info">
            <h2>Agrega un comentario</h2>
            <p>Aquí puedes agregar una descripción más detallada de tu producto.</p>
            <textarea name="comentarios" rows="10" cols="80" placeholder="Escribe aquí..."></textarea>
           </div>

           <div class="info">
            <h2>Elige el tipo de Subasta</h2>
            <p>Es la modalidad en el que tu producto participará para ser vendido dependiendo de cada condicion de la modalidad.</p>
            <div class="select">
                <select name="tipoSubasta" id="">
                    <option value="Tradicional">Tradicional</option>
                    <option value="Inversa">Inversa</option>
                </select>
            </div>
           </div>
           <div class="info">
            <h2>Agrega una foto de tu porducto</h2>
            <p>La imagen que desees agregar será la principal del producto.</p>
            <div class="file"><input class="img" type="file" accept="image/png, image/jpeg, image/jpg" name="upload[]" multiple></div>
           </div>
           <div class="info">
            <h2>¿Cúal es el precio del producto?</h2>
            <p>Es importante tener un precio dependiendo en la modalidad en la que se desea participar</p>
            <input class="titulo" type="text" placeholder="Ej: $ 1500.00" name="precio">

           </div>

           <input class="btn" type="submit" value="Registrar">
       </form>
    </section>
    
</body>
</html>