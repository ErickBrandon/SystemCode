$(document).ready(function(){
    $('#inf-u').click(function(){
        $("#cnt-f").load("../form/info-usuario.html");
    });
    $('#inf-e').click(function(){
        $("#cnt-f").load("../form/info-envio.html");
    });
    $('#inf-c').click(function(){
        $("#cnt-f").load("../form/pas-u.html");
        
    });
})

function activar(){
    document.getElementById('lbl1').disabled=false;
    document.getElementById('lbl2').disabled=false;
    document.getElementById('lbl3').disabled=false;

}
function desactivar(){
    document.getElementById('lbl1').disabled=true;
    document.getElementById('lbl2').disabled=true;
    document.getElementById('lbl3').disabled=true;

}