<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
	return '<h1>Halo</h1>'
	.'Selamat datang di web app robi<br>'
	.'Laravel, memang keren.';
});
Route::get('/about/1', function() {
	return '<h1>Halaman about 1</h1>';
});
Route::get('/about/2', function() {
	return '<h1>Halaman  about 2</h1>';
});
Route::get('/about/3', function() {
	return '<h1>Halaman about 3</h1>';
});
Route::get('/about/4', function() {
	return '<h1>Halaman about 4</h1>';
});
Route::get('/about/5', function() {
	return '<h1>Halaman about 5</h1>';
});
Route::get('/about/{robi}', function($r) {
	return '<h1>Halaman about '.$r.'</h1>';
});
Route::get('/about', function() {
	return '<h1>Halaman about 1</h1>';
});
Route::get('/kontak', function() {
	return view('kontak');
});
Route::get('/about/{id}', function($a) {
	return '<h1>Halaman about '.$a.'</h1>';
});
Route::get('/kantin', function() {
	return view('kantin');
});
Route::get('/kantin/{robi}/{a}/{b}', function($r,$a,$b) {
 	return '<h1>minumannya : <br> '.$r.'</h1>'
 	.'<h1>makananya : <br>'.$a.'</h1>'
 	.'<h1>cemilan anda : <br>'.$b.'</h1>';
 });
// route optional parameter
Route::get('user/{name?}',function($name = '<h1>robi</h1>'){
	return '<h1>nama '.$name.'</h1>';

});