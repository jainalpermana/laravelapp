<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('/siswa', 'SiswaController@tampil');