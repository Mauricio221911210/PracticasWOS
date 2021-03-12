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

            span.sname{
                position: relative;
                left: -140px;
                top: -30px;
                width: 140px;
                padding: 6px;
                background: #E00;
                color: #FFF;
                text-align: center;
                visibility: hidden;
                border-radius: 5px;
                opacity: 0.8;
                z-index: 999;

            }
            span.sname:after{
                content:'';
                position: absolute;
                top: 100%;
                left:50%;
                margin-left: -8px;
                width: 0;
                height: 0;
                border-top: 8px solid #E00;
                border-right: 8px solid transparent;
                border-left: 8px sollid transparent; 
            }
        </style>

        <script src=" {{ asset('js/jquery-3.3.1.js') }}"></script>
        <script src=" {{ asset('js/jquery-ui.js') }}"></script>

        <script type="text/javascript">

                  $("#empleados_id").blur(function(){
                        var txtempleados_id = $("#empleados_id").vla();
                     

                        if(valempleados_id.test(txtempleados_id)){ $("#sempleados_id").text("Valido");}
                        else{ $("#sempleados_id").text("No has seleccionado ningun empleado"); }
                        
                        
                       });

                       $("#productos_id").blur(function(){
                        var txtproductos_id = $("#productos_id").vla();
                       
                        if(valproductos_id.test(txtproductos_id)){ $("#productos_id").text("Valido");}
                        else{ $("#sproductos_id").text("No has seleccionado ningun producto"); }
                        
                        
                       });

                       $("#cantidad").blur(function(){
                        var txtcantidad = $("#cantidad").vla();
                        var valcantidad = /^{1,64}{1,63}\.){1,125}{2,63}$/i;

                        if(valcantidad.test(txtcantidad)){ $("#scantidad").text("Valido");}
                        else{ $("#scantidad").text("Numero no valido "); }
                        
                        
                       });


                 

                

                 
        </script>

        </head>


        <body>
        <div class="flex-center position-ref full-height">
             <div class="content">
             <h2>Examen P</h2>
             <img src="{{ asset('images/defaul.png') }}" id="img" width="140" height="140" alt="">

             <hr>

                <center>
                <form action="" name="">

                <h1>-----Venta de productos----</h1>
                <table>
                    
                    <div class="form-group">
                    <label for="">Empleados</label>
                    <select name="empleados" id="empleados_id" class="form-control">
                    <option value="">Selecciona un Empleado</option>

                      
                           <option value=""  >Ernesto   </option>
                           <option value=""  >Aaron   </option>
                           <option value=""  >Chato    </option>
                             
                    
                    </select>
                    </div>

                    <div class="form-group">
                    <label for="">Productos</label>
                    <select name="productos" id="productos_id" class="form-control">
                    <option value="">Selecciona un Producto</option>
                      <option value="">Chetos   </option>
                      <option value="">Pan Ochon   </option>
                      <option value="">Milar gesa    </option>


                           
                    </select>
                    </div>
                    

                    
                   
                  
                   <tr>
                         <td>Cantidad</td>
                         <td><input type="text" id="cantidad" class="cantidad" name="cantidad"></td>
                         <td></td>
                   </tr>

                </table>

                <hr></hr>
                <h1>------Detalles del Empleado----- </h1>

 <h2>Foto:  <img src="{{ asset('images/defaul.png') }}" id="img" width="140" height="140" alt="">
clave: SOP-456231
Nombre : Ernesto 
</h2>

<h2>Foto:  <img src="{{ asset('images/defaul.png') }}" id="img" width="140" height="140" alt="">
clave: MEJO-7548659
Nombre : Aaron 
</h2>

<h2>Foto:  <img src="{{ asset('images/defaul.png') }}" id="img" width="140" height="140" alt="">
clave: LOS-357456
Nombre : Chato
</h2>


<h1>--------Detalles del Producto--------</h1>
<h2>Foto:  <img src="{{ asset('images/defaul.png') }}" id="img" width="140" height="140" alt="">
clave:PRRO-789456
Nombre: Chetos 
</h2>

<h2>Foto:  <img src="{{ asset('images/defaul.png') }}" id="img" width="140" height="140" alt="">
clave:QWDF-159753
Nombre: Pan Ochon
</h2>

<h2>Foto:  <img src="{{ asset('images/defaul.png') }}" id="img" width="140" height="140" alt="">
clave:JSDO-456159
Nombre: Milar gesa
</h2>
                </form>
                </center>

             
            

              
            </div>
        </div>
    </body>
</html>
