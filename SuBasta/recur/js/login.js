function login() {
    var usuario, pass;
    var arroba=0,punto=0;
    usuario=document.getElementById("usuario").value;
    pass=document.getElementById("password").value;

    if(usuario==="" || pass===""){
        alert("Los dos campos son obligatorios");
        return false;
    }else{
        for(i=0; i<usuario.length; i++){
            if(usuario.charAt(i)=="=" || usuario.charAt(i)=="'"){
                alert("El Usuario el es incorrecto");
                return false;
            }else{
                if(usuario.charAt(i)=="@"){
                    arroba=i;
                    for(j=arroba; j<=usuario.length;j++){
                        if(usuario.charAt(j)=="."){
                            punto=j;
                        }
                    }
                }
            }
        }
        if(arroba==0 || punto==0 || punto>=(usuario.length-2)){
            alert("Ingresa el formato correcto de un correo electrónico");
            return false;
        }
        for(i=0; i<pass.length; i++){
            if (pass.charAt(i)=="=" || pass.charAt(i)=="'"){
                alert("La contraseña es incorrecta");
                return false;
            }
        }     
    }
}