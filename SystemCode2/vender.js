$(document).ready(function(){
    $('#btn-tienda').click(function(){
        document.querySelector('#radio-tienda').checked = true;
        document.getElementById('btn-tienda').classList.add('seleccionado');
        document.getElementById('btn-tradicional').classList.remove('seleccionado');
        document.getElementById('btn-inversa').classList.remove('seleccionado');
    });
    $('#btn-tradicional').click(function(){
        document.querySelector('#radio-tradicional').checked = true;
        document.getElementById('btn-tradicional').classList.add('seleccionado');
        document.getElementById('btn-tienda').classList.remove('seleccionado');
        document.getElementById('btn-inversa').classList.remove('seleccionado');
    });
    $('#btn-inversa').click(function(){
        document.querySelector('#radio-inversa').checked = true;
        document.getElementById('btn-inversa').classList.add('seleccionado');
        document.getElementById('btn-tradicional').classList.remove('seleccionado');
        document.getElementById('btn-tienda').classList.remove('seleccionado');
    });
    /* ---------------------*/
    $('#btn-RC').click(function(){
        document.querySelector('#radio-RC').checked = true;
        document.getElementById('btn-RC').classList.add('seleccionado');
        document.getElementById('btn-AB').classList.remove('seleccionado');
        document.getElementById('btn-Tec').classList.remove('seleccionado');
        document.getElementById('btn-Otro').classList.remove('seleccionado');
        $("#cont-producto").load("Categorias/ropa-calzado.html");
    });
    $('#btn-AB').click(function(){
        document.querySelector('#radio-AB').checked = true;
        document.getElementById('btn-AB').classList.add('seleccionado');
        document.getElementById('btn-RC').classList.remove('seleccionado');
        document.getElementById('btn-Tec').classList.remove('seleccionado');
        document.getElementById('btn-Otro').classList.remove('seleccionado');
        $("#cont-producto").load("Categorias/articulos-belleza.html");

    });
    $('#btn-Tec').click(function(){
        document.querySelector('#radio-Tec').checked = true;
        document.getElementById('btn-Tec').classList.add('seleccionado');
        document.getElementById('btn-AB').classList.remove('seleccionado');
        document.getElementById('btn-RC').classList.remove('seleccionado');
        document.getElementById('btn-Otro').classList.remove('seleccionado');
        $("#cont-producto").load("Categorias/tecnologia.html");

    });
    $('#btn-Otro').click(function(){
        document.querySelector('#radio-Otro').checked = true;
        document.getElementById('btn-Otro').classList.add('seleccionado');
        document.getElementById('btn-AB').classList.remove('seleccionado');
        document.getElementById('btn-Tec').classList.remove('seleccionado');
        document.getElementById('btn-RC').classList.remove('seleccionado');
        $("#cont-producto").load("Categorias/otro.html");
    });
    $('#siguiente').click(function(){
        modalidad=$('input:radio[name=modalidad]:checked').val();
        categoria=$('input:radio[name=categoria]:checked').val();
       if(modalidad=="Tienda" || modalidad=="Inversa" || modalidad=="Tradicional"){
            if(categoria=="Ropa y Calzado" || categoria=="Accesorios y Belleza" || categoria=="Tecnología" || categoria=="Otro"){
                document.getElementById('informacion-basica').classList.remove('oculto');
                //window.location.href="#ultimo";
                $('html,body').animate({scrollTop:$("#informacion-basica").offset().top}, 1500);
            }else{alert("Tienes que seleccionar una modalidad y una categoría para continuar");}
       }else{alert("Tienes que seleccionar una modalidad y una categoría para continuar");}
    });

    $('#siguiente2').click(function(){
        document.getElementById('producto').classList.remove('oculto');
        $('html,body').animate({scrollTop:$("#producto").offset().top}, 1500);
        
    });

});

