function n_u() {
    var nombre, apellido, correo, password, password_c;
    var bandera=0, bandera2=0, bandera3=0;
    nombre= document.getElementById("nombre").value;
    apellido= document.getElementById("apellido").value;
    correo= document.getElementById("correo").value;
    password= document.getElementById("password").value;
    password_c= document.getElementById("password_c").value;

    letras=/^[a-zA-Z ]+$/;

    if(nombre ==="" || apellido==="" || correo==="" || password==="" || password_c==="") {
        alert("Todos los campos solicitados son obligatorios");
        return false;
    }else if(nombre.length>30){
        alert("El nombre es muy largo");
        return false;
    }else if(apellido.length>30){
        alert("El apellido es muy largo");
        return false;
    }else if(!letras.test(nombre)){
        alert("En los campos de 'Nombre' y 'Apellidos' permite ingresar solo letras");
        return false;
    }else if(correo.length>30){
        alert("El correo es muy largo");
        return false;
    }else if(password.length>30 || password_c.length>30){
        alert("La contraseña o la confirmación son muy largos");
        return false;
    }else if(password != password_c){
        alert("La contraseña y la confirmación de contraseña no coinciden");
        return false;
    }
    var tamaño=(correo.length)-2;
    for(i=0; i<correo.length;i++){
        if (correo.charAt(i)=="@"){
            bandera=i;
        }
    }
    for(i=bandera; i<correo.length;i++){
        if (correo.charAt(i)==".") {
            bandera2=i;
        }
    }
    for(i=bandera; i<correo.length;i++){
        if(correo.charAt(i)==="=" ){
            bandera3=1;
        }
    }
    if (bandera3> 0){
        alert("No se pueden '=', ''''");
        return false;
    }
    if (bandera===0 || bandera2===0 || bandera2>=tamaño) {
        alert("El correo electronico no es valido");
        return false;
    }
    
}


