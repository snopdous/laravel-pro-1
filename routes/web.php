<?php

Route::get('/', 'Home@index');
Route::get('/about','Home@about');
Route::get('/contact-us','Home@contact');
Route::get('/services','Home@services');