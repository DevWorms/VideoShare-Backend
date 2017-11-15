    <?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('doc','DocController@documentacion');

Route::get('termino','TerminosCon@termino');
