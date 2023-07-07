const pass = document.getElementById("pass"),
      icon = document.getElementById("icono");

      icon.addEventListener("click", e =>{
        if(pass.type == "password"){
            pass.type = "text";
        }else{
            pass.type = "password"
        }
      })