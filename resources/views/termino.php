<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WeShick</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
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
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            /* Inicio Estilo mapa con imagen */
            #map {
              width: 100%; 
              height: 100%;
              position:absolute; 
              top: 0; 
              left: 0; 
              z-index: 0; /* Set z-index to 0 as it will be on a layer below the contact form */
            }
            #contactform { 
              position: absolute; 
              z-index: 1; /* The z-index should be higher than Google Maps */
              height: 100%;
              width: 100%;
              background: #fff;
              opacity: .59; /* Set the opacity for a slightly transparent Google Form */ 
              color: white;
              top: 0; 
              left: 0; 
            }
            #contenedorTermino { 
              position: absolute; 
              z-index: 1; /* The z-index should be higher than Google Maps */
              height: 100%;
              width: 50%;
              margin-left: 25%;
              background: #fff;
              opacity: .59; /* Set the opacity for a slightly transparent Google Form */ 
              color: white;
              top: 0; 
              left: 0; 
            }
            #imagenSplash{
              position: absolute; 
              z-index: 1; /* The z-index should be higher than Google Maps */
              height: 100%;
              color: white;
              top: 0; 
              left: 0; 
              margin-left: 26%;
              width: 48%;
              text-align: justify;
            }
            .porcentaje2{
              width: 15%;
              height: auto;
              margin-right: 2%;
              margin-left: 2%;
              margin-top: -3%;
            }

            .btn_700m{
              width: 41%;
              height: auto;
            }
            /* Botones 700*/
            @media screen and (max-width: 700px)
            {
                div#btns_apps700Mas
                {
                    display: none;
                }
            }

            @media screen and (min-width: 701px)
            {
                div#btns_apps700Menos
                {
                    display: none;
                }
            }

            /*Estilo de los links inferiores*/

            .avisosInf{
              color: black; 
              font-weight: bold; 
            }


            /* Fin Estilo mapa con imagen */

            /* Estilos letra aviso */

            .tituloAviso{
              color: red;
              font-weight: lighter;
              font-family: Sans-serif;
            }

            .textoAviso{
              color: black;
              font-weight: normal;
            }

            div.scroll {

                overflow: scroll;
            }

            .letraNegrita{
              font-weight: bold;
            }

            .maracatexto{
              background-color: yellow;
            }
        </style>
    </head>
    <body>
      <div class="flex-center position-ref full-height">
   
        <div class="content">
          <div id="map"></div>
          <div id="contactform"></div>
          <div id="contenedorTermino"></div>
          <div id="imagenSplash" class="scroll"><br><span class="tituloAviso letraNegrita"><center>TÉRMINOS Y CONDICIONES</center><br>
            <span class="textoAviso">Los servicios proporcionados por Devworms S.A. de C.V., con domicilio en C. Noche Buena No. 22, Col. La Navidad, Delegación Cuajimalpa, C.P. 05210, Ciudad de México, México.<br><br>

            Mediante la utilización de nuestra aplicación <span class="maracatexto">WeShick</span> usted está aceptando estas condiciones. Léalas detenidamente.<br><br>

            <span class="maracatexto">WeShick es una aplicación que sirve como herramienta para interactuar con las personas a tu alrededor, compartiendo videos en tiempo real sobre un mapa, para tener información real y confiable.</span><br><br>

            Nuestro Servicio está disponible para dispositivos móviles (Smartphone). <br><br>

            Es necesario crear una cuenta desde su smartphone para utilizar la aplicación. Para proteger su cuenta mantenga la confidencialidad de su contraseña. Usted es responsable de la actividad que se desarrolle en su cuenta o a través de ella. <br><br>

            No utilice nuestros Servicios de forma indebida. Por ejemplo, no interfiera en nuestros Servicios ni intente acceder a ellos por otro método diferente a la interfaz y las instrucciones que le proporcionamos. Podremos suspender o dejar de proveerle nuestros Servicios si usted incumple nuestras condiciones o políticas o si estamos investigando una presunta conducta indebida.<br><br>

            <span class="letraNegrita">Privacidad y Protección de derechos de autor</span><br><br>

            El uso de la aplicación no otorga derecho de propiedad intelectual alguno sobre nuestro Servicio o contenido al que acceda. No podrá utilizar el contenido de nuestro Servicio a menos que obtenga el permiso de su propietario o que ello esté permitido por ley. Estas condiciones no le otorgan el derecho de utilizar marca o logotipo alguno utilizado en nuestros Servicio. <br><br>

            En relación con su uso de la aplicación, podremos enviarle anuncios del servicio, mensajes administrativos y otra información. Usted podrá rechazar algunas de dichas comunicaciones.<br><br>

            En nuestro aviso de privacidad DEVWORMS S.A. DE C.V. le explica el modo en que tratamos sus datos personales y protegemos su privacidad cuando utiliza nuestros Servicios. Al utilizar la aplicación, usted acepta que DEVWORMS S.A. DE C.V. puede utilizar dichos datos de acuerdo con nuestro Aviso de Privacidad.<br><br>

            <span class="letraNegrita">Su contenido en nuestros Servicios</span><br><br>

            La aplicación le permite subir, almacenar, enviar o recibir contenido, Usted conservará los derechos de propiedad intelectual que posea sobre dicho contenido. En resumen, lo que le pertenece a usted, continúa siendo suyo.<br><br>

            Los derechos que usted otorga en esta licencia son para el objetivo limitado de operar, promocionar y mejorar nuestros Servicios, y para desarrollar otros nuevos. Algunos Servicios pueden ofrecerle distintas maneras de acceder y eliminar contenido que se haya proporcionado para ese Servicio. Además, en algunos de nuestros Servicios, hay condiciones o parámetros de configuración que limitan el alcance de nuestro uso del contenido provisto en aquellos Servicios. Asegúrese de tener los derechos necesarios para otorgarnos esta licencia para cualquier contenido que envíe a nuestros Servicios.<br><br>

            Usted puede encontrar más información sobre el modo en que DEVWORMS S.A. DE C.V. utiliza y almacena contenido en el Aviso de Privacidad. Si usted envía comentarios o sugerencias sobre nuestros Servicios, podremos utilizarlos sin ninguna obligación hacia usted.<br><br>

            <span class="letraNegrita">Acerca del software en nuestros Servicios</span><br><br>

            Nuestra aplicación es un software descargable, este software podrá actualizarse automáticamente en su dispositivo cuando haya una nueva versión o función disponible. Algunos Servicios pueden permitirle predeterminar sus configuraciones de actualización automática.<br><br>

            <span class="letraNegrita">Modificación y cancelación de nuestros Servicios</span><br><br>

            Cambiamos y mejoramos continuamente nuestros Servicios. Podemos agregar o eliminar funcionalidades o características, y también suspender o interrumpir un Servicio en su totalidad.<br><br>

            Usted puede dejar de utilizar nuestros Servicios en cualquier momento, aunque lamentaríamos que lo hiciera. DEVWORMS S.A. DE C.V. también puede dejar de brindarle los Servicios, o agregar o crear nuevos límites a nuestros Servicios en cualquier momento.<br><br>

            Consideramos que usted es propietario de sus datos y que preservar su acceso a dichos datos es importante. Si cancelamos un Servicio, y siempre que ello fuere razonablemente posible, le notificaremos con una anticipación razonable y le brindaremos la posibilidad de obtener información bajo ese Servicio.<br><br>

            <span class="letraNegrita">Nuestras garantías y exenciones de responsabilidad</span><br><br>

            Proporcionamos nuestros Servicios con un nivel comercialmente razonable de competencia y cuidado, y esperamos que disfrute de dichos Servicios. Pero existen ciertas cosas que no prometemos sobre nuestros Servicios.<br><br>

            EXCEPTO POR LO QUE SE ESTABLECE EXPRESAMENTE EN ESTAS REALIZAN PROMESA ALGUNA ESPECÍFICA SOBRE LOS SERVICIOS. POR EJEMPLO, NO ASUMIMOS NINGÚN COMPROMISO RESPECTO AL CONTENIDO DE LOS SERVICIOS, LA FUNCIÓN ESPECÍFICA DE LOS SERVICIOS, O SU CONFIABILIDAD, DISPONIBILIDAD O CAPACIDAD PARA SATISFACER SUS NECESIDADES. PROPORCIONAMOS LOS SERVICIOS “TAL COMO ESTÁN”.<br><br>

            <span class="letraNegrita">Responsabilidad por nuestros Servicios</span><br><br>

            EN LA MEDIDA PERMITIDA POR LEY, LA RESPONSABILIDAD TOTAL DE DEVWORMS S.A. DE C.V. POR CUALQUIER RECLAMO EN VIRTUD DE LAS PRESENTES CONDICIONES, INCLUIDA CUALQUIER GARANTÍA IMPLÍCITA, ESTARÁ LIMITADA. EN NINGÚN CASO DEVWORMS S.A. DE C.V. SERÁN RESPONSABLES POR PÉRDIDAS O DAÑOS QUE NO SEAN RAZONABLEMENTE PREVISIBLES.<br><br>

            <span class="letraNegrita">Acerca de estas Condiciones</span><br><br>

            Podremos modificar las presentes condiciones o las condiciones adicionales aplicables a un Servicio para, por ejemplo, reflejar cambios en las leyes o en nuestros Servicios. Usted debe revisar las condiciones periódicamente. Publicaremos avisos sobre las modificaciones a estos términos en esta página. Publicaremos avisos sobre las condiciones adicionales modificadas, en el Servicio correspondiente. Las modificaciones no se aplicarán retroactivamente y entrarán en vigencia no antes de catorce días después de su publicación. Sin embargo, las modificaciones que reflejan nuevas funciones de un Servicio o las modificaciones realizadas por razones legales entrarán en vigencia de forma inmediata. Si no acepta las condiciones modificadas en un Servicio, debería cancelar el uso de dicho Servicio.<br><br>

            Estas condiciones gobiernan la relación entre DEVWORMS S.A. DE C.V. y usted, y no generan ningún tipo de derechos a favor de terceros.<br><br>

            Si usted no cumple estas condiciones no implica renuncia alguna a cualquier derecho que pudiera correspondernos (como iniciar una acción en el futuro).<br><br>

            Para la interpretación y cumplimiento de las presentes condiciones se aplicarán a cualquier controversia que surja o se relacione con las presentes condiciones o los Servicios. Todos los reclamos que surjan o se relacionen con las presentes condiciones o los Servicios, las partes se someten a la jurisdicción y competencia de los Tribunales Competentes de la Ciudad de México, renunciando a cualquier otro fuero que pudiera corresponderles en razón de sus domicilios o cualquier otra causa.


            </span>
          </div>
        </div>
      </div>
      <script>
        var neighborhoods = [
        {lat: 19.4360479, lng: -99.1546253},
        {lat: 19.4348516, lng: -99.1590786},
        {lat: 19.432388, lng: -99.1624313},
        {lat: 19.4286291, lng: -99.1592747}, 
        {lat: 19.4406516, lng: -99.1417262}, 
        {lat: 19.4379791, lng: -99.1358919},
        {lat: 19.4290463, lng: -99.128623},
        {lat: 19.4254855, lng: -99.1272369}, 
        {lat: 19.436346, lng: -99.1330521}, 
        {lat: 19.4385992, lng: -99.1500907}
      ];

      var markers = [];
      var map;
      var sirve = "img/marker.png";

      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 15,
          disableDefaultUI: true,
          center: {lat: 19.431722, lng: -99.1423354}
        });
        drop();
      }

      function drop() {
        clearMarkers();
        for (var i = 0; i < neighborhoods.length; i++) {
          addMarkerWithTimeout(neighborhoods[i], i * 200);
        }
      }

      function addMarkerWithTimeout(position, timeout) {
        window.setTimeout(function() {
          markers.push(new google.maps.Marker({
            position: position,
            map: map,
            icon: sirve,
            animation: google.maps.Animation.DROP
          }));
        }, timeout);
      }

      function clearMarkers() {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(null);
        }
        markers = [];
      }  
      </script>
      <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAUe_w9wXwPFDR6wh2Ey5pUOJtI_jp_itg&callback=initMap">
      </script>
    </body>
</html>
