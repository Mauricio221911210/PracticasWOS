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


    </head>
    <body>
        <div class="flex-center position-ref full-height">
           

            <div class="content">
                <h2>Laravel-Javascript </h2>
                <hr>

                <center> 
                <form name="alumno" action="" method="POST">
                {{ csrf_field() }}
                <table>
                   <tr>
                        <td>Estados: </td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>$municipios: </td>
                        <td>
                        <select name="id_municipio" id="selc_municipio">
                           <option value="0">--Selecciona un Estado Antes--</option>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" > <div id="info">-- -- -- -- -- </div></td>
                    </tr>
                </table>
                </form> 
                </center>

                
            

                <div class="links">
                 <a href="{{ route('inicio') }}"> Regresar</a>
                </div>
            </div>
        </div>

        <script type="text/javascript">
        $(document.ready).ready(function(){
            $('#selc_estados').on('onchange', function(){
                var id_estados = $(this).val();
                if($.trim(id_estado) != '0'{
                    $.get('js02',{id_estado: id_estado}, function(municipios){
                        $('#selc_municipio').empty();
                        $('#selc_municipio').apppend("<option value='0'>-- Seleccione un Municipio---</option>");
                        $.each(municipios, function(id,nombre){
                            $('#selc_municipio').append("<option value='"+ id + "'>"+ nombre + "</option>");
                        });
                    }))
            })
            
        </script>

    </body>
</html>
