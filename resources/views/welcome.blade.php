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
            #imagenSplash{
              position: absolute; 
              z-index: 1; /* The z-index should be higher than Google Maps */
              height: 100%;
              width: 100%;
              color: white;
              top: 0; 
              left: 0; 
            }
            .porcentaje{
              width: 49%;
              height: auto;
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
        </style>
    </head>
    <body>
      <div class="flex-center position-ref full-height">
   
        <div class="content">
          <div id="map"></div>
          <div id="contactform"></div>
          <div id="imagenSplash" style="text-align: center;"><img class="porcentaje" src="{{ asset('img/splashCorto.png') }}"><br>
            <div id="btns_apps700Mas">
              <a href="#!"><img class="porcentaje2" src="{{ asset('img/android.png') }}"></a><a href="#!"><img class="porcentaje2" src="{{ asset('img/apple.png') }}"></a> <br><br><br><span class="avisosInf"><a target="_blank" href="http://devwors.com/avisodeprivacidad">Aviso de privacidad</a> | <a target="_blank" href="termino">Terminos y condiciones</a> | <a target="_blank" href="mailto:contact@devworms.com"> Contacto</a></span>
            </div>
            <div id="btns_apps700Menos">
              <a href="#!"><img class="btn_700m" src="{{ asset('img/android.png') }}"></a><a href="#!"><br><br><img  class="btn_700m"src="{{ asset('img/apple.png') }}"></a><br><br><br><span class="avisosInf" style="font-size: 11px;"><a target="_blank" href="http://devwors.com/avisodeprivacidad">Aviso de privacidad</a> | <a target="_blank" href="termino">Terminos y condiciones</a> | <a href="mailto:contact@devworms.com"> Contacto</a></span>
            </div>
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
      var sirve = "{{ asset('img/marker.png') }}";

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
