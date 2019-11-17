<form id="test-form">
    <script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" href="https://ssl.gstatic.com/docs/script/css/add-ons.css">
    <script>

        function buscaInformacion(){
            google.script.run.withSuccessHandler(getLlegada). getLlegadaSS(document.forms[0]);
            google.script.run.withSuccessHandler(getSalida). getSalidaSS(document.forms[0]);
        }

        function getLlegada(llegada){
            var txtLlegada = document.getElementById('llegada');
            txtLlegada.value = llegada;
        }

        function getSalida(salida){
            var txtSalida = document.getElementById('salida');
            txtSalida.value = salida;
        }

        $(function() {
            $( "#buscar" ).click(buscaInformacion);
        });

        // Prevent forms from submitting.
        function preventFormSubmit() {
            var forms = document.querySelectorAll('form');
            for (var i = 0; i < forms.length; i++) {
                forms[i].addEventListener('submit', function(event) {
                    event.preventDefault();
                });
            }
        }

        window.addEventListener('load', preventFormSubmit);

        function mostrar_mensaje() {
            var valor=document.getElementById("id").value;
            if(valor!=""){
                $("#suggesstion-box").show();
            }else{
                $("#suggesstion-box").hide();
            }
        }

        function selectCountry(val,val2,val3) {
            $("#id").val(val);
            $("#llegada").val(val2);
            $("#salida").val(val3);
            $("#suggesstion-box").hide();
        }
    </script>

    <html>
    <body bgcolor="e3e5e8">
    <br><br>

    <div align="center" >

        <form id="datosPersona" name="datosPersona" autocomplete="off">
            <table>
                <tr>
                    <td>
                        <label for="llegada">NOMBRE</label>
                        <input type="text" id="id" name="id" onkeyup="mostrar_mensaje();">
                        <div id="suggesstion-box" style="position: absolute;display: none">
                            <ul id="country-list" style="background-color: #aac5f5;width: 300px" >
                                <li onClick="selectCountry('valor 1','completar 1.1','completar 1.2');">valor 1</li>
                                <li onClick="selectCountry('valor 2','completar 2.1','completar 2.2');">valor 2</li>
                            </ul>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="llegada">PAIS</label>
                        <input type="text" id="llegada" name="llegada">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="salida">COLOR POLO</label>
                        <input type="text" id="salida" name="salida" >
                    </td>
                </tr>
            </table>

            <br><br><br>
            <button id="buscar">Buscar</button>

        </form>
    </div>
    </body>
    </html>
