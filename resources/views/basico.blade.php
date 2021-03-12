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

        <script type="text/javascript">
                    console.log("Pagina en funcion de consola...");
                    document.write("Escrito del script de <br><br>");

                    if(confirm("Presione Aceptar o Cancelar")){
                            document.write("SI");
                    }
                    else{
                           document.write("NO");
                    }

                /*  
                  var: variables de funcion 
                  let: variables de bloque
                  const: variables constante 
                */

                var x;
                var nombre = "Mauricio";
                var edad = 19;
                var lista = ['Aaron', 'Ernesto','chato'];

                var res1 = 2+5;
                var res2= edad-res1;

                var y= 1;
                /*
                for(x=0; x<=10; x++){
                    console.log("for: " + x)

                }

                while(y<=10){
                    y++;
                    console.log("while: " + y)
                }

                do{
                    console.log("do: "+ y);
                    y++;

                }while(y<=10);
                */

                for(z in lista ){
                    console.log(lista[z]);
                }
               //-------------------------------------------

                </script>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <h2>Laravel-Javascript </h2>

               <input type="text"  id="num"><br>
               <div class="num2"></div><br>
               <textarea name=""></textarea>
            

                <div class="links">
                 <a href="{{ route('inicio') }}"> Regresar</a>
                </div>
            </div>
        </div>
    </body>
</html>
