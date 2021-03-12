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

        <script src=" {{ asset('js/jquery-3.3.1.js') }}"></script>
        <script src=" {{ asset('js/jquery-ui.js') }}"></script>

        <script>
        $(document.ready)-(function(){
            console.log('Salida de informacion a consola ');
            $("#porid").html("campo por id");
            $(".porclase").html("Campo por clase");
            $("span").text("Campo por objeto |tag-html");
            $("span#texto").html("Campo especifico de un tag-html");
            //--------------------
            $("#porid").css({
                "position":"absolute",
                "background-color":"#FFA07A",
                "font-size":"200%",
                "height":"100px",
                "width":"100px",

            });
        // ----------------------------------------------------------
        num1 = 10;
        num2 = 100;

        for (x=0; x<10; x++){
                 cosole.log(x+1+"dato");
        }

        if(num1 != num2){
                alert(num1+num2);
        }

        });

        </script>

    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <h2>Laravel-Javascript </h2>
                <hr>

                <center>

                    <div id="porid">Campo-01</div>
                    <div class="porclase"> campo-02</div>
                    <span>Campo-03</span><br>
                    <span id="texto">Campo-04</span>
                    <span>Campo-05</span><br>
                    <div id="texto">Campo-06</div>
                   <br><br> 



                </center>
            

                <div class="links">
                 <a href="{{ route('inicio') }}"> Regresar</a>
                </div>
            </div>
        </div>
    </body>
</html>
