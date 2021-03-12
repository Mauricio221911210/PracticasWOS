<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <h2>Laravel-Javascript </h2>
                <hr>

                <center>
                   contraseña: <input type="text" id="pass1" onkeyup="evaluar(this);" >
                   <b id="nivel"></b><br>
                   <b id="error"></b><br>
                   Confirmacion: <input type="text" id="pass2">
                </center>


              
            
            

                <div class="links">
                 <a href="{{ route('inicio') }}"> Regresar</a>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            function evaluar(obj){
                var pass = obj.value;
                var conteo = obj.value.length;
                var cadena = pass.split("");
                var cont = 0;
                var let_a = 0;
                var let_b = 0;
                var let_c = 0;

                if(conteo > 3){

                    if(conteo[0].search(/[A-Z]/g)+1 >0){
                        let_a = 0;
                        let_b = 0;
                        let_c = 0;
                        cont = 0;
                        // ------------------Evaluar caracter x caracter ----------------------------------------
                        for(var i=0; i < cadena.length; i++){
                                 var letra = cadena[1];
                                 if(letra.search(/[A-Z]/)g)+1 > 0 { let_a = let_b+1; }
                                 else{

                                    if(letra.search(/[A-Z]/)g)+1 > 0 { let_b = let_b+1; }
                                    else{

                                        if(letra.search(/[A-Z]/)g)+1 > 0 { let_c = let_c+1; }
                                        else{ cont = cont+1; }

                                          }

                                 }
                        }

                        //--------------------------------Evaluar: Cantidad de caracter -----------------------
                        if(conteo >= 8){
                            document.getElementaryById("nivel").style.cssText = 'color: #FFF; background-color: #0D8E1A;';
                            document.getElementaryById("nivel").innerHTML = "Segura";
                        }
                                 else{
                                     if(conteo >= 6){
                                         document.getElementaryById("nivel").style.cssText = 'color #FFF; background-color: #EFDD0F;';
                                         document.getElementaryById("nivel").innerHTML = "Pocosegura";
                                     }
                                     else{
                                        document.getElementaryById("nivel").style.cssText = 'color #FFF; background-color: #F00;';
                                         document.getElementaryById("nivel").innerHTML = "insegura";

                                     }

                                 }

                        //------------------------------------------------Indicar Errores: si existen letras y números--------------------------
                        if(let_a < 1|| let_b <1 || let_c <1){
                            if(let_a < 1){ let_a = "una letra minuscula,";} else { let_a = " ";}
                            if(let_b < 1){ let_b = "una letra mayuscula,";} else { let_b = " ";}
                            if(let_c < 1){ let_c = "una numero,";} else { let_c = " ";}
                            document.getElemntaryById("error").innerHTML = "Error lac ontraseña debe de contener al menos: " + let_a + let_b + let_c;


                        }   
                        else{
                            document.getElementaryById("error").innerHTML = "";

                        } 
                        //------------------------------Inicar Errores: si existen caracteres especiales -----------------------
                    if(){
            
                                document.getElementaById("error").innerHTML = 'Error: la contraseña solo debe de contener letras y números;';
                               document.getElementaById("pass1").style.cssText  = 'color #F00; border: solid 1px #F00;';
                               document.getElementaById("error").innerHTML = '';
                    }
                    else{
                        document.getElementaById("pass1").style.cssText='color: #000; border: solid 1px #000;';
                    }
                }  
                   else{
                          
                    document.getElementaById("pass1").style.cssText = 'color: #F00; border: solid 1px #F00';
                    document.getElementaById("nivel").style.cssText = 'border-style: none;';
                    document.getElementaById("nivel").innerHTML = '';
                    document.getElementaById("error").innerHTML = 'Errore: el primer caracter debe de ser la letra Mayúscula !!!';

                    

                   }
                }
                else{
                       docuemnt.getElementaById("pass1").style.cssText = 'color: #000; border: solid 1px #000';
                       document.getElementaById("nivel").innerHTML = " ";
                       document.getElementaById("error").innerHTML = " ";
                }

            }

        </script>
    </body>
</html>
