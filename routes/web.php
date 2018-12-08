<?php

Route::get('/', function() {
    return redirect('/autos');
});

Route::resource('autos', 'AutoController')
    ->only(['index', 'create', 'store']);
