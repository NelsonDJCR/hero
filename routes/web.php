<?php



Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'ControllerAdmin@index')->name('admin.index');
    Route::get('enemies', 'ControllerEnemy@index')->name('admin.enemies');
    Route::get('heroes', 'ControllerHero@index')->name('admin.heroes');
    Route::get('items', 'ControllerItem@index')->name('admin.items');
});





