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
                <h2>Laravel-Javascript valor numerico </h2>

               <input type="text"  onkeypress="valortxt(event)"><br>
               <p id="salida"></p>
              
            

                <div class="links">
                 <a href="{{ route('inicio') }}"> Regresar</a>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            function valortxt(event){
               var  varnum = event.keycode;
               var vartxt = String.fromCharCode(varnum);
                document.getElementaryById("salida").innerHTML = "Numerico: " + varnum + "<br>Caracter: "+ vartxt;
            }
       </script>

    </body>
</html>
