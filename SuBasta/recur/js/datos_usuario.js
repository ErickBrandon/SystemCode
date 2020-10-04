$(document).ready(function(){
    $('#inf-u').click(function(){
        $("#cnt-f").load("../form/info-usuario.php");
        
    });
    $('#inf-e').click(function(){
        $("#cnt-f").load("../form/info-envio.php");
    });
    $('#inf-c').click(function(){
        $("#cnt-f").load("../form/pas-u.php");
        
    });
});

function activar1(){
    document.getElementById('lbl1').disabled=false;
    document.getElementById('lbl1').focus();
    document.getElementById('lbl2').disabled=false;
    document.getElementById('lbl3').disabled=false;

    document.getElementById('cancelar').disabled=false;
    document.getElementById('editar').disabled=true;
    document.getElementById('actualizar').disabled=false;   
}
function desactivar1(){
    document.getElementById('lbl1').disabled=true;
    document.getElementById('lbl2').disabled=true;
    document.getElementById('lbl3').disabled=true;
    
    document.getElementById('editar').disabled=false;
    document.getElementById('cancelar').disabled=true;
    document.getElementById('actualizar').disabled=true;
}
function activar2(){
    document.getElementById('lbl1').disabled=false;
    document.getElementById('lbl1').focus();
    document.getElementById('lbl2').disabled=false;
    document.getElementById('lbl3').disabled=false;
    document.getElementById('lbl4').disabled=false;
    document.getElementById('lbl5').disabled=false;

    document.getElementById('cancelar').disabled=false;
    document.getElementById('editar').disabled=true;
    document.getElementById('actualizar').disabled=false;   
}
function desactivar2(){
    document.getElementById('lbl1').disabled=true;
    document.getElementById('lbl2').disabled=true;
    document.getElementById('lbl3').disabled=true;
    document.getElementById('lbl4').disabled=true;
    document.getElementById('lbl5').disabled=true;
    
    document.getElementById('editar').disabled=false;
    document.getElementById('cancelar').disabled=true;
    document.getElementById('actualizar').disabled=true;
}