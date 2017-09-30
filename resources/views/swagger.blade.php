<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <title>{{ config('app.name', 'Devworms') }} | Documentación</title>
    <link rel="icon" type="image/png" href="{{ asset('swagger/images/favicon.ico') }}" sizes="32x32" />
    <link rel="icon" type="image/png" href="{{ asset('swagger/images/favicon.ico') }}" sizes="16x16" />
    <link href="{{ asset('swagger/css/typography.css') }}" media='screen' rel='stylesheet' type='text/css'/>
    <link href="{{ asset('swagger/css/reset.css') }}" media='screen' rel='stylesheet' type='text/css'/>
    <link href="{{ asset('swagger/css/screen.css') }}" media='screen' rel='stylesheet' type='text/css'/>
    <link href="{{ asset('swagger/css/reset.css') }}" media='print' rel='stylesheet' type='text/css'/>
    <link href="{{ asset('swagger/css/print.css') }}" media='print' rel='stylesheet' type='text/css'/>

    <script src="{{ asset('swagger/lib/object-assign-pollyfill.js') }}" type='text/javascript'></script>
    <script src="{{ asset('swagger/lib/jquery-1.8.0.min.js') }}" type='text/javascript'></script>
    <script src="{{ asset('swagger/lib/jquery.slideto.min.js') }}" type='text/javascript'></script>
    <script src="{{ asset('swagger/lib/jquery.wiggle.min.js') }}" type='text/javascript'></script>
    <script src="{{ asset('swagger/lib/jquery.ba-bbq.min.js') }}" type='text/javascript'></script>
    <script src="{{ asset('swagger/lib/handlebars-4.0.5.js') }}" type='text/javascript'></script>
    <script src="{{ asset('swagger/lib/lodash.min.js') }}" type='text/javascript'></script>
    <script src="{{ asset('swagger/lib/backbone-min.js') }}" type='text/javascript'></script>
    <script src="{{ asset('swagger/swagger-ui.js') }}" type='text/javascript'></script>
    <script src="{{ asset('swagger/lib/highlight.9.1.0.pack.js') }}" type='text/javascript'></script>
    <script src="{{ asset('swagger/lib/highlight.9.1.0.pack_extended.js') }}" type='text/javascript'></script>
    <script src="{{ asset('swagger/lib/jsoneditor.min.js') }}" type='text/javascript'></script>
    <script src="{{ asset('swagger/lib/marked.js') }}" type='text/javascript'></script>
    <script src="{{ asset('swagger/lib/swagger-oauth.js') }}" type='text/javascript'></script>

    <script src='{{ asset("swagger/lang/translator.js") }}' type='text/javascript'></script>
    <script src='{{ asset("swagger/lang/es.js") }}' type='text/javascript'></script>

    <script type="text/javascript">
        $(function () {
            var url = window.location.search.match(/url=([^&]+)/);
            if (url && url.length > 1) {
                url = decodeURIComponent(url[1]);
            } else {
                url = "{{ asset('swagger/docs.json') }}";
            }

            hljs.configure({
                highlightSizeThreshold: 5000
            });

            // Pre load translate...
            if(window.SwaggerTranslator) {
                window.SwaggerTranslator.translate();
            }
            window.swaggerUi = new SwaggerUi({
                url: url,
                dom_id: "swagger-ui-container",
                supportedSubmitMethods: ['get', 'post', 'put', 'delete', 'patch'],
                onComplete: function(swaggerApi, swaggerUi){
                    if(typeof initOAuth == "function") {
                        initOAuth({
                            clientId: "your-client-id",
                            clientSecret: "your-client-secret-if-required",
                            realm: "your-realms",
                            appName: "your-app-name",
                            scopeSeparator: " ",
                            additionalQueryStringParams: {}
                        });
                    }

                    if(window.SwaggerTranslator) {
                        window.SwaggerTranslator.translate();
                    }
                },
                onFailure: function(data) {
                    log("Unable to Load SwaggerUI");
                },
                docExpansion: "none",
                jsonEditor: false,
                defaultModelRendering: 'schema',
                showRequestHeaders: false,
                showOperationIds: false
            });

            window.swaggerUi.load();

            function log() {
                if ('console' in window) {
                    console.log.apply(console, arguments);
                }
            }
        });
    </script>
</head>

<body class="swagger-section">
<div id='header'>
    <div class="swagger-ui-wrap">
        <a id="logo" href="#"><img class="logo__title devworms_logo" alt="swagger" src="{{ asset('swagger/images/devworms.png') }}" /></a>
    </div>
</div>

<div id="message-bar" class="swagger-ui-wrap" data-sw-translate>&nbsp;</div>
<div id="swagger-ui-container" class="swagger-ui-wrap"></div>
</body>
</html>
